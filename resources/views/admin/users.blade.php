@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Users Management')

@section('content')

{{-- Search & Filter --}}
<form method="GET" class="mb-4 d-flex gap-2">
    <input type="text" id="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name or email">
    <select id="role" class="form-select">
        <option value="">All Roles</option>
        <option value="admin" {{ request('role')=='admin'?'selected':'' }}>Admin</option>
        <option value="user" {{ request('role')=='user'?'selected':'' }}>User</option>
    </select>
    <button type="button" id="filterBtn" class="btn btn-primary"><i class="bi bi-funnel-fill me-1"></i>Filter</button>
</form>

{{-- Create User Button --}}
<button class="btn btn-success mb-3"
        data-bs-toggle="modal"
        data-bs-target="#createUserModal"
        id="createUserBtn">
    <i class="bi bi-plus-circle me-1"></i> Create New User
</button>

{{-- Users Table --}}
<div class="table-responsive">
    <div id="successMessage" class="alert alert-success d-none"></div>
    <table class="table table-dark table-striped table-hover" id="usersTable">
        <thead>
            <tr>
                <th>#</th>
                <th><i class="bi bi-person-fill me-1"></i>Name</th>
                <th><i class="bi bi-envelope me-1"></i>Email</th>
                <th><i class="bi bi-shield-lock me-1"></i>Role</th>
                <th><i class="bi bi-calendar2-check me-1"></i>Created At</th>
                <th><i class="bi bi-gear-fill me-1"></i>Actions</th>
            </tr>
        </thead>
        <tbody id="usersTableBody">
            @foreach($users as $user)
            <tr id="userRow{{ $user->id }}">
                <td>{{ $loop->iteration + ($users->currentPage()-1)*$users->perPage() }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->role === 'admin')
                        <span class="badge bg-primary"><i class="bi bi-shield-fill-check me-1"></i>Admin</span>
                    @else
                        <span class="badge bg-secondary"><i class="bi bi-person me-1"></i>User</span>
                    @endif
                </td>
                <td>{{ $user->created_at->format('d M, Y') }}</td>
                <td class="d-flex gap-1">
                    <button class="btn btn-sm btn-warning editUserBtn" data-id="{{ $user->id }}"><i class="bi bi-pencil-square me-1"></i>Edit</button>
                    <button class="btn btn-sm btn-danger deleteUserBtn" data-id="{{ $user->id }}"><i class="bi bi-trash-fill me-1"></i>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Pagination --}}
{{ $users->links() }}

<!-- Create Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="createUserForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <label for="">Name</label>
          <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
          <label for="">Email address</label>
          <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
          <label for="">Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-2" required>
          <label for="">User Role</label>
          <select name="is_admin" class="form-select">
            <option value="admin">Admin</option>      
             <option value="user">User</option>                  
          </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Create</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="editUserForm">
      <input type="hidden" name="user_id" id="editUserId">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <label for="">Name</label>
          <input type="text" name="name" id="editName" class="form-control mb-2" required>
          <label for="">Email address</label>
          <input type="email" name="email" id="editEmail" class="form-control mb-2" required>
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Leave blank to keep current" class="form-control mb-2">
          <label for="">Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control mb-2">
          <label for="">User Role</label>
          <select name="is_admin" id="editIsAdmin" class="form-select">
            <option value="admin">Admin</option>      
             <option value="user">User</option>
          </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Update</button>
        </div>s
      </div>
    </form>
  </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function(){

    // ===== Setup CSRF token for all AJAX requests =====
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ===== Bootstrap 5 modal instances =====
    var createModal = new bootstrap.Modal(document.getElementById('createUserModal'));
    var editModal = new bootstrap.Modal(document.getElementById('editUserModal'));

    // ===== Open Create Modal =====
    $('#createUserBtn').click(function(){
        $('#createUserForm')[0].reset();
        $('#createErrors').addClass('d-none').html('');
        createModal.show();
    });

    // ===== Open Edit Modal =====
    $(document).on('click', '.editUserBtn', function(){
        let id = $(this).data('id');
        $('#editErrors').addClass('d-none').html('');

        $.get(`/admin/users/${id}/edit`, function(data){
            $('#editUserId').val(data.id);
            $('#editName').val(data.name);
            $('#editEmail').val(data.email);

            // ✅ FIX IS HERE
            $('#editIsAdmin').val(data.role);

            editModal.show();
        });
    });

    $('#createUserForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: `/admin/users`,
            method: 'POST',
            data: $(this).serialize(), // make sure _token is included
            success: function(res){
                createModal.hide();

                // ✅ Show success message
                $('#successMessage')
                    .removeClass('d-none')
                    .html('User created successfully!')
                    .fadeIn();

                setTimeout(() => {
                    $('#successMessage').fadeOut();
                }, 3000);

                // Format date
                let date = new Date(res.user.created_at);
                let formattedDate = date.toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                });

                let user = res.user;
                let serial = $('#usersTableBody tr').length + 1;

                let roleHtml = user.role === 'admin'
                    ? `<span class="badge bg-primary">Admin</span>`
                    : `<span class="badge bg-secondary">User</span>`;

                let row = `<tr id="userRow${user.id}">
                    <td>${serial}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${roleHtml}</td>
                    <td>${formattedDate}</td>
                    <td class="d-flex gap-1">
                        <button class="btn btn-sm btn-warning editUserBtn" data-id="${user.id}">Edit</button>
                        <button class="btn btn-sm btn-danger deleteUserBtn" data-id="${user.id}">Delete</button>
                    </td>
                </tr>`;

                $('#usersTableBody').append(row);
            },
            error: function(err){
                let html = '';
                if(err.responseJSON?.errors){
                    $.each(err.responseJSON.errors, function(k,v){
                        html += `<div>${v[0]}</div>`;
                    });
                    $('#createErrors').removeClass('d-none').html(html);
                }
            }
        });
    });
    // ===== Edit User via AJAX =====
    $('#editUserForm').submit(function(e){
        e.preventDefault();
        let id = $('#editUserId').val();

        $.ajax({
            url: `/admin/users/${id}`,
            method: 'PUT',
            data: $(this).serialize(),
            success: function(res){
                editModal.hide();

                // ✅ Show success message
                $('#successMessage')
                    .removeClass('d-none')
                    .html('User updated successfully!')
                    .fadeIn();

                setTimeout(() => {
                    $('#successMessage').fadeOut();
                }, 3000);

                let user = res.user;

                // ✅ FIXED date bug
                let date = new Date(user.created_at);
                let formattedDate = date.toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                });

                let roleHtml = user.role === 'admin'
                    ? `<span class="badge bg-primary">Admin</span>`
                    : `<span class="badge bg-secondary">User</span>`;

                let row = `
                    <td>${$('#userRow'+user.id).index()+1}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${roleHtml}</td>
                    <td>${formattedDate}</td>
                    <td class="d-flex gap-1">
                        <button class="btn btn-sm btn-warning editUserBtn" data-id="${user.id}">Edit</button>
                        <button class="btn btn-sm btn-danger deleteUserBtn" data-id="${user.id}">Delete</button>
                    </td>`;

                $(`#userRow${user.id}`).html(row);
            },
            error: function(err){
                let html = '';
                if(err.responseJSON?.errors){
                    $.each(err.responseJSON.errors, function(k,v){
                        html += `<div>${v[0]}</div>`;
                    });
                    $('#editErrors').removeClass('d-none').html(html);
                }
            }
        });
    });

    // ===== Delete User via AJAX =====
    $(document).on('click', '.deleteUserBtn', function(){
        if(confirm('Are you sure you want to delete this user?')){
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/users/${id}`,
                method: 'DELETE',
                success:function(){
                    $(`#userRow${id}`).remove();
                },
                error: function(err){
                    alert('Delete failed!');
                }
            });
        }
    });

});
</script>
@endpush
@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Users Management')

<!-- Users Blade (resources/views/admin/users.blade.php) -->
@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Users</h3>
        <button class="btn btn-primary" id="createUserBtn">+ Create User</button>
    </div>

    <!-- Users Table -->
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="usersTable">
            @foreach($users as $user)
            <tr id="userRow{{ $user->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                <td class="d-flex gap-1">
                    <button class="btn btn-sm btn-warning editUserBtn" data-id="{{ $user->id }}">
                        <i class="bi bi-pencil-square me-1"></i>Edit
                    </button>
                    <button class="btn btn-sm btn-danger deleteUserBtn" data-id="{{ $user->id }}">
                        <i class="bi bi-trash-fill me-1"></i>Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Create User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="createUserForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div id="createErrors" class="alert alert-danger d-none"></div>
            <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-2" required>
            <select name="is_admin" class="form-select">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Create</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Edit User Modal -->
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
            <div id="editErrors" class="alert alert-danger d-none"></div>
            <input type="text" name="name" id="editName" class="form-control mb-2" required>
            <input type="email" name="email" id="editEmail" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Leave blank to keep current" class="form-control mb-2">
            <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control mb-2">
            <select name="is_admin" id="editIsAdmin" class="form-select">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function(){

    // ===== Open Create Modal =====
    $('#createUserBtn').click(function(){
        $('#createUserForm')[0].reset();
        $('#createErrors').addClass('d-none').html('');
        var createModal = new bootstrap.Modal(document.getElementById('createUserModal'));
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
            $('#editIsAdmin').val(data.is_admin ? 1 : 0);

            var editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
            editModal.show();
        });
    });

    // ===== Create User =====
    $('#createUserForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: `/admin/users`,
            method: 'POST',
            data: $(this).serialize(),
            success: function(res){
                $('#createUserModal').modal('hide');
                // Add new row dynamically
                let user = res.user;
                let row = `<tr id="userRow${user.id}">
                    <td>#</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.is_admin ? 'Admin' : 'User'}</td>
                    <td class="d-flex gap-1">
                        <button class="btn btn-sm btn-warning editUserBtn" data-id="${user.id}"><i class="bi bi-pencil-square me-1"></i>Edit</button>
                        <button class="btn btn-sm btn-danger deleteUserBtn" data-id="${user.id}"><i class="bi bi-trash-fill me-1"></i>Delete</button>
                    </td>
                </tr>`;
                $('#usersTable').append(row);
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

    // ===== Edit User =====
    $('#editUserForm').submit(function(e){
        e.preventDefault();
        let id = $('#editUserId').val();

        $.ajax({
            url: `/admin/users/${id}`,
            method: 'PUT',
            data: $(this).serialize(),
            success: function(res){
                $('#editUserModal').modal('hide');
                // Update table row dynamically
                let user = res.user;
                let row = `
                    <td>#</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.is_admin ? 'Admin' : 'User'}</td>
                    <td class="d-flex gap-1">
                        <button class="btn btn-sm btn-warning editUserBtn" data-id="${user.id}"><i class="bi bi-pencil-square me-1"></i>Edit</button>
                        <button class="btn btn-sm btn-danger deleteUserBtn" data-id="${user.id}"><i class="bi bi-trash-fill me-1"></i>Delete</button>
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

    // ===== Delete User =====
    $(document).on('click', '.deleteUserBtn', function(){
        if(confirm('Are you sure?')){
            let id = $(this).data('id');
            $.ajax({
                url: `/admin/users/${id}`,
                method: 'DELETE',
                data: {_token:'{{ csrf_token() }}'},
                success:function(){
                    $(`#userRow${id}`).remove();
                }
            });
        }
    });

});
</script>
@endsection
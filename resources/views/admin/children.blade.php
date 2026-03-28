@extends('layouts.admin')

@section('title', 'Children')
@section('page-title', 'Children Registrations')

@section('content')

<form method="GET" class="mb-4 d-flex gap-2">
    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by child/parent/email">
    <select name="status" class="form-select">
        <option value="">All Status</option>
        <option value="paid" {{ request('status')=='paid'?'selected':'' }}>Paid</option>
        <option value="unpaid" {{ request('status')=='unpaid'?'selected':'' }}>Unpaid</option>
    </select>
    <button class="btn btn-primary"><i class="bi bi-funnel-fill me-1"></i>Filter</button>
</form>

<div class="table-responsive">
    <div class="table-responsive">
    <div id="successMessage" class="alert alert-success d-none"></div>
<div id="errorMessage" class="alert alert-danger d-none"></div>
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th><i class="bi bi-person-lines-fill me-1"></i>Child Name</th>
                <th><i class="bi bi-person-circle me-1"></i>Parent Name</th>
                <th><i class="bi bi-envelope me-1"></i>Email</th>
                <th><i class="bi bi-check2-circle me-1"></i>Paid</th>
                <th><i class="bi bi-credit-card me-1"></i>Payment Ref</th>
                <th><i class="bi bi-credit-card me-1"></i>Payment Status</th>
                <th><i class="bi bi-gear-fill me-1"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($children as $child)
            <tr>
                <td>{{ $loop->iteration + ($children->currentPage()-1)*$children->perPage() }}</td>
                <td>{{ $child->full_name }}</td>
                <td>{{ $child->parent_name }}</td>
                <td>{{ $child->email }}</td>
                <td>
                    @if($child->paid)
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Yes</span>
                    @else
                        <span class="badge bg-warning text-dark"><i class="bi bi-x-circle me-1"></i>No</span>
                    @endif
                </td>
                <td>{{ $child->payment_reference }}</td>
                <td>
                    @if($child->payment_status=='success')
                        <span class="badge bg-info"><i class="bi bi-check-circle me-1"></i>Success</span>
                    @else
                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Failed</span>
                    @endif
                </td>
                <td class="d-flex gap-1">
                    <!-- Query Button -->
                    <button class="btn btn-info btn-sm queryBtn"
                        data-type="designer"
                        data-id="{{ $child->id }}">
                        <i class="bi bi-search me-1"></i>Query
                    </button>

                    <!-- Resend Button -->
                    <button class="btn btn-success btn-sm resendBtn"
                        data-type="designer"
                        data-id="{{ $child->id }}"
                        {{ $child->payment_status != 'success' ? 'disabled' : '' }}>
                        <i class="bi bi-envelope-fill me-1"></i>Resend
                    </button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $children->links() }}

@push('scripts')
<script>
$(document).ready(function(){

    // ===== Query Payment =====
    $(document).on('click', '.queryBtn', function(){
        let btn = $(this);
        let id = btn.data('id');
        let type = btn.data('type');

        btn.prop('disabled', true).html('Checking...');

        $.ajax({
            url: "{{ route('admin.child.queryPayment') }}",
            method: 'POST',
            data: {
                id: id,
                type: type,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(res){

                // Update Paid Badge
                let paidBadge = res.paid
                    ? `<span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Yes</span>`
                    : `<span class="badge bg-warning text-dark"><i class="bi bi-x-circle me-1"></i>No</span>`;
                btn.closest('tr').find('td:nth-child(4)').html(paidBadge);

                // Update Payment Status Badge
                let statusBadge = res.status === 'success'
                    ? `<span class="badge bg-info"><i class="bi bi-check-circle me-1"></i>Success</span>`
                    : `<span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Failed</span>`;
                btn.closest('tr').find('td:nth-child(5)').html(statusBadge);

                // Enable resend if payment successful
                btn.closest('tr').find('.resendBtn').prop('disabled', res.status !== 'success');

                // Reset button
                btn.prop('disabled', false).html('<i class="bi bi-search me-1"></i>Query');

                // Show response message
                if(res.status === 'success'){
                    $('#successMessage')
                        .removeClass('d-none')
                        .html(`Payment verified successfully! <br> Response: ${JSON.stringify(res)}`)
                        .fadeIn()
                        .delay(5000)
                        .fadeOut();
                } else {
                    $('#errorMessage')
                        .removeClass('d-none')
                        .html(`Payment verification failed. <br> Response: ${JSON.stringify(res)}`)
                        .fadeIn()
                        .delay(5000)
                        .fadeOut();
                }
            },
            error: function(xhr){
                btn.prop('disabled', false).html('<i class="bi bi-search me-1"></i>Query');

                let message = xhr.responseJSON?.error ?? 'Unknown error';
                $('#errorMessage')
                    .removeClass('d-none')
                    .html(`AJAX error: ${message}`)
                    .fadeIn()
                    .delay(5000)
                    .fadeOut();
            }
        });
    });

    // ===== Resend Email =====
    $(document).on('click', '.resendBtn', function(){
        let btn = $(this);
        let id = btn.data('id');
        let type = btn.data('type');

        btn.prop('disabled', true).html('Sending...');

        $.ajax({
            url: "{{ route('admin.child.resendEmail') }}",
            method: 'POST',
            data: {
                id: id,
                type: type,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(res){
                btn.prop('disabled', false).html('<i class="bi bi-envelope-fill me-1"></i>Resend');

                $('#successMessage')
                    .removeClass('d-none')
                    .html(`Email sent successfully! <br> Response: ${JSON.stringify(res)}`)
                    .fadeIn()
                    .delay(5000)
                    .fadeOut();
            },
            error: function(xhr){
                btn.prop('disabled', false).html('<i class="bi bi-envelope-fill me-1"></i>Resend');

                let message = xhr.responseJSON?.error ?? 'Unknown error';
                $('#errorMessage')
                    .removeClass('d-none')
                    .html(`Email sending failed: ${message}`)
                    .fadeIn()
                    .delay(5000)
                    .fadeOut();
            }
        });
    });

});
</script>
@endpush

@endsection
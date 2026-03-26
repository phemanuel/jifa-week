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
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th><i class="bi bi-person-lines-fill me-1"></i>Child Name</th>
                <th><i class="bi bi-person-circle me-1"></i>Parent Name</th>
                <th><i class="bi bi-envelope me-1"></i>Email</th>
                <th><i class="bi bi-check2-circle me-1"></i>Paid</th>
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
                <td>
                    @if($child->payment_status=='success')
                        <span class="badge bg-info"><i class="bi bi-check-circle me-1"></i>Success</span>
                    @else
                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Failed</span>
                    @endif
                </td>
                <td class="d-flex gap-1">
                    <button class="btn btn-primary btn-sm" onclick="queryPayment('child', {{ $child->id }})"><i class="bi bi-search me-1"></i>Query</button>
                    <form method="POST" action="{{ route('admin.resendEmail',['type'=>'child','id'=>$child->id]) }}">
                        @csrf
                        <button class="btn btn-primary btn-sm"><i class="bi bi-envelope-fill me-1"></i>Resend</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $children->links() }}

<script>
    function queryPayment(type,id){
        fetch(`/admin/query-payment/${type}/${id}`)
            .then(res => res.json())
            .then(data => {
                alert(`Reference: ${data.payment_reference}\nPaid: ${data.paid}\nStatus: ${data.payment_status}`);
            });
    }
</script>

@endsection
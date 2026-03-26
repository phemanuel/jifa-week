@extends('layouts.admin')

@section('title', 'Designers')
@section('page-title', 'Designers')

@section('content')

<form method="GET" class="mb-4 d-flex gap-2">
    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name or email">
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
                <th><i class="bi bi-person-badge me-1"></i>Designer Name</th>
                <th><i class="bi bi-envelope me-1"></i>Email</th>
                <th><i class="bi bi-check2-circle me-1"></i>Paid</th>
                <th><i class="bi bi-credit-card me-1"></i>Payment Status</th>
                <th><i class="bi bi-gear-fill me-1"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($designers as $designer)
            <tr>
                <td>{{ $loop->iteration + ($designers->currentPage()-1)*$designers->perPage() }}</td>
                <td>{{ $designer->designer_name }}</td>
                <td>{{ $designer->email }}</td>
                <td>
                    @if($designer->paid)
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Yes</span>
                    @else
                        <span class="badge bg-warning text-dark"><i class="bi bi-x-circle me-1"></i>No</span>
                    @endif
                </td>
                <td>
                    @if($designer->payment_status=='success')
                        <span class="badge bg-info"><i class="bi bi-check-circle me-1"></i>Success</span>
                    @else
                        <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i>Failed</span>
                    @endif
                </td>
                <td class="d-flex gap-1">
                    <button class="btn btn-primary btn-sm" onclick="queryPayment('designer', {{ $designer->id }})"><i class="bi bi-search me-1"></i>Query</button>
                    <form method="POST" action="{{ route('admin.resendEmail',['type'=>'designer','id'=>$designer->id]) }}">
                        @csrf
                        <button class="btn btn-primary btn-sm"><i class="bi bi-envelope-fill me-1"></i>Resend</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $designers->links() }}

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
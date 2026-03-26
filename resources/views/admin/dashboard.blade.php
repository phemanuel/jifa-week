@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="row g-4">
    {{-- Designers --}}
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h5><i class="bi bi-person-badge me-2"></i>Total Designers</h5>
            <h2>{{ $totalDesigners }}</h2>
            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Paid: {{ $paidDesigners }}</small><br>
            <small class="text-warning"><i class="bi bi-x-circle me-1"></i>Unpaid: {{ $unpaidDesigners }}</small>
        </div>
    </div>

    {{-- Children --}}
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h5><i class="bi bi-people me-2"></i>Total Children</h5>
            <h2>{{ $totalChildren }}</h2>
            <small class="text-success"><i class="bi bi-check-circle me-1"></i>Paid: {{ $paidChildren }}</small><br>
            <small class="text-warning"><i class="bi bi-x-circle me-1"></i>Unpaid: {{ $unpaidChildren }}</small>
        </div>
    </div>

    {{-- Summary --}}
    <div class="col-md-4">
        <div class="card text-center p-3">
            <h5><i class="bi bi-cash-stack me-2"></i>Total Payments</h5>
            <h2>{{ $paidDesigners + $paidChildren }}</h2>
            <small class="text-warning"><i class="bi bi-exclamation-triangle me-1"></i>Pending/Failed: {{ $unpaidDesigners + $unpaidChildren }}</small>
        </div>
    </div>
</div>

@endsection
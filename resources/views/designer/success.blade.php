@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="d-flex align-items-center justify-content-center mb-3 p-2 rounded shadow-sm" 
                 style="background: linear-gradient(90deg, #19170c, #08421a); color: #fff; font-size:1.1rem; font-weight:600;">
                Designer Participation
            </div>

            <div class="card shadow-lg">
                <div class="row g-0">

                    <!-- Image -->
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('images/designers.png') }}" 
                             class="img-fluid rounded shadow-sm"
                             style="max-width: 280px;">
                    </div>

                    <!-- Message -->
                    <div class="col-md-8">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">Payment Successful</h4>
                        </div>

                        <div class="card-body">

                            <div class="alert alert-success">
                                Your payment was successful 🎉
                            </div>

                            <p><strong>Brand:</strong> {{ $designer->brand_name }}</p>
                            <p><strong>Designer:</strong> {{ $designer->designer_name }}</p>
                            <p><strong>Amount Paid:</strong> ₦100,000</p>

                            <p class="mt-3">
                                Thank you for registering your interest to showcase at JIFAWEEK 2026 #LegendsWillRise. <br>

Kindly check your valid email inbox for the attached DESIGNERS PACKAGE, which contains full participation details and next steps.
We look forward to welcoming you as we create something truly legendary together.

                            </p>

                            <a href="{{route('home')}}" class="btn btn-primary mt-3">Return Home</a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
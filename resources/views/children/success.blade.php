@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Banner -->
            <div class="d-flex align-items-center justify-content-center mb-3 p-2 rounded shadow-sm" 
                 style="background: linear-gradient(90deg, #19170c, #08421a); color: #fff; font-size:1.1rem; font-weight:600;">
                Child Model Registration
            </div>

            <div class="card shadow-lg">
                <div class="row g-0">

                    <!-- Image (fixed top, not stretched) -->
                    <div class="col-md-4 bg-light p-3 d-flex justify-content-center">
                        <div style="max-width: 280px; align-self: flex-start;">
                            <img src="{{ asset('images/child.png') }}" 
                                 class="img-fluid rounded shadow-sm"
                                 alt="Children Banner">
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="col-md-8">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0" style="color:white;">Payment</h4>
                        </div>

                        <div class="card-body">

                            <div class="alert alert-success">
                                Your payment was successful 🎉
                            </div>

                            <p><strong>Child:</strong> {{ $children->full_name }}</p>
                            <p><strong>Parent / Guardian:</strong> {{ $children->parent_name }}</p>
                            <p><strong>Amount Paid:</strong> ₦{{ number_format($children->fee, 2) }}</p>

                            <p class="mt-3">
                                CONGRATULATIONS and thank you for registering your interest to participate as a Kid Model at <strong>JIFAWEEK 2026 – #LegendsWillRise</strong>.<br><br>

                                Kindly check your valid email inbox for the attached KID MODELS BROCHURE, which contains important guidelines, requirements, and next steps.
<br><br>

                                We also encourage every child model to start preparing for the upcoming casting/audition, come confident, shine bright, and be the STAR you truly are. 
<br><br>
Make sure you follow @jifaweekofficials on all socials
<br><br>
Warm Regards

                            </p>

                            <div class="text-end">
                                <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2">
                                    Return Home
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
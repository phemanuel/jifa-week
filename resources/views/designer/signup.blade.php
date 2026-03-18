@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        @if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif
        <div class="col-lg-10">

            <!-- Wizard Fee Banner -->
            <div class="d-flex align-items-center justify-content-center mb-3 p-2 rounded shadow-sm" 
                 style="background: linear-gradient(90deg, #cbcbc5, #bec1bf); color: #0d0c0c; font-size:1.1rem; font-weight:600;">
                <!-- <i class="bi bi-currency-dollar me-2" style="font-size:1.2rem;"></i> -->
                ₦10,000 Participation Fee
            </div>

            <div class="card shadow-lg">
                <div class="row g-0">
                    <!-- Left: Image -->
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-light p-3">
                        <img src="{{ asset('images/designers.png') }}" 
                             alt="Designer Banner" 
                             class="img-fluid rounded shadow-sm"
                             style="max-width: 280px; height: auto;">
                    </div>

                    <!-- Right: Wizard Form -->
                    <div class="col-md-8">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0" style='color:white'>Designer Registration</h4>
                            <div class="progress mt-2" style="height:6px;">
                                <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width:33%;"></div>
                            </div>
                        </div>

                        <form id="designerWizardForm" action="{{ route('designer.store') }}" method="POST" novalidate>
                            @csrf

                            <!-- Step 1: Brand Info -->
                            <div class="form-step" data-step="1">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Brand Information</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="brand_name" placeholder="Brand Name" required>
                                            <label>Brand Name</label>
                                            <div class="invalid-feedback">Brand name is required.</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="designer_name" placeholder="Designer Name" required>
                                            <label>Designer Name</label>
                                            <div class="invalid-feedback">Designer name is required.</div>
                                        </div>
                                    </div>

                                    <div class="row g-3 mt-2">
                                        <div class="col-md-4 form-floating">
                                            <select class="form-select" name="year_established" id="year_established" required>
                                                <option value="">Select Year</option>
                                                @php
                                                    $currentYear = date('Y');
                                                    $startYear = 1900;
                                                @endphp
                                                @for($year = $currentYear; $year >= $startYear; $year--)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                            <label for="year_established">Year Established</label>
                                            <div class="invalid-feedback">Please select the year.</div>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" name="instagram" placeholder="Instagram Handle">
                                            <label>Instagram Handle</label>
                                        </div>
                                        <div class="col-md-4 form-floating">
                                            <input type="text" class="form-control" name="website" placeholder="Website">
                                            <label>Website</label>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary mt-4 next-step float-end">Next</button>
                                </div>
                            </div>

                            <!-- Step 2: Contact Info -->
                            <div class="form-step d-none" data-step="2">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Contact Information</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                            <label>Phone Number (WhatsApp)</label>
                                            <div class="invalid-feedback">Phone is required.</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <label>Email Address</label>
                                            <div class="invalid-feedback">Valid email required.</div>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" name="business_address" placeholder="Business Address" style="height:100px"></textarea>
                                        <label>Business Address</label>
                                    </div>

                                    <button type="button" class="btn btn-secondary mt-4 prev-step">Back</button>
                                    <button type="button" class="btn btn-primary mt-4 next-step float-end">Next</button>
                                </div>
                            </div>

                            <!-- Step 3: Collection Info -->
                            <div class="form-step d-none" data-step="3">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Collection Details</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6 form-floating">
                                            <select class="form-select" name="category" required>
                                                <option value="">Select Category</option>
                                                <option>Children Ready-To-Wear</option>
                                                <option>Couture</option>
                                                <option>Sustainable Fashion</option>
                                                <option>Afrocentric</option>
                                                <option>Other</option>
                                            </select>
                                            <label>Category</label>
                                            <div class="invalid-feedback">Category required.</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="number" class="form-control" name="pieces" placeholder="Number of Pieces" required>
                                            <label>Number of Pieces</label>
                                            <div class="invalid-feedback">Number of pieces required.</div>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-3">
                                        <input type="text" class="form-control" name="collection_title" placeholder="Collection Title">
                                        <label>Collection Title</label>
                                    </div>

                                    <div class="form-floating mt-2">
                                        <textarea class="form-control" name="description" placeholder="Brief Description" style="height:100px"></textarea>
                                        <label>Brief Description</label>
                                    </div>

                                    <button type="button" class="btn btn-secondary mt-4 prev-step">Back</button>
                                    <button type="submit" class="btn btn-success mt-4 float-end fs-5 py-2">Save Information</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
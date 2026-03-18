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
                ₦10,000 Participation Fee
            </div>

            <div class="card shadow-lg">
                <div class="row g-0">
                        <!-- Left: Image -->
                        <div class="col-md-4 bg-light p-3 d-flex justify-content-center">
                            <div style="max-width: 280px;">
                                <img src="{{ asset('images/child.png') }}" 
                                    alt="Children Banner" 
                                    class="img-fluid rounded shadow-sm">
                            </div>
                        </div>

                    <!-- Right: Wizard Form -->
                    <div class="col-md-8">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0" style='color:white'>Children Registration</h4>
                            <div class="progress mt-2" style="height:6px;">
                                <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width:33%;"></div>
                            </div>
                        </div>

                        <form id="childWizardForm" action="{{ route('children.store') }}" method="POST" novalidate>
                            @csrf

                            <!-- Step 1: Child Information -->
                            <div class="form-step" data-step="1">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Child Information</h5>
                                    <div class="row g-3">
                                        <div class="col-md-12 form-floating">
                                            <input type="text" class="form-control" name="full_name" placeholder="Child Full Name" required>
                                            <label>Child Full Name</label>
                                            <div class="invalid-feedback">Child full name is required.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- <label class="form-label">Gender</label> -->
                                            <select class="form-select" name="gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <div class="invalid-feedback">Gender is required.</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="date" class="form-control" name="dob" required>
                                            <label>Date of Birth</label>
                                            <div class="invalid-feedback">Date of birth is required.</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="number" class="form-control" name="age" placeholder="Age" required>
                                            <label>Age</label>
                                            <div class="invalid-feedback">Age is required</div>
                                        </div>
                                        

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="nationality" placeholder="Nationality" required>
                                            <label>Nationality</label>
                                            <div class="invalid-feedback">Nationality is required</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="state_of_origin" placeholder="State of Origin" required>
                                            <label>State of Origin</label>
                                            <div class="invalid-feedback">State of Origin is required</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="home_address" placeholder="Home Address" required>
                                            <label>Home Address</label>
                                            <div class="invalid-feedback">Home Address is required</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="school_name" placeholder="School Name" required>
                                            <label>School Name</label>
                                            <div class="invalid-feedback">School Name is required</div>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="social_media" placeholder="Social Media">
                                            <label>Social Media Handle</label>
                                        </div>

                                        <h6 class="mt-3">Physical Details</h6>
                                        <div class="row g-3">
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="height" placeholder="Height">
                                                <label>Height (cm)</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="weight" placeholder="Weight">
                                                <label>Weight (kg)</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="chest" placeholder="Chest">
                                                <label>Chest (cm)</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="waist" placeholder="Waist">
                                                <label>Waist (cm)</label>
                                            </div>
                                            <div class="col-md-4 form-floating">
                                                <input type="number" step="0.01" class="form-control" name="shoe_size" placeholder="Shoe Size">
                                                <label>Shoe Size</label>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary mt-4 next-step float-end d-inline-block">Next</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Parent / Guardian Information -->
                            <div class="form-step d-none" data-step="2">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Parent / Guardian Information</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="parent_name" placeholder="Parent/Guardian Full Name" required>
                                            <label>Parent / Guardian Full Name</label>
                                            <div class="invalid-feedback">Guardian Name is required</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="relationship" placeholder="Relationship" required>
                                            <label>Relationship to Child</label>
                                            <div class="invalid-feedback">Relationship is required</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                            <label>Phone Number (WhatsApp)</label>
                                            <div class="invalid-feedback">Phone No is required</div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <label>Email Address</label>
                                            <div class="invalid-feedback">Email is required</div>
                                        </div>
                                        <div class="col-md-12 form-floating">
                                            <input type="text" class="form-control" name="parent_social_media" placeholder="Parent Social Media">
                                            <label>Parent Social Media Handle</label>
                                        </div>
                                        <div class="col-md-12 form-floating">
                                            <textarea class="form-control" name="residential_address" placeholder="Residential Address" style="height:80px"></textarea>
                                            <label>Residential Address</label>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="parent_id_type" placeholder="ID Type">
                                            <label>Parent / Guardian ID Type</label>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="parent_occupation" placeholder="Occupation">
                                            <label>Parent / Guardian Occupation</label>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-secondary mt-4 prev-step">Back</button>
                                    <button type="button" class="btn btn-primary mt-4 next-step float-end">Next</button>
                                </div>
                            </div>

                            <!-- Step 3: Child Talent / Health / Consent -->
                            <div class="form-step d-none" data-step="3">
                                <div class="card-body">
                                    <h5 class="text-primary mb-3">Child Talent & Health</h5>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label>Has the child modeled before?</label>
                                            <select class="form-select" name="has_modeled_before" required>
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="previous_experience" placeholder="If yes, specify">
                                            <label>Previous Experience</label>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="special_talents" placeholder="Special Talents">
                                            <label>Special Talents (Acting, Dancing, etc.)</label>
                                        </div>

                                        <div class="col-md-6 form-floating">
                                            <input type="text" class="form-control" name="talent_social_media" placeholder="Social Media Handle">
                                            <label>Social Media Handle</label>
                                        </div>

                                        <div class="col-md-12">
                                            <label>Does the child have any medical condition we should be aware of?</label>
                                            <select class="form-select" name="has_medical_condition" required>
                                                <option value="">Select</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 form-floating">
                                            <textarea class="form-control" name="medical_condition" placeholder="If yes, specify" style="height:80px"></textarea>
                                            <label>Medical Condition</label>
                                        </div>

                                    </div>

                                    <button type="button" class="btn btn-secondary mt-4 prev-step">Back</button>
                                    <button type="submit" class="btn btn-success mt-4 float-end fs-5 py-2">Submit Registration</button>
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
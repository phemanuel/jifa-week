@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Banner -->
            <div class="d-flex align-items-center justify-content-center mb-3 p-2 rounded shadow-sm" 
                 style="background: linear-gradient(90deg, #19170c, #08421a); color: #fff; font-size:1.1rem; font-weight:600;">
                Children Participation
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
                        <div class="card-header bg-danger text-white">
                            <h4 class="mb-0" style="color:white;">Payment</h4>
                        </div>

                        <div class="card-body">

                            <div class="alert alert-danger">
                                Unfortunately, your payment was not successful.
                            </div>

                            <p><strong>Child:</strong> {{ $children->full_name }}</p>
                            <p><strong>Parent / Guardian:</strong> {{ $children->parent_name }}</p>
                            <p><strong>Relationship:</strong> {{ $children->relationship }}</p>

                            <p class="mt-3">
                                Please try the payment again.
                            </p>

                            <div class="text-end">
                                <a href="{{ route('children.payment', $child->id) }}" 
                                   class="btn btn-success px-4 py-2">
                                    Try Payment Again
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
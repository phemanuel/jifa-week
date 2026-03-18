@extends('layouts.app')

@section('content')
<div class="container py-5">
    @if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Stylish Fee Banner -->
            <div class="d-flex align-items-center justify-content-center mb-3 p-2 rounded shadow-sm" 
                 style="background: linear-gradient(90deg, #19170c, #08421a); color: #fff; font-size:1.1rem; font-weight:600;">
                ₦{{ number_format($child->fee, 2) }} Participation Fee
            </div>

            <div class="card shadow-lg">
                <div class="row g-0">
                    <!-- Left: Image (top aligned, not stretched) -->
                    <div class="col-md-4 bg-light p-3 d-flex justify-content-center">
                        <div style="max-width: 280px; align-self: flex-start;">
                            <img src="{{ asset('images/child.png') }}" 
                                 alt="Child Banner" 
                                 class="img-fluid rounded shadow-sm">
                        </div>
                    </div>

                    <!-- Right: Payment Info -->
                    <div class="col-md-8">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0" style="color:white;">Payment for {{ $child->full_name }}</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Parent / Guardian:</strong> {{ $child->parent_name }}</p>
                            <p><strong>Relationship:</strong> {{ $child->relationship }}</p>
                            <p><strong>School:</strong> {{ $child->school_name ?? 'N/A' }}</p>
                            <p><strong>Amount:</strong> ₦{{ number_format($child->fee, 2) }}</p>
                            

                            <div class="text-end mt-3">
                                <button type="button" class="btn btn-success fs-5 py-2 px-4" id="payButton">Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Paystack Script -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
document.getElementById('payButton').addEventListener('click', function(){

    let amount = {{ $amount }}; // in kobo
    let paymentReference = '{{ $child->payment_reference ?? "CH" . time() }}';

    let handler = PaystackPop.setup({
        key: '{{ config("services.paystack.public_key") }}',
        email: '{{ $child->email }}',
        amount: amount,
        ref: paymentReference, 
        callback: function(response){
            window.location.href = "{{ route('children.verify') }}?reference=" + response.reference;
        },
        onClose: function(){
            alert('Payment window closed.');
        }
    });

    handler.openIframe();
});
</script>
@endsection
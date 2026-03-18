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

                    <!-- Right: Payment Info -->
                    <div class="col-md-8">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0" style="color:white;">Payment for {{ $designer->brand_name }}</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Designer:</strong> {{ $designer->designer_name }}</p>
                            <p><strong>Category:</strong> {{ $designer->category }}</p>
                            <p><strong>Collection:</strong> {{ $designer->collection_title }}</p>
                            <p><strong>Amount:</strong> ₦{{ number_format($designer->fee, 2) }}</p>

                            <button type="button" class="btn btn-success w-100 fs-5 py-2 mt-3" id="payButton">Pay Now</button>
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

    // Payment amount in kobo
    let amount = {{ $amount }};

    // Use the payment_reference generated when storing designer info
    let paymentReference = '{{ $designer->payment_reference ?? "DS" . time() }}';

    let handler = PaystackPop.setup({
        key: '{{ env("PAYSTACK_PUBLIC_KEY") }}',
        email: '{{ $designer->email }}',
        amount: amount, // in kobo
        ref: paymentReference, 
        callback: function(response){
            // Redirect to verify route with reference
            window.location.href = "{{ route('designer.verify') }}?reference=" + response.reference;
        },
        onClose: function(){
            alert('Payment window closed.');
        }
    });

    handler.openIframe();
});
</script>
@endsection
@extends('layouts.app')

@section('main-content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h1 class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent transform -rotate-2">Razorpay Payment Gateway</h1>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="{{ route('razorpay.make.payment') }}" method="POST" >
                @csrf 
                <script src="https://checkout.razorpay.com/v1/checkout.js"
                        data-key="{{ env('RAZORPAY_API_KEY') }}"
                        data-amount="100"
                        data-buttontext="Pay 100 INR"
                        data-name="Raju Chauhan"
                        data-description="A demo razorpay payment"  
                        {{-- data-image="https://www.laravelia.com/storage/logo.png" --}}
                        data-prefill.name="Raju Chauhan"
                        data-prefill.email="raju@gmail.com"
                        data-theme.color="#ff7529">
                </script>
            </form>
        </div>
    </div>
@endsection

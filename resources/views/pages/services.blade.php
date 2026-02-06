@extends('layouts.app')

@section('title', 'Services - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Services</h1>
    
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card service-card h-100">
                <div class="card-body">
                    <h4 class="card-title">{{ $service['title'] }}</h4>
                    <p class="card-text">{{ $service['desc'] }}</p>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h3>Ready to Transform Your Business?</h3>
                    <p>Contact us for a free consultation and project estimate</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Started Today</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
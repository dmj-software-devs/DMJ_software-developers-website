@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to DMJ Software Developers</h1>
        <p class="lead">{{ $tagline }}</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card service-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                    <h3>Custom Development</h3>
                    <p>Tailored software solutions for your business needs</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                    <h3>Mobile Apps</h3>
                    <p>iOS and Android applications for all platforms</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card service-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-cloud fa-3x text-primary mb-3"></i>
                    <h3>Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure and services</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Careers - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Join Our Team</h1>
    
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h3>Why Work With Us?</h3>
            <p>Be part of an innovative team that values creativity, collaboration, and professional growth.</p>
        </div>
    </div>

    <h3 class="mb-4">Current Openings</h3>
    <div class="row">
        @foreach($openings as $job)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title">{{ $job['title'] }}</h5>
                            <p class="card-text">
                                <span class="badge bg-info">{{ $job['type'] }}</span>
                                <span class="badge bg-secondary">{{ $job['location'] }}</span>
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h4>Don't See a Perfect Match?</h4>
                    <p>We're always looking for talented individuals. Send us your resume!</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Submit Resume</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
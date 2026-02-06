@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">About DMJ Software Developers</h1>
    
    <div class="row mb-5">
        <div class="col-lg-6">
            <h2>Our Story</h2>
            <p>Founded with a vision to transform businesses through technology, DMJ Software Developers has been at the forefront of digital innovation for over a decade.</p>
            <p>We specialize in creating custom software solutions that drive efficiency, enhance productivity, and foster growth for businesses of all sizes.</p>
        </div>
        <div class="col-lg-6">
            <h2>Our Mission</h2>
            <p>To deliver exceptional software solutions that empower businesses to achieve their digital transformation goals through innovation, quality, and customer-centric approach.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3><i class="fas fa-bullseye text-primary"></i> Our Vision</h3>
                    <p>To be the leading software development partner for businesses worldwide, recognized for our technical excellence and commitment to client success.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3><i class="fas fa-handshake text-primary"></i> Our Values</h3>
                    <ul>
                        <li>Innovation & Creativity</li>
                        <li>Quality & Excellence</li>
                        <li>Integrity & Transparency</li>
                        <li>Collaboration & Partnership</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3><i class="fas fa-chart-line text-primary"></i> Our Achievements</h3>
                    <p>200+ Successful Projects</p>
                    <p>50+ Happy Clients</p>
                    <p>10+ Industry Awards</p>
                    <p>5+ Years of Excellence</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
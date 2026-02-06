@extends('layouts.app')

@section('title', 'Contact Us - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Get in Touch</h1>
    
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="row mb-5">
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                    <h5>Address</h5>
                    <p>123 Tech Street<br>Software City, SC 12345</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                    <h5>Phone</h5>
                    <p>+1 (555) 123-4567</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                    <h5>Email</h5>
                    <p>info@dmjdevelopers.com</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Send us a Message</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
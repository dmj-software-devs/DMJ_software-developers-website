@extends('layouts.app')

@section('title', 'Our Team - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Meet Our Team</h1>
    
    <div class="row">
        @foreach($members as $member)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-img-top bg-secondary" style="height: 250px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user-circle fa-6x text-white"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $member['name'] }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $member['position'] }}</h6>
                    <div class="mt-3">
                        <a href="#" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark mx-2"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
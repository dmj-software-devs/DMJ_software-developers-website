@extends('layouts.app')

@section('title', 'Portfolio - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Our Work</h1>
    
    <div class="row mb-4">
        <div class="col-12">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary active">All</button>
                <button type="button" class="btn btn-outline-primary">Web</button>
                <button type="button" class="btn btn-outline-primary">Mobile</button>
                <button type="button" class="btn btn-outline-primary">Enterprise</button>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-img-top bg-secondary" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-project-diagram fa-5x text-white"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $project['name'] }}</h5>
                    <span class="badge bg-primary">{{ $project['category'] }}</span>
                    <p class="card-text mt-2">A comprehensive solution delivering exceptional results for our client.</p>
                    <a href="#" class="btn btn-outline-primary">View Case Study</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
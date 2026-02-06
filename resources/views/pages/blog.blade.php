@extends('layouts.app')

@section('title', 'Blog - DMJ Software Developers')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Tech & Company Updates</h1>
    
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">{{ $post['category'] }}</span>
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text"><small class="text-muted">{{ date('F j, Y', strtotime($post['date'])) }}</small></p>
                    <p class="card-text">Stay updated with the latest trends and insights in software development...</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>
@endsection
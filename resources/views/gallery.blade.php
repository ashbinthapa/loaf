<!-- resources/views/gallery.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gallery Archive</h1>
    <div class="row">
        @foreach ($data as $gallery)
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Display the first image as a thumbnail -->
                @if (!empty($gallery->image_url) && is_array($gallery->image_url))
                <img src="{{ asset('storage/' . $gallery->image_url[0]) }}" class="card-img-top ashbin-fixed-image" alt="{{ $gallery->title }}">
                @else
                <img src="{{ asset('default-placeholder.png') }}" class="card-img-top ashbin-fixed-image" alt="Default Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $gallery->title }}</h5>
                    <p class="card-text">{{ Str::limit($gallery->description, 100) }}</p>
                    <a href="{{ route('gallery.single', ['title' => $gallery->title]) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
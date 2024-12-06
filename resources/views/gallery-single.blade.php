<!-- resources/views/gallery-single.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $data->title }}</h1>
    <p>{{ $data->description }}</p>

    <div class="row">
        <!-- Loop through and display all images -->
        @if ($data->image_url && is_array($data->image_url))
        @foreach ($data->image_url as $image)
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $data->title }}" class="img-fluid">
        </div>
        @endforeach
        @else
        <p>No images available for this gallery.</p>
        @endif
    </div>

    <a href="{{ route('gallery.archive') }}" class="btn btn-secondary mt-4">Back to Gallery</a>
</div>
@endsection
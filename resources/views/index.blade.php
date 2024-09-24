<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('title', 'IDEA - Improving Learning: Developing Measures of Accountability and Evaluating their Association with Student’s Gains in Achievement in Nepal')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('uploads/idea-slider1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('uploads/idea-slider2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('uploads/idea-slider3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('uploads/idea-slider4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('uploads/idea-slider5.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<div>
    <p>

    </p>
</div>
@endsection
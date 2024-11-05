<!-- resources/views/data.blade.php -->
@extends('layouts.app')

@section('title', 'data')

@section('content')

<div class="ashbin-section">
    <p class="ashbin-title">DATA</p>
    @foreach ($data['posts_all'] as $post)
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            Instruments<br>
            <p>{{$post->instruments}}</p><br>
            Data <br>
            <p>{{$post->data}}</p><br>
            Codebook <br>
            <p> {{ $post->codebook }}</p>

        </div>
    </div>
    @endforeach
</div>

@endsection
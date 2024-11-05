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
            <h5>Instruments</h5>
            <p>{!! $post->instruments !!}</p>
            <h5>Codebook</h5>
            <p>{!! $post->data !!}</p>
            <h5>Data</h5>
            <p> {!! $post->codebook !!}</p>

        </div>
    </div>
    @endforeach
</div>

@endsection
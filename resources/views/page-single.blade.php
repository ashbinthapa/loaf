<!-- resources/views/page-single.blade.php -->
@extends('layouts.app')

@section('title', 'publication')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">PUBLICATIONS</p>
</div>
<div class="ashbin-section">
    @foreach ($data['posts_all'] as $post)
    {!! $post->publication !!} <br>
    @endforeach
</div>
@endsection
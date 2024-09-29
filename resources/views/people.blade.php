<!-- resources/views/investigators.blade.php -->
@extends('layouts.app')

@section('title', 'investigators')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">Investigators</p>
    @foreach ($data['posts_all'] as $post)

    <div class="row">
        <div class="col-3 ashbin-investigator-image">
            <img src="{{ $post->image }}" alt="Idea-Iser">

        </div>
        <div class="col-9">
            <div class="ashbin-investigator-name">
                {{ $post->name }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->position }}
            </div>
            <div class="ashbin-investigator-phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                {{ $post->phone }}
            </div>
            <div class="ashbin-investigator-email">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                {{ $post->email }}
            </div>
            <div class="ashbin-investigator-role-description">
                {{ $post->details }}
            </div>
        </div>
        <div class="ashbin-investigator-explanation">
            {!! $post->content !!}
        </div>
        <div>
            <a href="{{ $post->cvupload }}">
                <h3 class="ashbin-button"><span>Download CV</span></h3>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection
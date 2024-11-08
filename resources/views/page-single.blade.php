<!-- resources/views/page-single.blade.php -->
@extends('layouts.app')

@section('title', 'LOAF')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">{{ $data->title }}</p>
</div>
<div class="ashbin-section">

    {!! $data->content !!} <br>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results for "{{ $query }}"</h1>

    <h2>Activity Results</h2>
    @if($activity_results->isEmpty())
    <p>No activities found matching your search.</p>
    @else
    <ul>
        @foreach($activity_results as $activity)
        <li>
            <a href="{{ route('activity.single', ['slug' => $activity->slug]) }}">
                {{ $activity->title }}
            </a>
        </li>
        @endforeach
    </ul>
    @endif

    <h2>Capacity Building Results</h2>
    @if($capacity_results->isEmpty())
    <p>No capacity building results found matching your search.</p>
    @else
    <ul>
        @foreach($capacity_results as $capacity)
        <li>
            <a href="{{ route('capacitybuilding.single', ['slug' => $capacity->slug]) }}">
                {{ $capacity->title }}
            </a>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
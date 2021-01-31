@extends('layouts.page')

@section('title', 'Kursy')

@section('page')
    <h1>Kursy</h1>

    @foreach($courses as $course)
        <div>
            <h3>{{ $course->title }}</h3>
            <p>{{ $course->description }}</p>
            <p>{{ $course->price_formatted }}</p>
        </div>
    @endforeach
@endsection

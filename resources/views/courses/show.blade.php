@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">

            <h1>{{ $course->title }}</h1>

            <p>{{ $course->description }}</p>

            <a class="btn btn-default" href="{{ route('courses.index') }}">
                Zurück
            </a>

        </div>
    </div>

@stop

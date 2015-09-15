@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">

            <h1>Courses</h1>

            <ul>

                @foreach($courses as $course)

                    <li>
                        <a href="{{ route('courses.show', $course->id) }}">
                            {{ $course->title }}
                        </a>
                    </li>

                @endforeach

            </ul>

        </div>
    </div>

@stop

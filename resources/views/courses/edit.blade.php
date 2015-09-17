@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">

            <a class="btn btn-default" href="{{ route('courses.show', $course->id) }}">
                Zurück
            </a>

            <hr>

            <form action="{{ route('courses.update', $course->id) }}" method="post" class="form-horizontal">

                {!! method_field('PUT') !!}
                {!! csrf_field() !!}

                <label>Titel:</label>
                <input type="text" name="title" value="{{ $course->title }}" class="form-control">

                <label>Description:</label>
                <textarea name="description" class="form-control">{{ $course->description }}</textarea>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

@stop

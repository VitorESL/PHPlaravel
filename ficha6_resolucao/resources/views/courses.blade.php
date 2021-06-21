@extends('template')
@section('content')


    <section id="courses">
        @foreach ($courses as $course)
        <div class="box">
            <h3><a href="/courses/{{ $course->id }}">{{ $course->title }}</a></h3>
            <p>{{ $course->description }}</p>
        </div>
        @endforeach
    </section>
@endsection

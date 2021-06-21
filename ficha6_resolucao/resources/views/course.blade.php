@extends('template')
@section('content')


    <section id="courses">
        <div class="box">
            <img src="/{{ $course->image }}">
            <h3>{{ $course->title }}</h3>
            <p>{{ $course->description }}</p>
        </div>
    </section>
@endsection

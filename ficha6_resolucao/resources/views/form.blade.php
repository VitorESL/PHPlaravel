@extends('template')
@section('content')
    <p><b>Name: </b> {{ $contact->name }}</p>
    <p><b>Email: </b> {{ $contact->email }}</p>
    <p><b>Message: </b>{{ $contact->message }}</p>
@endsection

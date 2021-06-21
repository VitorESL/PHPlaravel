@extends('template')
@section('content')
    <section id="contact-form" class="py-3">
        <div class="container">
            <h1 class="l-heading">Contact Us</h1>
            <p>Please fill out the form below to contact us</p>
            <form action="/contact" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type=text name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type=text name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
    </section>

    <section id="contact-info" class="bg-dark">
        <div class="container">
            <div class="box">
                <i class="fas fa-hotel fa-3x"></i>
                <h3>Location</h3>
                <p>Rua Principal, Porto - Portugal</p>
            </div>
            <div class="box">
                <i class="fas fa-phone fa-3x"></i>
                <h3>Phone Number</h3>
                <p>(+351) 220000000</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope fa-3x"></i>
                <h3>Email Address</h3>
                <p>secretaria@escolaonline.pt</p>
            </div>
        </div>
    </section>

@endsection

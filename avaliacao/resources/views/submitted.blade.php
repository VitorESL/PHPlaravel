@extends('template')
@section('content')
            <!-- Start content -->
            <main class="main-content">
                <div class="fullwidth-block inner-content">
                    <div class="container">
                        <h2 class="page-title">Os seus dados foram guardados com sucesso! Creditos para o Professor Andre Sa, pela paciencia e disponibilidade. Obrigado!</h2>

                        <p>Nome: {{$name}}</p>
                        <p>Email: {{$email}}</p>
                        <p>Assunto: {{$assunto}}</p>
                        <p>Message: {{$message}}</p>

                    </div>
                </div> <!-- .testimonial-section -->
            </main> <!-- .main-content -->
            <!-- End content -->
@endsection

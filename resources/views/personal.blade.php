@extends('layout.main')

@section('title','Personal')

@section('content')
<h1>Nuestro Personal</h1>
<hr>
<div class="container altura d-flex flex-column justify-content-center">

    <p class="lead text-center mb-5 ">Equipo de Desarrollo</p>

     <main class="row">
        @foreach ( $persons as $person)
        <article class="col-12 col-md-4 text-center mb-5 mb-md-0">
            <br>

            <div class="border border-dark rounded rounded-3 overflow-hidden bg-dark text-white">
                <p class="fw-bold mt-5">{{strtoupper($person['Nombre'])}} {{strtoupper($person['Apellido'])}}</p>
                {{--<p class="fw-bold ">{{strtoupper($person['Apellido'])}}</p>--}}
                <img src="{{$person['img']}}" alt="" width="100" height="100">
                <br>
                <a class="mt-3 font-monospace" href={{$person['Web']}} target="_blank">{{$person['Web']}}</a>
                <ul class="list-unstyled my-5">
                    <li>{{$person['Contacto']}}</li>
                </ul>
                
                
                
                <a class="bg-secondary text-white py-3 d-block text-decoration-none " href="#">Más Información</a>
            </div>
        </article>
        @endforeach
    </main>

  
</div>
@endsection()
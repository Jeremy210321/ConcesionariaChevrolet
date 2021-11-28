@extends('layout.main')

@section('title','Modelos')

@section('content')
<div>
    <img src="{{$url['image']}}" alt="toyota" class="estilo">
    <h1 class="title">{{strtoupper('Nuestros modelos 2022')}}</h1>
</div>

{{-- <hr>
@for ($i = 0; $i < 10; $i++)
    El valor actual es {{$i}}<br>
@endfor --}}
<hr>
{{-- <ul>

        @foreach ($autos as $auto)
            <li>Modelo: <b>{{$auto}}</b></li>
        @endforeach
</ul> --}}


{{-- <ol>
    @forelse ($autos as $clave =>$auto)
        <li><b>{{$clave}}</b></li>
        <ul><li>{{$auto}}</li></ul>
    @empty
       <p> No existen autos disponibles</p>
    @endforelse
</ol> --}}


<main class="row">
    @foreach ( $autos as $auto)
    <article class="col-12 col-md-3 mb-5 mb-md-0" >
        <br>

        <div class="border border-grey rounded rounded-3 overflow-hidden text-black" style="padding:10px">
            <img src="{{$auto['img']}}" alt="" width="190" height="75" >
            <br>
            <p class="fw-bold mt-5 text-center">{{strtoupper($auto['Nombre'])}} </p>
           
           
            <p class="meta">${{$auto['Precio']}}</p>
            <p style="font-size:14px">{{$auto['Descripcion']}}</p>
            
            
            
            
            {{-- <a class="text-red py-3 d-block text-decoration-none " href="#">Más Información</a> --}}
        </div>
    </article>
    @endforeach
</main>
{{-- @if (count($autos)===1)
    Existe un registo
    
@elseif(count($autos)>1)
    Existen multiples registros

@else
    No existen registros :(

    
@endif --}}
@endsection()
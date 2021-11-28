@extends('layout.main')

@section('title','Contactos')

@section('content')
  
{{-- <p>Bienvenido - {{$name}}</p>
<hr>

@switch($name)
    @case(1)
            Bienvenido Administrador
        @break
    @case(2)
            Bienvenido Empleado
        @break
    @case(3)
            Bienvenido Gernete
        @break
    @default
    Bienvenido Invitado
        
@endswitch --}}
<img src="https://www.chevrolet.com.co/content/dam/chevrolet/south-america/colombia/espanol/index/contact-us/04-images/chervolet-contactanos.jpg?imwidth=1200" alt="callcenter" width="1100px">
<br>
<br>
<p class="text-center"><strong>Horario de atención:</strong> Lunes a viernes de 8:00 a.m. – 6:00 p.m.</p>
<p class="text-center">Sábados de 8:00 a.m. – 2:00 p.m.</p>

<div class="row">
    <div class="col text-center">
        <img src="https://th.bing.com/th/id/R.887afb2e0997a600d81f8cf71282db50?rik=mW%2fmxWY0DVsK5A&pid=ImgRaw&r=0" alt="whatsapp" height="50px">
        <br>
        <br>
        <p><strong>POR WHATSAPP</strong><br>Haz <a href="#">clic aquí</a> para empezar a chatear</p>
    </div>
    <div class="col text-center">
        <img src="https://th.bing.com/th/id/R.1d40d56b239328ed9a44d6a48327c268?rik=3PCeK1xgHUtWWQ&pid=ImgRaw&r=0" alt="phone" height="50px">
        <br>
        <br>
        <p><strong>POR TELÉFONO</strong><br>Puedes llamar al 60 +1+424 93 93 o sin costo al <a href="#">10-800-124389</a></p>
    </div>
    <div class="col text-center">
        <img src="https://th.bing.com/th/id/OIP.b3-qUymD6UCexRBkLEaieQHaER?pid=ImgDet&rs=1" alt="mail" height="50px">
        <br>
        <br>
        <p><strong>POR E-MAIL</strong><br>Envía tu consulta a <a href="#">atencion.chevrole@gm.com</a> </p>
    </div>
</div>


@endsection()
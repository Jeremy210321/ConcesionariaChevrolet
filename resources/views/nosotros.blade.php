@extends('layout.main')

@section('title','Nosotros')

@section('content')
<h1>Acerca de nosostros</h1>
<hr>
<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          <strong>Visión</strong>
            
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
            <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/mundo-chevrolet/landing/nuestra-vision-g021.jpg?imwidth=600">
            
            <strong>Tu seguridad y bienestar  es  prioridad  </strong><br><br> Vemos un mundo con cero accidentes, cero emisiones, cero congestión y nuestro personal es el impulsor que hay detrás para hacer esto realidad.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
         <strong>Misión</strong>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
            <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/mundo-chevrolet/landing/nuestra-mision-g01.jpg?imwidth=600">
            
            <strong>Estamos comprometidos con la seguridad </strong><br><br> En todo lo que hacemos: ganamos clientes para toda la vida, desarrollamos marcas que inspiran pasión y lealtad, transformamos tecnologías de vanguardia en vehículos y experiencias que la gente adora, y creamos soluciones sostenibles que mejoran las comunidades en las que vivimos y trabajamos
         </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <strong>Nuestros Valores</strong>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body">
            <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/mundo-chevrolet/landing/valores-gente-g03.jpg?imwidth=835">
            
            <strong>Nuestros Clientes</strong><br><br> Los mantenemos en el centro de todo lo que hacemos y escuchamos con atención las necesidades de nuestros clientes porque cada interacción importa. La seguridad y la calidad son nuestros compromisos fundamentales, los cuales no se pueden comprometer.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()
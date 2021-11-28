@extends('layout.main')

@section('title','Inicio')

@section('content')
{{-- <h1>Bienvenidos</h1>
<hr> --}}
<div class="body"> 
    <div class="logo">
    <img src="https://logosave.com/images/large/23/Chevrolet-1-2-3-4-5-6-7-8-9-10-11-12-13-14-15-16-17-18-19-20-21-22-23-logo.png" height="150px">
    <h1>Bienvenidos</h1>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
       </div>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/cars/01-images/masthead-beat-01.jpg?imwidth=960" class="d-block w-100" alt="200px" height="450px">
         </div>
         <div class="carousel-item">
           <img src="https://www.diautoschevrolet.com.mx/content/dam/chevrolet/na/mx/es/index/cars/01-images/beat-nb-2020-masthead-segment.jpg?imwidth=960" class="d-block w-100" alt="200px" height="450px">
         </div>
         <div class="carousel-item">
           <img src="https://www.elcarrocolombiano.com/wp-content/uploads/2018/12/20181211-CHEVROLET-PRIMER-LUGAR-EN-VENTAS-DE-CARROS-EN-ACUMULADO-ENERO-NOVIEMBRE-2018-04.jpg" class="d-block w-100" alt="200px" height="450px">
       </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
       </button>
     </div>
    <hr>
     <div class="container">
       <div class="row">
         <div class="col">
           <a href="{{route('about')}}"> <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/index-subcontent/49-images/Icono-1.svg" height="150px"  ></a>
           <h3>Nosotros </h3>
         </div>
         <div class="col ">
           <a href="{{route('contact')}}"><img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/index-subcontent/49-images/Icono-2.svg" height="150px"></a>
           <h3>Contáctenos</h3>
         </div>
         <div class="col ">
           <a href="{{route('models')}}"> <img src="https://www.chevrolet.com.ec/content/dam/chevrolet/south-america/ecuador/espanol/index/index-subcontent/49-images/Icono-3.svg" height="150px"></a>
          <h3>Últimos Modelos  </h3>
         </div>
       </div>
     </div>
   <div class="Promociones1">
     <img src="https://a.ccdn.es/cnet/contents/media/resources/2020/11/1269354.jpg" width="100%" height="400px">
   </div>
     <div class="Promociones">
    
     <hr>
     <div class="row">
        @foreach ($homemodels as $models)
    
        <article class= "col-md-4 mb-5 mb-md-0">
           <div class="card border border-grey rounded rounded-3 overflow-hidden text-black" style="padding:15px">
              <img src="{{$models['image']}}" alt="model" height="190px" width="250px">
              
              <br>
              <h5 class="text-center">{{$models['title']}}</h5>
              <div class="home-model-p"><p>{{$models['description']}}</p></div>
              
              <a href="{{route('models')}}" class="btn btn-primary">Ver modelos</a> 
           </div>

        </article>
    @endforeach
    </div>
     
     {{-- <div class="card" style="width: 18rem;">
       
       <img src="http://1.bp.blogspot.com/-sQxTUl1ZL5s/U6BdE5KxVwI/AAAAAAAAA-U/GiCSo1dSa0M/s1600/campan%CC%83a-facebook-nuevos-sail-JUNIO.jpg" height="190px">
       <div class="card-body">
         <h5 class="card-title"><h1></h1></h5>
         <p class="card-text">Todos tenemos algo que nos mueve por dentro, como aquellos que viajan contigo o todo lo que te gusta. ¿Cuál es el Beat que mueve tu vida? No importa cuál sea; todos tienen su espacio en el Chevrolet Beat, combinación única entre tecnología, estilo, espacio y seguridad.
       </p>
         <a href="{{route('models')}}" class="btn btn-primary">Ver modelo</a>
       </div>
     
    </div> --}}
   
   
   
   
   
   
   
   
   
   
   </div>
@endsection()
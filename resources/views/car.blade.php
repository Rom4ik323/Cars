@extends('layouts.layout')



   @section('content')
   
   

<div class="container d-flex justify-content-center">
<div class="d-flex justify-content-center flex-column" style="width: 70rem;">
     <h1 class="text-light mb-3" style="font-family: 'Cormorant Garamond', serif;
     font-size: 50px;">{{$car->name}}</h1>
     <div id="carouselExample" class="carousel slide"style="width: 100%;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{$car->img}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{$car->img1}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{$car->img2}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>

     <div class="about d-flex justify-content-around align-items-center" style="width: 70rem;">
          <div class="cost_name">
          <h2 class="text-light">
               {{$car->name}}
          </h2>
          <h3>
               Цена: {{$car->cost}}
          </h3>
     </div>
        <ul class="d-flex justify-content-center mb-5" style="width: 40rem;">
          <li>Лошадинные силы: {{$car->hs}}</li>
          <li>Расход: {{$car->liters}}</li>
          <li>Топливо: {{$car->fuel}}</li>
          <li>Привод: {{$car->drive}}</li>
        </ul>
     </div>
     
   </div>
</div>
@auth
<div class="container mt-5" style="width: 30%; margin:auto;">
     <a href="/create">
          <button class="bron">Забронировать автомобиль</button>
     </a>
</div>
@endauth

@guest
<div class="container" style="width: 30%; margin:auto;">
     <form class="mt-5">
          <h1 class="mb-3"> Чтобы забронировать автомобиль </h1>
          <h2>{{$car->name}}</h2>
          <h2><a href="{{route("register.create")}}">зарегистрируйтесь</a> или <a href="{{route("register.login")}}">войдите</a></h2>
</div>
@endguest  

     
   @endsection
<style>
     a{
          text-decoration: none;
          color: aliceblue;
     }
     .bron{
        cursor: pointer;
        border: 1px solid white;
        background-color: transparent;
        height: 100px;
        width: 400px;
        color: white;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
        font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 30px;
    }
    
    .bron:hover{
        cursor: pointer;
        border: 0px solid white;
        background-color: white;
        height: 100px;
        width: 400px;
        color: black;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
        font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 30px;
        transition: 1s;
        
    }
     form h1{
          font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 30px;
          color: aliceblue;
     }
     form h2{
          font-family: 'Roboto', serif;
          font-weight: 300;
          font-size: 20px;
          color: aliceblue;
     }
     .about h3{
          font-family: 'Roboto', serif;
        font-weight: 300;
        color: aliceblue;
        font-size: 20px;
     }
     .about{
          background-color: #1C1C1C;
          margin: auto;
     }
     .about h2{
          font-family: 'Cormorant Garamond', serif;
          font-size: 30px;
     }
     ul li{
        list-style-type: none;
        font-family: 'Roboto', serif;
        font-weight: 300;
        margin: 10px;
        color: white;
        font-size: 15px;
    }
</style>
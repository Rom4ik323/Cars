@extends('layouts.layout')



   @section('content')
   
   

@auth
<div class="container" style="width: 30%; margin:auto;">
     <form method="POST" action="/" class="mt-5">
          @csrf
          <h1 class="mb-3">Забронировать автомобиль</h1>
          <div class="mb-3">
               <label for="" class="form-label text-light">Имя</label>
               <input name="name" class="form-control" id="">
             </div>
          <div class="mb-3">
            <label  for="" class="form-label text-light">Телефон</label>
            <input type="" name="number" class="form-control" id="">
          </div>
          <div class="mb-3">
               <label  for="" class="form-label text-light">Количество суток</label>
               <input type="" name="days" class="form-control" id="">
             </div>
             <div class="mb-3">
                <select name="car" class="form-select" aria-label="Default select example">
                    <option selected>Выберете автомобиль</option>
                    @foreach ($cars as $cars)
                    <option value="{{$cars->name}}">{{$cars->name}}</option>
                    @endforeach
                    
                  </select>
              </div>
          <button type="submit" class="">Подтвердить бронь</button>
        </form>
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
        form button{
        cursor: pointer;
        border: 1px solid white;
        background-color: transparent;
        height: 50px;
        width: 200px;
        color: white;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
    }
    
    form button:hover{
        cursor: pointer;
        border: 0px solid white;
        background-color: white;
        height: 50px;
        width: 200px;
        color: black;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
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
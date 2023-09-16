@extends('layouts.layout')



   @section('content')
   
   


<div class="container" style="width: 30%; margin:auto;">
     <form method="POST" action="/success" class="mt-5">
          @csrf
          <h1 class="mb-3">Добавить автомобиль</h1>
          <div class="mb-3">
               <label for="" class="form-label text-light">name</label>
               <input name="name" class="form-control" id="">
             </div>
          <div class="mb-3">
            <label  for="" class="form-label text-light">cost</label>
            <input type="" name="cost"  class="form-control" id="">
          </div>
          <div class="mb-3">
               <label  for="" class="form-label text-light">img</label>
               <input type="" name="img" class="form-control" id="">
             </div>
             <div class="mb-3">
                <label  for="" class="form-label text-light">hs</label>
                <input type="" name="hs" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label  for="" class="form-label text-light">liters</label>
                <input type="" name="liters" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label  for="" class="form-label text-light">drive</label>
                <input type="" name="drive" class="form-control" id="">
              </div>
              <div class="mb-3">
                <label  for="" class="form-label text-light">fuel</label>
                <input type="" name="fuel" class="form-control" id="">
              </div>

          <button type="submit" class="">Добавить</button>
        </form>
</div>




     
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
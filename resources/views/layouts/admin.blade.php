
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>
        @section('title')
            Приложение Example
            @isset($title)
           - {{$title}}
           @endisset

        @show
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom css -->
    <link rel="stylesheet" href="/css/style.css">

    <meta name="theme-color" content="#7952b3">

  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-lg" style="background-color: #141414;" >
    <div class="container-fluid" style="width: 80%;">   
      <a class="navbar-brand text-light" href="/"><h1>BaranoffCars</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/adminpanel">Заказы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/adminpanel/auto">Автомобили</a>
          </li>
        </ul>
        <div class="contacts">

          <ul>
             <li style="list-style-type: none;"><img src="recources/views/img/image 2.png" alt=""></li>
             <li style="list-style-type: none;"><img src="img/image 3.png" alt=""></li>
             <li style="list-style-type: none;"><img src="img/image 4.png" alt=""></li>
          </ul>
          <ul style="height:50px" class="nav flex-column mb-4">
            @auth
            <li class="nav-item"><a href="{{route("register.logout")}}" class="nav-link active text-light">Выйти</a></li>
            @endauth
  
            @guest
            <li class="nav-item"><a href="{{route("register.login")}}" class="nav-link active text-light">Войти</a></li>
            <li class="nav-item"><a href="{{route("register.create")}}" class="nav-link active text-light">Зарегистрироваться</a></li>
            @endguest    
          </ul>
         </div>
      </div>
    </div>
  </nav>
</header>
<hr class="nav_hr">
<main>
    @yield('content')
</main>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
<style>


body{
        background-color: #141414;
    }
  .a:hover{
      color: #989898;
      transition: 0.6s;
  }
  
  .header{
      background-color: #141414;
      height: auto;
      width: 100%;
      margin: 0;
      display: flex;
      align-items: center;
  }
  
  
  .container ul{
      display: flex;
      width: 70%;
      justify-content: space-around;
      margin-top: 40px;
  }
  

  
   a h1{
      font-family: 'Playfair Display', serif;
      font-weight: 400;
      color: aliceblue;
      font-size: 40px;
  }
  .header li{
      font-family: 'Roboto', sans-serif;
      color: aliceblue;
      list-style-type: none;
  }
  
  .contacts{
    height: 10px;
      margin-top: 15px;
      width: 50%;
      display: flex;
      color: aliceblue;
      align-items: center;
  
      
  }
  h2{
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      font-size: 20px;
  }
  .contacts ul{
      width: 35%;
      display: flex;
      justify-content: space-between;
  }

  .nav_hr{
    margin: 0;
  }

  @media screen and (max-width: 1280px) {
        .banner{
            height: 600px;
            background-image: url("img/banner_jr.png");
            background-repeat: no-repeat;
            width: 100%;
            background-size:cover;
        }
    
        .contacts h2{
            font-size: 12px;
        }
        .banner h1{
            font-family: 'Cormorant Garamond', serif;
            font-size: 50px;
            font-weight: 400;
            color: aliceblue;
            margin-bottom: 20px;
        }
        .cars{
            width: auto;
            margin: auto;
            margin-bottom: 250px;
            margin-top: 40px;
            display: grid;
            grid-template-columns: 20%;
            grid-template-rows: 30% 30% 30% 30% 30%;
        }
    
        .contacts li{
            display: none;
        }
    
        .min_usl{
            margin: 0;
            width: 100%;
            align-items: center;
            flex-direction: column;
            
        }
    
        .min_usl_h1{
            text-align: center;
            margin-bottom: 20px;
        }
    
        .nation{
            align-items: center;
            flex-direction: column;
        }
    
        .pay{
            width: 20%;
            align-items: center;
            flex-direction: column;
        }
    }
    
    
    
    
    @media screen and (max-width: 1000px) {
        .banner{
            height: 400px;
            background-image: url("img/banner_little.png");
            background-repeat: no-repeat;
            width: 100%;
        }
    
        .banner h1{
            font-family: 'Cormorant Garamond', serif;
            font-size: 40px;
            font-weight: 400;
            color: aliceblue;
            margin-top: 200px;
        }
        .cars{
            width: auto;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 250px;
            display: grid;
            grid-template-columns: 20%;
            grid-template-rows: 30% 30% 30% 30% 30%;
        }
        .slide_nav{
            width: 95%;
            margin: auto;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            color: aliceblue;
        }
        .img_text{
            font-size: 12px;
        }
        .icons ul{
            width: 80%;
            margin: auto;
        }
    
        footer{
            margin: auto;
            width: 80%;
            display: grid;
            grid-template-columns:  33% 33% 33%;
            color: aliceblue;
        }
    
        footer h1{
            display: none;
        }
    }</style>
</html>

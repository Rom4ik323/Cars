<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaranoffCars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="htt ps://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>




  <nav class="navbar navbar-expand-lg" style="background-color: #141414;" >
    <div class="container-fluid" style="width: 80%;">   
      <a class="navbar-brand text-light" href="#"><h1>BaranoffCars</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/park">Автопарк</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/usl">Условия</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="#">Контакты</a>
          </li>
        </ul>
        <div class="contacts">
          <h2></h2>
          <ul>
             <li style="list-style-type: none;"><img src="recources/views/img/image 2.png" alt=""></li>
             <li style="list-style-type: none;"><img src="img/image 3.png" alt=""></li>
             <li style="list-style-type: none;"><img src="img/image 4.png" alt=""></li>
          </ul>
          <ul style="height:50px" class="nav flex-column">
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

  <div class="banner">
    <div class="banner_content">
        <div class="help">
        <h1>Аренда премиальных<br>
         автомобилей</h1>
         <button>Каталог Автомобилей</button>
        </div>
    </div>
  </div>

  <div class="categories">
    <h1>КАТЕГОРИИ АВТОМОБИЛЕЙ</h1>
    <div class="cars">
            <div class="cars_item">
              <a href="#business">
                    <img src="https://dubai.carloson.ru/uploads/images/auto_1.png" alt="">
                    <h2>Бизнес</h2>
              </a>
        </div>
        <div class="cars_item">
            <a href="#cabr">
                <img src="https://dubai.carloson.ru/uploads/images/auto_2.png" alt="">
                <h2>Кабриолеты</h2>
            </a>
        </div>
        <div class="cars_item">
            <a href="#kupe">
                <img src="https://dubai.carloson.ru/uploads/images/auto_3.png" alt="">
                <h2>Купе</h2>
            </a>
        </div>
            
        <div class="cars_item">
            <a href="#sport">
                <img src="https://dubai.carloson.ru/uploads/images/auto_4.png" alt="">
                <h2>Спорткары</h2>
            </a>
        </div>
        <div class="cars_item">
            <a href="#big">
                <img src="https://dubai.carloson.ru/uploads/images/auto_6.png" alt="">
                <h2>Внедорожники</h2>
            </a>
        </div>
    </div>
    <hr>
  </div>

    <div class="cars_slider">
  <div class="slide_nav">
    <h3 id="business">БИЗНЕС</h3>
    <div class="slide_nav_buttons">
      <button class="prev" id="prev"><img style="width: 15px; height:15px;" src="https://sun9-7.userapi.com/impg/KMWCTDg99L0P2U6-kcvzGmIfuKIHIxF3853flA/7xEZ_AhOXGQ.jpg?size=61x54&quality=96&sign=4c09429e677dfe267b702e86e13e85b9&type=album" alt=""></button>
      <button class="next" id="next"><img style="width: 15px; height:15px;" src="https://sun9-36.userapi.com/impg/2PQrumvpHIJ74ppAmrD1j4B5tdZ_b4-lghMZPg/vtUwGMwVRKY.jpg?size=53x54&quality=96&sign=b4e23a31cb56ebd611a8aed4a85ee2b8&type=album" alt=""></button>
      <a href="/park"><button class="all">все бизнес</button></a>
    </div>
  </div>

    <div id="viewport">
        <div class="slider" style="left: 0">
            <div class="slide">
              <div class="items">
                <a href="/cars/1">
                <div style="background-image: url(https://sun9-19.userapi.com/impg/gg8QlPD25SkTMGE8zNPdrkorCeadQM66OjjuwA/P4aGfeoGPIw.jpg?size=540x374&quality=96&sign=f83840bacd706127dc99097f728ec3a3&type=album);" class="item">
                  <div class="img_text">
                    <span>Bentley Continental Convertible</span><br>
                    <span>60.000 ₽/сут.</span>
                  </div>
                </a>
                </div>
                <a href="/cars/3">
                  <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/clbQqmw9qGMWN1xrJD5GhKLaZN8xHNcZQYRJKg/57Z-XMDZ6Vc.jpg?size=540x374&quality=96&sign=5ffc88c9bfc82a134bd1942cb3d6640f&type=album)">
                    <div class="img_text">
                      <span>Cadilac Escalade</span><br>
                      <span>40.000 ₽/сут.</span>
                    </div>
                  </div>
              </a>
              <a href="/cars/4">
                <div class="item" style="background-image: url(https://sun9-36.userapi.com/impg/mD3HsfGptTU9RlU1WN3EJEiDeEIro9FN2DXKtg/ax8oGR2GHBY.jpg?size=540x374&quality=96&sign=1a295827d8dc0f01833c6a83b906265f&type=album)">
                  <div class="img_text">
                    <span>Audi Q3</span><br>
                    <span>12.000 ₽/сут.</span>
                  </div>
                </div>
            </a>
              </div>
            </div>
            <div class="slide">
              <div class="items">
                <a href="">
                  <div class="item" style="background-image: url(https://s3.autorating.ru/upload/medialibrary/e2b/e2b724ef24c525cdad874953c37cda60.jpg)">
                    <div class="img_text">
                      <span>S63 amg летит по ночной Москве</span><br>
                      <span>Дорого ******</span>
                    </div>
                  </div>
              </a>
              <a href="">
                <div class="item" style="background-image: url(https://mobimg.b-cdn.net/v3/fetch/f3/f3ce3a06fb3623d6bf975b82f0c9fe75.jpeg?w=1600)">
                  <div class="img_text">
                    <span>BMW m8</span><br>
                    <span>10.000 ₽/сут.</span>
                  </div>
                </div>
            </a>
            <a href="">
              <div class="item" style="background-image: url(https://cdn01.zoomit.ir/2020/1/ff642a61-562e-45ad-8116-b16e28464696.jpg)">
                <div class="img_text">
                  <span>Ferrari sf90</span><br>
                  <span>66.666 ₽/сут.</span>
                </div>
              </div>
          </a>

              </div>
            </div>
        </div>
    </div>

    
 
    <div id="viewSlider">
        <div class="viewSlide"></div>
        <div class="viewSlide"></div>
    </div>
    </div>

    <div class="cars_slider">
    <div class="slide_nav">
      <h3 id="cabr">КАБРИОЛЕТЫ</h3>
      <div class="slide_nav_buttons">
        <button class="prev" id="prev1"><img style="width: 15px; height:15px;" src="https://sun9-7.userapi.com/impg/KMWCTDg99L0P2U6-kcvzGmIfuKIHIxF3853flA/7xEZ_AhOXGQ.jpg?size=61x54&quality=96&sign=4c09429e677dfe267b702e86e13e85b9&type=album" alt=""></button>
        <button class="next" id="next1"><img style="width: 15px; height:15px;" src="https://sun9-36.userapi.com/impg/2PQrumvpHIJ74ppAmrD1j4B5tdZ_b4-lghMZPg/vtUwGMwVRKY.jpg?size=53x54&quality=96&sign=b4e23a31cb56ebd611a8aed4a85ee2b8&type=album" alt=""></button>
         <a href="/park"><button class="all">все кабриолеты</button></a>
      </div>
    </div>
  
      <div id="viewport1">
          <div class="slider1" style="left: 0">
              <div class="slide1">
                <div class="items">
                  <a href="">
                    <div class="item" style="background-image: url(https://sun9-5.userapi.com/impg/SM5lMif-7rNzWFT1qhJjuCYzd8MdTn5xwNBm8g/_7BT7vGABNY.jpg?size=540x374&quality=96&sign=64cddd2af72fb6fdeed3cdf430c9045b&type=album)">
                      <div class="img_text">
                        <span>Porsche Boxster GTS</span><br>
                        <span>22.000 ₽/сут.</span>
                      </div>
                    </div>
                </a>
                <a href="">
                  <div class="item" style="background-image: url(https://sun9-80.userapi.com/impg/HMGxbY33vhqTFqjzFqoPhxpUdd-rDgullVpjkg/TIDPTB0Qsig.jpg?size=540x374&quality=96&sign=bbd9bceae69268f5319523e104ec92e7&type=album)">
                    <div class="img_text">
                      <span>Ford Convertible GT</span><br>
                      <span>13.500 ₽/сут.</span>
                    </div>
                  </div>
              </a>
              <a href="">
                <div class="item" style="background-image: url(https://sun9-45.userapi.com/impg/N19i4F1r75N77ASwNTQjfR7EwFIXQbBbsPwYzg/6tcDSqoP_kk.jpg?size=540x374&quality=96&sign=e220e2b7a1913b733a7da4d6926c088d&type=album)">
                  <div class="img_text">
                    <span>Ferrari F8 Spider</span><br>
                    <span>69.000 ₽/сут.</span>
                  </div>
                </div>
            </a>
                </div>
              </div>
              <div class="slide1">
                <div class="items">
                  <a href="">
                    <div class="item" style="background-image: url(https://sun9-54.userapi.com/impg/7kQW3WMvo-uR6aFEhMSL0owzFDOw1iTVuFMzmg/K_nNxAy1nEs.jpg?size=540x374&quality=96&sign=79361f82d7b921e1db6bb96cb0af67bf&type=album)">
                      <div class="img_text">
                        <span>Chevrolet Corvette C8</span><br>
                        <span>32.000 ₽/сут.</span>
                      </div>
                    </div>
                </a>
                <a href="">
                  <div class="item" style="background-image: url(https://sun9-68.userapi.com/impg/WaARnUNerQTYadYHZE-DecEPz9gf7cVygeXpZA/juuM1MDozfs.jpg?size=540x374&quality=96&sign=cbf3f60bf0b1f853cd43152f269dd963&type=album)">
                    <div class="img_text">
                      <span>Ford Mustang Convertible</span><br>
                      <span>11.500 ₽/сут.</span>
                    </div>
                  </div>
              </a>
              <a href="">
                <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/Fj3oKq1Y-8PvdlRtpI-SSBWo_6xnI7gTj2VTQA/L29bpYrMxiw.jpg?size=540x374&quality=96&sign=b27cfbd05ff70b363fb5f5acbb114d1c&type=album)">
                  <div class="img_text">
                    <span>Lamborghini Huracan EVO Spyder</span><br>
                    <span>99.000 ₽/сут.</span>
                  </div>
                </div>
            </a>
                </div>
              </div>
          </div>
      </div>
      <div id="viewSlider1">
        <div class="viewSlide1"></div>
        <div class="viewSlide1"></div>
    </div>
    </div>

    <div class="cars_slider">
      <div class="slide_nav">
        <h3 id="sport">СПОРТКАРЫ</h3>
        <div class="slide_nav_buttons">
          <button class="prev" id="prev2"><img style="width: 15px; height:15px;" src="https://sun9-7.userapi.com/impg/KMWCTDg99L0P2U6-kcvzGmIfuKIHIxF3853flA/7xEZ_AhOXGQ.jpg?size=61x54&quality=96&sign=4c09429e677dfe267b702e86e13e85b9&type=album" alt=""></button>
          <button class="next" id="next2"><img style="width: 15px; height:15px;" src="https://sun9-36.userapi.com/impg/2PQrumvpHIJ74ppAmrD1j4B5tdZ_b4-lghMZPg/vtUwGMwVRKY.jpg?size=53x54&quality=96&sign=b4e23a31cb56ebd611a8aed4a85ee2b8&type=album" alt=""></button>
          <a href="/park"><button class="all">все СПОРТКАРЫ</button></a>
        </div>
      </div>
    
        <div id="viewport2">
            <div class="slider2" style="left: 0">
                <div class="slide2">
                  <div class="items">
                    <a href="">
                      <div class="item" style="background-image: url(https://sun9-5.userapi.com/impg/SM5lMif-7rNzWFT1qhJjuCYzd8MdTn5xwNBm8g/_7BT7vGABNY.jpg?size=540x374&quality=96&sign=64cddd2af72fb6fdeed3cdf430c9045b&type=album)">
                        <div class="img_text">
                          <span>Porsche Boxster GTS</span><br>
                          <span>22.000 ₽/сут.</span>
                        </div>
                      </div>
                  </a>
                  <a href="">
                    <div class="item" style="background-image: url(https://sun9-1.userapi.com/impg/lUjQLw8Bwc-inHeKPJANi9WqkKvUhfpjgUzgnw/af8GQFkIgvQ.jpg?size=540x374&quality=96&sign=ff999725ea5ac0d24e4d1abcd004b89e&type=album)">
                      <div class="img_text">
                        <span>Porsche 911 Turbo S</span><br>
                        <span>70.500 ₽/сут.</span>
                      </div>
                    </div>
                </a>
                <a href="">
                  <div class="item" style="background-image: url(https://sun9-66.userapi.com/impg/fTHlZGSYSgxNhDJtMeKtPnWXg6dM28_LlajJEA/M4B7AJfWly4.jpg?size=540x374&quality=96&sign=ce3e65687ff46f40afca3f630a7db39c&type=album)">
                    <div class="img_text">
                      <span>Toyota Supra A80</span><br>
                      <span>69.000 ₽/сут.</span>
                    </div>
                  </div>
              </a>
                  </div>
                </div>
                <div class="slide2">
                  <div class="items">
                    <a href="">
                      <div class="item" style="background-image: url(https://sun1-93.userapi.com/impg/MDmmHvuyJyIkZ_S9cbxgvTb1v6E6zmHgFhKBZQ/1bt8xf7HQ4I.jpg?size=540x374&quality=96&sign=ab4b8fa99c6cf0a486799cd2d94d2c14&type=album)">
                        <div class="img_text">
                          <span>Lamborghini Urus</span><br>
                          <span>15.000 ₽/сут.</span>
                        </div>
                      </div>
                  </a>
                  <a href="">
                    <div class="item" style="background-image: url(https://sun9-53.userapi.com/impg/uzfD2Y40w68SUGMgQZuihZXd1d_TfCRsJS-Dlg/cP4iNANcloM.jpg?size=540x374&quality=96&sign=a4af39bd8e0c8c000782b38f800fa13c&type=album)">
                      <div class="img_text">
                        <span>Nissan Skyline r34</span><br>
                        <span>28.500 ₽/сут.</span>
                      </div>
                    </div>
                </a>
                <a href="">
                  <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/QzDycAiwySB3rWlRgQBc2jEKvaBRuSKhYO9Mpg/TThnmD6xRoI.jpg?size=540x374&quality=96&sign=f63da854299528f011e2f854973eddef&type=album)">
                    <div class="img_text">
                      <span>Lamborghini Urus</span><br>
                      <span>18.500 ₽/сут.</span>
                    </div>
                  </div>
              </a>
                  </div>
                </div>
            </div>
        </div>
       
          <div id="viewSlider2">
              <div class="viewSlide2"></div>
              <div class="viewSlide2"></div>
          </div>

    </div>

    <div class="cars_slider">
          <div class="slide_nav">
            <h3 id="kupe">КУПЕ</h3>
            <div class="slide_nav_buttons">
              <button class="prev" id="prev3"><img style="width: 15px; height:15px;" src="https://sun9-7.userapi.com/impg/KMWCTDg99L0P2U6-kcvzGmIfuKIHIxF3853flA/7xEZ_AhOXGQ.jpg?size=61x54&quality=96&sign=4c09429e677dfe267b702e86e13e85b9&type=album" alt=""></button>
              <button class="next" id="next3"><img style="width: 15px; height:15px;" src="https://sun9-36.userapi.com/impg/2PQrumvpHIJ74ppAmrD1j4B5tdZ_b4-lghMZPg/vtUwGMwVRKY.jpg?size=53x54&quality=96&sign=b4e23a31cb56ebd611a8aed4a85ee2b8&type=album" alt=""></button>
              <a href="/park"><button class="all">все купе</button></a>
            </div>
          </div>
        
            <div id="viewport3">
                <div class="slider3" style="left: 0">
                    <div class="slide2">
                      <div class="items">
                        <a href="">
                          <a href="">
                            <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/Fj3oKq1Y-8PvdlRtpI-SSBWo_6xnI7gTj2VTQA/L29bpYrMxiw.jpg?size=540x374&quality=96&sign=b27cfbd05ff70b363fb5f5acbb114d1c&type=album)">
                              <div class="img_text">
                                <span>Lamborghini Huracan EVO Spyder</span><br>
                                <span>99.000 ₽/сут.</span>
                              </div>
                            </div>
                        </a>
                      </a>
                      <a href="">
                        <div class="item" style="background-image: url(https://sun9-68.userapi.com/impg/WaARnUNerQTYadYHZE-DecEPz9gf7cVygeXpZA/juuM1MDozfs.jpg?size=540x374&quality=96&sign=cbf3f60bf0b1f853cd43152f269dd963&type=album)">
                          <div class="img_text">
                            <span>Ford Mustang Convertible</span><br>
                            <span>11.500 ₽/сут.</span>
                          </div>
                        </div>
                    </a>
                    <a href="">
                      <div class="item" style="background-image: url(https://sun9-54.userapi.com/impg/7kQW3WMvo-uR6aFEhMSL0owzFDOw1iTVuFMzmg/K_nNxAy1nEs.jpg?size=540x374&quality=96&sign=79361f82d7b921e1db6bb96cb0af67bf&type=album)">
                        <div class="img_text">
                          <span>Chevrolet Corvette C8</span><br>
                          <span>32.000 ₽/сут.</span>
                        </div>
                      </div>
                  </a>
                      </div>
                    </div>
                    <div class="slide2">
                      <div class="items">
                        <a href="">
                          <div class="item" style="background-image: url(https://sun9-45.userapi.com/impg/N19i4F1r75N77ASwNTQjfR7EwFIXQbBbsPwYzg/6tcDSqoP_kk.jpg?size=540x374&quality=96&sign=e220e2b7a1913b733a7da4d6926c088d&type=album)">
                            <div class="img_text">
                              <span>Ferrari F8 Spider</span><br>
                              <span>69.000 ₽/сут.</span>
                            </div>
                          </div>
                      </a>
                      <a href="">
                        <div class="item" style="background-image: url(https://sun9-80.userapi.com/impg/HMGxbY33vhqTFqjzFqoPhxpUdd-rDgullVpjkg/TIDPTB0Qsig.jpg?size=540x374&quality=96&sign=bbd9bceae69268f5319523e104ec92e7&type=album)">
                          <div class="img_text">
                            <span>Ford Convertible GT</span><br>
                            <span>13.500 ₽/сут.</span>
                          </div>
                        </div>
                    </a>
                    <a href="">
                      <div class="item" style="background-image: url(https://sun9-5.userapi.com/impg/SM5lMif-7rNzWFT1qhJjuCYzd8MdTn5xwNBm8g/_7BT7vGABNY.jpg?size=540x374&quality=96&sign=64cddd2af72fb6fdeed3cdf430c9045b&type=album)">
                        <div class="img_text">
                          <span>Porsche Boxster GTS</span><br>
                          <span>22.000 ₽/сут.</span>
                        </div>
                      </div>
                  </a>
                      </div>
                    </div>
                </div>
            </div>
           
              <div id="viewSlider3">
                  <div class="viewSlide3"></div>
                  <div class="viewSlide3"></div>
              </div>
    </div>

    <div class="cars_slider">
              <div class="slide_nav">
                <h3 id="big">ВНЕДОРОЖНИКИ</h3>
                <div class="slide_nav_buttons">
                  <button class="prev" id="prev4"><img style="width: 15px; height:15px;" src="https://sun9-7.userapi.com/impg/KMWCTDg99L0P2U6-kcvzGmIfuKIHIxF3853flA/7xEZ_AhOXGQ.jpg?size=61x54&quality=96&sign=4c09429e677dfe267b702e86e13e85b9&type=album" alt=""></button>
                  <button class="next" id="next4"><img style="width: 15px; height:15px;" src="https://sun9-36.userapi.com/impg/2PQrumvpHIJ74ppAmrD1j4B5tdZ_b4-lghMZPg/vtUwGMwVRKY.jpg?size=53x54&quality=96&sign=b4e23a31cb56ebd611a8aed4a85ee2b8&type=album" alt=""></button>
                  <a href="/park"><button class="all">все ВНЕДОРОЖНИКИ</button></a>
                </div>
              </div>
            
                <div id="viewport4">
                    <div class="slider4" style="left: 0">
                        <div class="slide4">
                          <div class="items">
                            <a href="">
                              <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/clbQqmw9qGMWN1xrJD5GhKLaZN8xHNcZQYRJKg/57Z-XMDZ6Vc.jpg?size=540x374&quality=96&sign=5ffc88c9bfc82a134bd1942cb3d6640f&type=album)">
                                <div class="img_text">
                                  <span>Chevrolet Tahoe</span><br>
                                  <span>13.500 ₽/сут.</span>
                                </div>
                              </div>
                          </a>
                          <a href="">
                            <div class="item" style="background-image: url(https://sun9-64.userapi.com/impg/wO5xtuoW-V7wj7z-dk-fNJEJzutSBPId0qMf_A/MdGCVQeNPP8.jpg?size=540x374&quality=96&sign=c418dc2250e0386db67ca3ad7f660cf6&type=album)">
                              <div class="img_text">
                                <span>Cadillac Escalade ESV</span><br>
                                <span>20.000 ₽/сут.</span>
                              </div>
                            </div>
                        </a>
                        <a href="">
                          <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/clbQqmw9qGMWN1xrJD5GhKLaZN8xHNcZQYRJKg/57Z-XMDZ6Vc.jpg?size=540x374&quality=96&sign=5ffc88c9bfc82a134bd1942cb3d6640f&type=album)">
                            <div class="img_text">
                              <span>Chevrolet Tahoe</span><br>
                              <span>13.500 ₽/сут.</span>
                            </div>
                          </div>
                      </a>
                          </div>
                        </div>
                        <div class="slide2">
                          <div class="items">
                            <a href="">
                              <div class="item" style="background-image: url(https://sun9-45.userapi.com/impg/JyGNxxJGU2t4OHqMY4ndXjUtnhNzoZq8miqMjA/sdYj7F22HMg.jpg?size=540x374&quality=96&sign=23c3f78801d1e832ba491842a92345bd&type=album)">
                                <div class="img_text">
                                  <span>Mercedes GLS 450</span><br>
                                  <span>35.500 ₽/сут.</span>
                                </div>
                              </div>
                          </a>
                          <a href="">
                            <div class="item" style="background-image: url(https://sun9-12.userapi.com/impg/ZOK64VF1w9_uQpxLRKO4QP18qXvMsD-XNVa4Gg/MeVjP3yg6Mk.jpg?size=540x374&quality=96&sign=978ab8f14d39785e52a692ad04f1a2a3&type=album)">
                              <div class="img_text">
                                <span>BMW X5</span><br>
                                <span>10.000 ₽/сут.</span>
                              </div>
                            </div>
                        </a>
                        <a href="">
                          <div class="item" style="background-image: url(https://sun1-95.userapi.com/impg/iq7fElHcAQ3cNQTEdSvfIT-zBNQOhJTLOdG01g/k2NLMW03s9w.jpg?size=540x374&quality=96&sign=91c304ae5a083a90fa69d64cb68d8767&type=album)">
                            <div class="img_text">
                              <span>BMW X6</span><br>
                              <span>18.500 ₽/сут.</span>
                            </div>
                          </div>
                      </a>
                          </div>
                        </div>
                    </div>
                </div>
               
                  <div id="viewSlider4">
                      <div class="viewSlide4"></div>
                      <div class="viewSlide4"></div>
                  </div>
    </div>


    <div class="btn">
      <a href="/park"><button class="all_button">
        ПОКАЗАТЬ ВСЕ АВТОМОБИЛИ
       </button></a>
      
    </div>
    <div class="advantages">
      <h1>ПОСУТОЧНЫЙ ПРОКАТ АВТО</h1>
      <p>Компания BaranoffCars предлагает вашему вниманию большой выбор автомобилей для посуточной или долгосрочной аренды в Ростове. 
        К вашим услугам авто самых разных классов, от небольших комфорт до роскошных премиум моделей и дорожных монстров-спорткаров. 
        Арендовать автомобиль вы можете на срок от 1 суток. 
        Для оформления заказа вам потребуются всего лишь водительские права и паспорт гражданина России.</p>
    <h1>СТРАХОВАНИЕ</h1>
      <p>Страховка КАСКО на случай кражи автомобиля или ДТП включена в стоимость аренды.</p>
    <h1>ОГРАНИЧЕНИЯ</h1>
      <p>Мы бережно относимся к техническому состоянию наших машин, поэтому для некоторых моделей предусмотрены лимиты скорости и суточного пробега. 
        Ограничения эти достаточно разумны, чтобы вы могли в полной мере насладиться качеством и динамикой арендованного автомобиля.</p>
    </div>


    <div class="questions">
      <h1>ОСТАЛИСЬ ВОПРОСЫ?</h1>
      <p>Получите бесплатную консультацию и помощь в выборе и <br>
        получении автомобиля от эксперта по телефону:</p>
        <div class="icons">
          <ul>
            <li style="list-style-type: none;"><img style="width:50px;" src="https://cdn-icons-png.flaticon.com/512/4494/4494494.png" alt=""></li>
            <li style="list-style-type: none;"><img style="width:50px;" src="https://cdn-icons-png.flaticon.com/512/3670/3670070.png" alt=""></li>
            <li style="list-style-type: none;"><img style="width:50px;" src="https://cdn-icons-png.flaticon.com/512/2504/2504953.png" alt=""></li>
         </ul>
        </div>
    </div>

    <hr>

    <footer>
      <h1>BaranoffCars</h1>
      <ul>
        <li >Разделы</li>
        <li class="disable"><a href="/">Автопарк</a></li>
        <li class="disable"><a href="/usl">Условия</a></li>
        <li class="disable"><a href="/park">Контакты</a></li>
      </ul>
      <ul>
        <li>Контакты</li>
        <li class="disable">8-777-777-77-77</li>
        <li class="disable">barnoffCars@mail.ru</li>
        <li class="disable">Ростов-на-Дону, <br>
          проспект Соколова, 5/9</li>
      </ul>
      <ul>
        <li>Подписывайтесь</li>
        <li class="disable"> <img style="width: 30px;" src="https://cdn-icons-png.flaticon.com/512/4494/4494485.png"> YouTube</li>
        <li class="disable"><img style="width: 30px;" src="https://cdn-icons-png.flaticon.com/512/2504/2504953.png"> Vkontakte</li>
        <li class="disable"><img style="width: 30px;" src="https://cdn-icons-png.flaticon.com/512/4494/4494488.png"> Instagram</li>
      </ul>
    </footer>
    <hr>
    <p class="vse">© 2023. baranov. Все права защищены.</p>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>


<style>



    body{
        margin: 0;
        background-color: #141414;
    }
    a{
      text-decoration: none;
      color: #989898;
    }
    a:hover{
        color: aliceblue;
        transition: 0.8s;
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
    
    .container{
        display: flex;
        width: 50%;
        margin: 0;
        align-items: center;
        justify-content: space-around;
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
    
    .banner{
        
        height: 850px;
        background-image: url("https://sun9-62.userapi.com/impg/daG7mLO30dUgbJL8kBhzLRLgp70SnIdYmLsPkA/GMj-K9yL5gY.jpg?size=1920x857&quality=95&sign=9c39e5634880c5a686b3f6bec24d0afc&type=album");
        background-repeat: no-repeat;
        width: 100%;
        background-size:cover;
        background-color:rgba(0, 0, 0, .7);
}



    .banner h1{
        font-family: 'Cormorant Garamond', serif;
        font-size: 80px;
        font-weight: 400;
        color: aliceblue;
        margin-bottom: 50px;
    }
    
    .help{
        margin-bottom: 320px;;
    }
    
    .banner_content{
        height: 100%;
        width: 80%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    
    .help button{
        cursor: pointer;
        border: 1px solid white;
        background-color: transparent;
        height: 50px;
        width: 200px;
        color: white;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
        box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
    }
    
    .help button:hover{
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
    
    
    
    
    
    .categories{
        margin-bottom: 40px;
        color: aliceblue;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .categories h1{
        height: auto;
        font-size: 30px;
        font-family: 'Cormorant Garamond', serif;
        font-weight: 400;
        margin: auto;
        margin-top: 50px;
    }
    
    .cars{
        width: 80%;
        margin: auto;
        margin-top: 40px;
        display: grid;
        grid-template-columns: 20% 20% 20% 20% 20%;
    }
    
    .cars_item{
        margin: auto;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    .cars_item h2{
        margin-top: 15px;
        font-family: 'Roboto', sans-serif;
        font-size: 15;
        font-weight: 300;
    }
    
    .cars_item a{
        text-decoration: none;
        color: aliceblue;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    hr{
        height: 2px;
        color: #373737;
    
    }
    
    
     
    #viewport, #viewport1, #viewport2, #viewport3, #viewport4 {
        width: 99vw;
        height: 22vw;
        overflow: hidden;
    }
     
    .slider, .slider1, .slider2, .slider3, .slider4 {
        position: relative;
        transition: 500ms;
        width: calc(100% * 2);
        height: 200px; 
        display: flex;
        justify-content: start;
        flex-wrap: nowrap;
    }
     
    .slide, .slide1, .slide2, .slide3, .slide4  {
        width: 100%;
        height: 200px;
    }
     
    .slide img {
        width: 540px;
        height: 374px;
        object-fit: cover;
        object-position: 0;
    }
     
    #viewSlider, #viewSlider1, #viewSlider2, #viewSlider3, #viewSlider4 {
        width: calc(30px * 5);
        display: flex;
        justify-content: space-between;
    }
     
    .viewSlide,  .viewSlide1, .viewSlide2, .viewSlide3, .viewSlide4{
        width: 20px;
        height: 20px;
        background-color: red;
        display: none;
    }
    
    .items{
        display: flex;
        justify-content: space-around;
    }
    
    .img_text{
        margin: 1vw;
        color: aliceblue;
        font-family: 'Roboto', sans-serif;
        font-size: 1vw;
        font-weight: 300;;
    }
    .item{
        width: 29vw;
        height: 19vw;
        position: relative;
        display: inline-block;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .all{
        cursor: pointer;
        background-color: #141414;
        border: 1px solid white;
        height: 50px;
        width: 220px;
        color: white;
        font-size: 0.9em;
        font-family: 'Roboto', sans-serif;
        text-transform: uppercase;
        margin-left: 50px;
    }
    
    .slide_nav_buttons{
     display: flex;
     align-items: center;
     justify-content: space-between;
    }
    
    .all:hover{
        background-color: white;
        color: black;
        transition: 0.9s;
        border: 0px solid black;
    }
    
    .prev{
        cursor: pointer;
        height: 50px;
        width: 50px;
        border: 1px solid #4E4E4E;
        background-color: #141414;
    }
    
    .next{
        margin-left: 10px;
        cursor: pointer;
        height: 50px;
        width: 50px;
        border: 1px solid #4E4E4E;
        background-color: #141414;
    }
    
    .slide_nav button:hover{
        border: 1px solid white;
        transition: 0.9s;
    }
    
    .slide_nav{
        width: 80%;
        margin: auto;
        margin-bottom: 25px;
        display: flex;
        justify-content: space-between;
        color: aliceblue;
    }
    
    .slide_nav h3{
        font-size: 30px;
        font-family: 'Cormorant Garamond', serif;
        font-weight: 400;
    }
    
    .all_button{
            margin: auto;
            cursor: pointer;
            border: 1px solid white;
            background-color: transparent;
            height: 90px;
            width: 540px;
            color: white;
            font-size: 1em;
            font-family: 'Roboto', sans-serif;
    }
    
    .all_button:hover{
        margin: auto;
        cursor: pointer;
        border: 1px solid white;
        background-color: white;
        height: 90px;
        width: 540px;
        color: black;
        font-size: 1em;
        font-family: 'Roboto', sans-serif;
        transition: 0.8s;
    }
    
    .btn{
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }
    
    .advantages{
        width: 80%;
        margin: auto;
        margin-bottom: 40px;
        margin-top: 40px;
    }
    
    .advantages h1{
        font-size: 2.7vw;
        font-family: 'Cormorant Garamond', serif;
        font-weight: 400;
        margin-bottom: 20px;
        color: aliceblue;
    }
    
    .advantages p{
        font-size: 18px;
        font-family: 'Roboto', serif;
        font-weight: 300;
        width: 100%;
        line-height: 1.9em;
        margin-bottom: 20px;
        color: #A0A0A0;
    }
    
    .questions{
        background-image: url(https://sun9-1.userapi.com/impg/tUs6vMZ5ggLXpbV0iPhEQvVj0AOJ1PY7P2KkVA/6gVxwPKJVK8.jpg?size=1640x370&quality=96&sign=b79514a811333fd5b04e7d90675c0e2f&type=album);
        width: 80%;
        height: 340px;
        background-size: cover;
        margin: auto;
        padding-left: 30px;
        padding-top: 40px;
    }
    
    .questions h1{
        font-size: 2.7vw;
        font-family: 'Cormorant Garamond', serif;
        font-weight: 400;
        margin-bottom: 20px;
        color: aliceblue;
    }
    
    .questions p{
        font-size: 20px;
        font-family: 'Roboto', serif;
        font-weight: 300;
        width: 100%;
        line-height: 1.9em;
        margin-bottom: 20px;
        color: #838383;
    }
    
    
    .icons ul{
        display: flex;
        width: 27%;
        justify-content: space-around;
        margin-top: 40px;
        margin-left: 14vw;
    }
    
    footer{
        margin: auto;
        width: 80%;
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        color: aliceblue;
    }
    
    footer li{
        list-style-type: none;
        font-family: 'Roboto', serif;
        font-weight: 300;
        margin: 10px;
    }
    .disable{
        color: #989898;
        cursor: pointer;
    }
    
    .disable:hover{
        color: aliceblue;
        transition: 0.8s;
    }
    
    footer h1{
        font-family: 'Playfair Display', serif;
        font-weight: 400;
        color: aliceblue;
        font-size: 40px;
    }
    
    .vse{
        font-family: 'Roboto', serif;
        font-weight: 300;
        text-align: center;
        color: #989898;
    }
    
    .autopark p{
        margin: auto;
        width: 80%;
        font-family: 'Roboto', serif;
        font-weight: 300;
        color: aliceblue;
        margin-top: 20px;
    }
    
    .autopark h1{
        text-align: center;
        font-family: 'Cormorant Garamond', serif;
        font-weight: 400;
        color: aliceblue;
        font-size: 40px;
        margin-bottom: 40px;
    }
    
    .autopark .items{
    
    margin-top: 30px;
    
    }
    
    .nation{
        width: 80%;
        margin: auto;
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
    }
    
    .nation p{
        color: aliceblue;
        font-family: 'Roboto', serif;
        font-weight: 300;
    }
    
    .nation_item{
        width: 100%;
        background-color: #1F1F1F;
        width: 700px;
        height: 380px;
    }
    
    .nation_photos{
        width: 100%;
        display: flex;
        justify-content: space-around;
    }
    
    
    
    .nation_photo{
        background-image: url(img/nation1.png);
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    
    .nation_photo2{
        background-image: url(img/nation3.png);
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    
    .nation_photo3{
        background-image: url(img/nation4.png);
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    
    
    .nation_photo1{
        background-image: url(img/nation2.png);
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    
    .mt-3{
        font-size: 20px;
    }
    
    .min_usl_h1{
        width: 80%;
        margin: auto;
        margin-top: 60px;
        font-family: 'Cormorant Garamond', serif;
        color: aliceblue;
        font-size: 30px;
    }
    
    .min_usl{
        width: 80%;
        margin: auto;
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
    }
    
    .min_usl_item{
        width: 400px;
        height: 320px;
        background-color: #1F1F1F;
    }
    
    .min_usl_item p{
        color: aliceblue;
        font-family: 'Roboto', serif;
        font-weight: 300;
        text-align: center;
        margin-top: 4px;
    }
    
    .min_usl_item img{
        width: 400px;
        height: 290px;
    }
    
    .pay{
        width: 80%;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 100px;
        background-color: #1F1F1F;
        display: flex;
        justify-content: space-around;
    }
    
    
    
    .pay_item img{
        
        width: 112px;
        height: 112px;
    
    }
    
    .pay_item:hover{
        background-color: #232323;
    }
    
    .pay p{
        font-family: 'Roboto', serif;
        font-weight: 300;
        color: aliceblue;
        text-align: center;
    }
    
    .usl_banner{
        color: aliceblue;
        background-image: url(img/usl_banner.png);
        height: 250px;
        display: flex;
        align-items: center;
    }
    
    
    .usl_banner h1{
        font-family: 'Roboto', serif;
        font-weight: 200;
        font-size: 40px;
       margin-left: 40px;
    }
    @media screen and (max-width: 1280px) {
        .banner{
            height: 600px;
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
            background-image: url("https://sun9-74.userapi.com/impg/N7UN_WVnUDs-ikhRFXpHYMd94bOsfO25aHuIbw/_jftp9w2iq8.jpg?size=896x400&quality=96&sign=6a8ac4080f18a05f1b7264cf12f0d052&type=album");
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

    <script>// Получаем видимую часть слайда
        let viewport = document.getElementById("viewport","viewport1").offsetWidth;
        // Получаем кнопку вперёд
        let btnNext = document.getElementById("next", "next1");
        // Получаем кнопку назад
        let btnPrev = document.getElementById("prev", "prev1");
        // Получаем элемент со всеми слайдами
        let slider = document.querySelector("div.slider", "div.slider1");
        // Получаем элементы показа слайда
        let viewSliders = document.querySelectorAll(".viewSlide", ".viewSlide1");
        // Объявляем переменную номера слайда
        let viewSlide = 0;
         
        // Назначаем цвет индикатор слайда зелёный
        viewSliders[0].style.backgroundColor = "green";
         
        // Обработка клика на кнопку вперёд
        btnNext.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders[viewSlide].style.backgroundColor = "red";
            // Условие, если номер слайда меньше четырёх
            if (viewSlide < 1) { // Если верно то 
                // Увеличиваем номер слайда на один
                viewSlide++;
            } else { // Иначе
                // Номер слайда равен нулю
                viewSlide = 0;
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders[viewSlide].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider.style.left = -viewSlide * viewport + "px";
        });
         
        // Обработка клика на кнопку назад
        btnPrev.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders[viewSlide].style.backgroundColor = "red";
            // Условие, если номер слайда больше нуля
            if (viewSlide > 0) { // Если верно то
                // Уменьшаем номер слайда
                viewSlide--; 
            } else { // Иначе
                // Номер слайда равен четырём
                viewSlide = 1; 
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders[viewSlide].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider.style.left = -viewSlide * viewport + "px";
        });
        
        
        
        
        
        var oldWidth = window.innerWidth;
        window.onresize = function () {
            var newWidth = window.innerWidth;
            if (newWidth != oldWidth) {
                location.reload();
                oldWidth = newWidth;
            }
        };
        
        
        
        // Получаем видимую часть слайда
        let viewport1 = document.getElementById("viewport1").offsetWidth;
        // Получаем кнопку вперёд
        let btnNext1 = document.getElementById("next1");
        // Получаем кнопку назад
        let btnPrev1 = document.getElementById("prev1");
        // Получаем элемент со всеми слайдами
        let slider1 = document.querySelector("div.slider1");
        // Получаем элементы показа слайда
        let viewSliders1 = document.querySelectorAll(".viewSlide1");
        // Объявляем переменную номера слайда
        let viewSlide1 = 0;
         
        // Назначаем цвет индикатор слайда зелёный
        viewSliders1[0].style.backgroundColor = "green";
         
        // Обработка клика на кнопку вперёд
        btnNext1.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders1[viewSlide1].style.backgroundColor = "red";
            // Условие, если номер слайда меньше четырёх
            if (viewSlide1 < 1) { // Если верно то 
                // Увеличиваем номер слайда на один
                viewSlide1++;
            } else { // Иначе
                // Номер слайда равен нулю
                viewSlide1 = 0;
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders1[viewSlide1].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider1.style.left = -viewSlide1 * viewport1 + "px";
        });
         
        // Обработка клика на кнопку назад
        btnPrev1.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders1[viewSlide1].style.backgroundColor = "red";
            // Условие, если номер слайда больше нуля
            if (viewSlide1 > 0) { // Если верно то
                // Уменьшаем номер слайда
                viewSlide1--; 
            } else { // Иначе
                // Номер слайда равен четырём
                viewSlide1 = 1; 
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders1[viewSlide1].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider1.style.left = -viewSlide1 * viewport1 + "px";
        });
        
        // Получаем видимую часть слайда
        let viewport2 = document.getElementById("viewport2").offsetWidth;
        // Получаем кнопку вперёд
        let btnNext2 = document.getElementById("next2");
        // Получаем кнопку назад
        let btnPrev2 = document.getElementById("prev2");
        // Получаем элемент со всеми слайдами
        let slider2 = document.querySelector("div.slider2");
        // Получаем элементы показа слайда
        let viewSliders2 = document.querySelectorAll(".viewSlide2");
        // Объявляем переменную номера слайда
        let viewSlide2 = 0;
         
        // Назначаем цвет индикатор слайда зелёный
        viewSliders2[0].style.backgroundColor = "green";
         
        // Обработка клика на кнопку вперёд
        btnNext2.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders2[viewSlide2].style.backgroundColor = "red";
            // Условие, если номер слайда меньше четырёх
            if (viewSlide2 < 1) { // Если верно то 
                // Увеличиваем номер слайда на один
                viewSlide2++;
            } else { // Иначе
                // Номер слайда равен нулю
                viewSlide2 = 0;
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders2[viewSlide2].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider2.style.left = -viewSlide2 * viewport2 + "px";
        });
         
        // Обработка клика на кнопку назад
        btnPrev2.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders2[viewSlide2].style.backgroundColor = "red";
            // Условие, если номер слайда больше нуля
            if (viewSlide2 > 0) { // Если верно то
                // Уменьшаем номер слайда
                viewSlide2--; 
            } else { // Иначе
                // Номер слайда равен четырём
                viewSlide2 = 1; 
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders2[viewSlide2].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider2.style.left = -viewSlide2 * viewport2 + "px";
        });
        
        
        // Получаем видимую часть слайда
        let viewport3 = document.getElementById("viewport3").offsetWidth;
        // Получаем кнопку вперёд
        let btnNext3 = document.getElementById("next3");
        // Получаем кнопку назад
        let btnPrev3 = document.getElementById("prev3");
        // Получаем элемент со всеми слайдами
        let slider3 = document.querySelector("div.slider3");
        // Получаем элементы показа слайда
        let viewSliders3 = document.querySelectorAll(".viewSlide3");
        // Объявляем переменную номера слайда
        let viewSlide3 = 0;
         
        // Назначаем цвет индикатор слайда зелёный
        viewSliders3[0].style.backgroundColor = "green";
         
        // Обработка клика на кнопку вперёд
        btnNext3.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders3[viewSlide3].style.backgroundColor = "red";
            // Условие, если номер слайда меньше четырёх
            if (viewSlide3 < 1) { // Если верно то 
                // Увеличиваем номер слайда на один
                viewSlide3++;
            } else { // Иначе
                // Номер слайда равен нулю
                viewSlide3 = 0;
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders3[viewSlide3].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider3.style.left = -viewSlide3 * viewport3 + "px";
        });
         
        // Обработка клика на кнопку назад
        btnPrev3.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders3[viewSlide3].style.backgroundColor = "red";
            // Условие, если номер слайда больше нуля
            if (viewSlide3 > 0) { // Если верно то
                // Уменьшаем номер слайда
                viewSlide3--; 
            } else { // Иначе
                // Номер слайда равен четырём
                viewSlide3 = 1; 
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders3[viewSlide3].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider3.style.left = -viewSlide3 * viewport3 + "px";
        });
        
        
        // Получаем видимую часть слайда
        let viewport4 = document.getElementById("viewport4").offsetWidth;
        // Получаем кнопку вперёд
        let btnNext4 = document.getElementById("next4");
        // Получаем кнопку назад
        let btnPrev4 = document.getElementById("prev4");
        // Получаем элемент со всеми слайдами
        let slider4 = document.querySelector("div.slider4");
        // Получаем элементы показа слайда
        let viewSliders4 = document.querySelectorAll(".viewSlide4");
        // Объявляем переменную номера слайда
        let viewSlide4 = 0;
         
        // Назначаем цвет индикатор слайда зелёный
        viewSliders4[0].style.backgroundColor = "green";
         
        // Обработка клика на кнопку вперёд
        btnNext4.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders4[viewSlide4].style.backgroundColor = "red";
            // Условие, если номер слайда меньше четырёх
            if (viewSlide4 < 1) { // Если верно то 
                // Увеличиваем номер слайда на один
                viewSlide4++;
            } else { // Иначе
                // Номер слайда равен нулю
                viewSlide4 = 0;
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders4[viewSlide4].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider4.style.left = -viewSlide4 * viewport4 + "px";
        });
         
        // Обработка клика на кнопку назад
        btnPrev4.addEventListener("click", function () {
            // Делаем индикатор слайда красный
            viewSliders4[viewSlide4].style.backgroundColor = "red";
            // Условие, если номер слайда больше нуля
            if (viewSlide4 > 0) { // Если верно то
                // Уменьшаем номер слайда
                viewSlide4--; 
            } else { // Иначе
                // Номер слайда равен четырём
                viewSlide4 = 1; 
            }
            // Закрашиваем индикатор слайда в зелёный
            viewSliders4[viewSlide4].style.backgroundColor = "green";
            // Меняем позицию всего слайда
            slider4.style.left = -viewSlide4 * viewport4 + "px";
        });</script>
</html>
@extends('layouts.layout')



   @section('content')
   <div class="autopark">
    <div class="autopark_item">
        <p>Главная/Aвтопарк</p>
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
            <h1 id="business">БИЗНЕС</h1>
        <div class="park">
            <div class="items">
                <a href="">
            <div class="item" style="background-image: url(https://sun9-32.userapi.com/impg/clbQqmw9qGMWN1xrJD5GhKLaZN8xHNcZQYRJKg/57Z-XMDZ6Vc.jpg?size=540x374&quality=96&sign=5ffc88c9bfc82a134bd1942cb3d6640f&type=album)">
              <div class="img_text">
                <span>Cadilac Escalade</span><br>
                <span>40.000 ₽/сут.</span>
              </div>
            </div>
        </a>
        <a href="">
            <div class="item" style="background-image: url(https://sun9-76.userapi.com/impg/tqfhvXoNlWQQirNkvpQ8jqKtPy8mWL88x0QjnA/douW62SETqQ.jpg?size=540x374&quality=96&sign=eb6570e970870ced9d47fee63cd0b275&type=album)">
              <div class="img_text">
                <span>Ferrari Portofino</span><br>
                <span>51.000 ₽/сут.</span>
              </div>
            </div>
        </a>
        <a href="">
            <div class="item" style="background-image: url(https://sun9-36.userapi.com/impg/mD3HsfGptTU9RlU1WN3EJEiDeEIro9FN2DXKtg/ax8oGR2GHBY.jpg?size=540x374&quality=96&sign=1a295827d8dc0f01833c6a83b906265f&type=album)">
              <div class="img_text">
                <span>Audi Q3</span><br>
                <span>12.000 ₽/сут.</span>
              </div>
            </div>
        </a>
             </div>
              <div class="items">
                <a href="">
                    <div class="item" style="background-image: url(https://sun9-13.userapi.com/impg/mueE4juKxZUAyYg1KBHn84PdQ3Mmrgzke24iug/7GD3YSgs1RE.jpg?size=540x374&quality=96&sign=0d40ad61f031e51fcb11dc8832b0f140&type=album)">
                      <div class="img_text">
                        <span>Bentley Bentayga</span><br>
                        <span>77.000 ₽/сут.</span>
                      </div>
                    </div>
                </a>


              </div>
    </div>
</div>
<div class="autopark_item mt-5">
        <h1 id="kupe">Купе</h1>
    <div class="park">
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
<div class="autopark_item mt-5">
    <h1 id="cabr">КАБРИОЛЕТЫ</h1>
<div class="park">
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
<div class="autopark_item mt-5">
    <h1 id="sport">СПОРТКАРЫ</h1>
<div class="park">
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
<div class="autopark_item mt-5">
    <h1 id="big">ВНЕДОРОЖНИКИ</h1>
<div class="park">
    <div class="items">
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
        <a href="">
            <div class="item" style="background-image: url(https://sun9-45.userapi.com/impg/JyGNxxJGU2t4OHqMY4ndXjUtnhNzoZq8miqMjA/sdYj7F22HMg.jpg?size=540x374&quality=96&sign=23c3f78801d1e832ba491842a92345bd&type=album)">
              <div class="img_text">
                <span>Mercedes GLS 450</span><br>
                <span>35.500 ₽/сут.</span>
              </div>
            </div>
        </a>
     </div>
      <div class="items">
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
        <a href="">
            <div class="item" style="background-image: url(https://sun9-25.userapi.com/impg/KA_kLPszZa5BY9mSPrJTB1ZYayWkkKKB35EIPA/0hgz3nAiVtE.jpg?size=540x374&quality=96&sign=b898dbba3b13e3062329c3abcd44d44a&type=album)">
              <div class="img_text">
                <span>BMW X7 I40</span><br>
                <span>28.500 ₽/сут.</span>
              </div>
            </div>
        </a>
      </div>
</div>
</div>
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
   @endsection

   <style>
    



body{
    margin: 0;
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
    margin-top: 15px;
    width: 40%;
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
    background-image: url("img/banner.png");
    background-repeat: no-repeat;
    width: 100%;
    background-size:cover;
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
    background-image: url("img/bntl.png");
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
}
   </style>
@extends('layouts.layout')



   @section('content')
   <div class="usl_banner">
    <h1>Условия аренды автомобилей для <br>
      физических лиц</h1>
  </div>

  <div class="autopark">
    <p>Главная/Условия</p>
  </div>

    <div class="nation">
        <div class="nation_item">
            <p class="mt-3 ms-4">Гражданам РФ</p>
            <div class="nation_photos">
                <div class="nation_photo">
                    <p>Гражданский паспорт</p>
                </div>
                <div class="nation_photo1">
                    <p>Водительское удостоверение</p>
                </div>
            </div>
        </div>
        <div class="nation_item">
          <p class="mt-3 ms-4">Иностранным гражданам</p>
          <div class="nation_photos">
              <div class="nation_photo2">
                  <p>Загранпаспорт</p>
              </div>
              <div class="nation_photo3">
                  <p>Миграционная карта/виза <br>
                    или въездная виза</p>
              </div>
          </div>
      </div>
    </div>
    <h1 class="min_usl_h1">
      МИНИМАЛЬНЫЕ УСЛОВИЯ ПРОКАТА
    </h1>

    <div class="min_usl">
      <div class="min_usl_item">
        <img src="https://dubai.carloson.ru/img/contact/conditions6.png" alt="">
        <p>Возраст от 20 лет</p>
      </div>
      <div class="min_usl_item">
        <img src="https://dubai.carloson.ru/img/contact/conditions7.png" alt="">
        <p>От 1 года стаж вождения</p>
      </div>
      <div class="min_usl_item">
        <img src="https://dubai.carloson.ru/img/contact/conditions8.png" alt="">
        <p>Мин. предоплата при брони авто</p>
      </div>
    </div>

    <h1 class="min_usl_h1">
      СПОСОБЫ ОПЛАТЫ
    </h1>

    <div class="pay">
      <div class="pay_item">
        <img src="https://dubai.carloson.ru/img/contact/money.svg" alt="">
        <p>Наличные</p>
      </div>
      <div class="pay_item">
        <img src="https://dubai.carloson.ru/img/contact/visa.svg" alt="">
        <p>Банковская карта</p>
      </div>
      <div class="pay_item">
        <img src="https://dubai.carloson.ru/img/contact/bank.svg" alt="">
        <p>Расчетный счет</p>
      </div>
      <div class="pay_item">
        <img src="https://dubai.carloson.ru/img/contact/web.svg" alt="">
        <p>Оплата через сайт</p>
      </div>
      <div class="pay_item">
        <img src="https://dubai.carloson.ru/img/contact/wallet.svg" alt="">
        <p>Электронные деньги</p>
      </div>
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

 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
   @endsection

   <style>




body{
    margin: 0;
    background-color: #141414;
}
a{
  text-decoration: none;
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
    background-image: url(https://sun9-33.userapi.com/impg/vNxzHwObmdSOdZXSyBVSCmtTpG2IXbcX5XPE3Q/LoNriIsAl3c.jpg?size=360x360&quality=96&sign=5208a07e965a74869d8b6136bf1f8e31&type=album);
    width: 300px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: end;
}

.nation_photo2{
    background-image: url(https://sun9-40.userapi.com/impg/EgXKIYyf3zw7TFGpQu-MCnabP0sVp3tEVvablQ/z2XQnq7NaRU.jpg?size=360x360&quality=96&sign=805be013a838f85c124984556c4b4121&type=album);
    width: 300px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: end;
}

.nation_photo3{
    background-image: url(https://sun9-76.userapi.com/impg/5AhYDilDqfhjbIjfWt1BWh92AvFCErWnrQ5lqA/HYT5S8QXdzI.jpg?size=360x360&quality=96&sign=c8d9847164930aa1ea6644bc0ef39d7e&type=album);
    width: 300px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: end;
}


.nation_photo1{
    background-image: url(https://sun9-1.userapi.com/impg/jQmFZQXFlJ2mFOtXnOPM2SZ2HmztfenDcL977w/XrOeik6bEmE.jpg?size=360x360&quality=96&sign=fc4a41bd9f13dfc7ef72c4a7624c2bad&type=album);
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
    background-image: url(https://sun9-62.userapi.com/impg/W3DdbkP1KbelNcy4j330lzb5EIWIO3OdZYbBmA/Ob9Qw2IruNQ.jpg?size=1920x252&quality=96&sign=174e84bbf0b324ada5dfe32364183fac&type=album);
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
    .nation{
        flex-direction: column;
    }
 
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

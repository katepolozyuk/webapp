<?php session_start();
if (isset($_SESSION['Auth'])) {
    $session = $_SESSION['Auth'];
} else {
    $session = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VR Club</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class = "box header">
    <div clas = "logotip">
        <img src = "img/logo.png" alt = "logo" />
    </div>
    <nav>
        <ul class="navigation">
            <li><a href="#">Забронировать</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Игры</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><?php  if($_SESSION['Auth']==0){ echo " <a href=\"#!\" id=\"opensing\">Вход</a>";}else{echo "<a href=\"#!\" id=\"outuser\">Выход</a><a href=\"#!\" id=\"opensing\"></a>";}?></li>
        </ul>
    </nav>
</div>
<div>
    <div class="modal"></div>
    <div class="modal-content">
        <h2>Вход</h2>
        <form id = "auth">
            <input type="email" class="inline-input" name="login" placeholder="example@gmail.com">
            <input type="password" class="inline-input" name="password" placeholder="password">
        </form>
        <div class="info">
        </div>
        <a class="btn" id="SignIn">Вход</a>
    </div>
</div>
<div class = "box content">

    <form class = "booking">
        <h1 class = "h1">Забронируйте время прямо сейчас!</h1>
        <div class = "calendar">
            <div class = "calendar-header">
                <div class = "previous-month">
                    Февраль
                </div>
                <div class = current-month>
                    Март
                </div>
                <div class = "next-month">
                    Апрель
                </div>
            </div>
            <div class = "day">Пн</div>
            <div class = "day">Вт</div>
            <div class = "day">Ср</div>
            <div class = "day">Чт</div>
            <div class = "day">Пт</div>
            <div class = "weekend-day">Сб</div>
            <div class = "weekend-day">Вс</div>
            <div class = "day-off"></div>
            <div id = "01" class = "day-past">1</div>
            <div id = "02" class = "day-past">2</div>
            <div id = "03" class = "day-past">3</div>
            <div id = "04" class = "day-past">4</div>
            <div id = "05" class = "day-past">5</div>
            <div id = "06" class = "day-past">6</div>
            <div id = "07" class = "day-past">7</div>
            <div id = "08" class = "day-past">8</div>
            <div id = "09" class = "day-past">9</div>
            <div id = "10" class = "day-past">10</div>
            <div id = "11" class = "day-today">11</div>
            <div id = "12" class = "day-future">12
                <div class = sits>20 мест</div>
            </div>
            <div id = "13" class = "day-future">13
                <div class = sits>22 мест</div>
            </div>
            <div id = "14" class = "day-future">14
                <div class = sits>18 мест</div>
            </div>
            <div id = "15" class = "day-future">15
                <div class = sits>24 мест</div>
            </div>
            <div id = "16" class = "day-future">16
                <div class = sits>18 мест</div>
            </div>
            <div id = "17" class = "day-future">17
                <div class = sits>20 мест</div>
            </div>
            <div id = "18" class = "day-future">18
                <div class = sits>20 мест</div>
            </div>
            <div id = "19" class = "day-future">19
                <div class = sits>26 мест</div>
            </div>
            <div id = "20" class = "day-future">20
                <div class = sits>20 мест</div>
            </div>
            <div id = "21" class = "day-future">21
                <div class = sits>17 мест</div>
            </div>
            <div id = "22" class = "day-future">22
                <div class = sits>20 мест</div>
            </div>
            <div id = "23" class = "day-future">23
                <div class = sits>20 мест</div>
            </div>
            <div id = "24" class = "day-future">24
                <div class = sits>20 мест</div>
            </div>
            <div id = "25" class = "day-future">25
                <div class = sits>20 мест</div>
            </div>
            <div id = "26" class = "day-future">26
                <div class = sits>20 мест</div>
            </div>
            <div id = "27" class = "day-future">27
                <div class = sits>20 мест</div>
            </div>
            <div id = "28" class = "day-future">28
                <div class = sits>20 мест</div>
            </div>
            <div id = "29" class = "day-future">29
                <div class = sits>20 мест</div>
            </div>
            <div id = "30" class = "day-future">30
                <div class = sits>20 мест</div>
            </div>
            <div id = "31" class = "day-future">31
                <div class = sits>20 мест</div>
            </div>

        </div>
        <div class = "booking-form">
            <div class = "booking-parametrs">
                <p>Выберите время:</p>
                <select class = "time">
                    <option>14:00 - 15:00</option>
                    <option>15:00 - 16:00</option>
                    <option>16:00 - 17:00</option>
                    <option>17:00 - 18:00</option>
                    <option>18:00 - 19:00</option>
                    <option>19:00 - 20:00</option>
                    <option>20:00 - 21:00</option>
                    <option>21:00 - 22:00</option>
                </select>
                <p>Ваше имя*:</p>
                <input type = "text" name = "name">
                <p>Количество мест:</p>
                <select class = "sit">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <p>Телефон*:</p>
                <input type = "text" name = "phone">
                <p>Комментарий:</p>
                <textarea name = "comments"></textarea>
            </div>
        </div>
        <div class = "cost">К оплате:</div>
        <div class = "booking-buton">
            <input type="submit" value="Забронировать" class="booking-btn">
        </div>
    </form>
</div>
</div>

<div class = "games">
    <h1 class = "h1">Мы предоставляем большой ассортимент игр!</h1>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
    <div class = "image-game">
        <img src ="#"/>
        <div class = "text-games">
            some information
            <img src = "#" alt = "chelove4ek">
        </div>
    </div>
</div>


<div class = "price">
    <h1 class = "h1">Лучшие цены в округе!</h1>
    <div class = "price-block">
        <img src = "#"/>
        <div class = "text">some text</div>
    </div>
    <div class = "price-block">
        <img src = "#"/>
        <div class = "text">some text</div>
    </div>
    <div class = "price-block">
        <img src = "#"/>
        <div class = "text">some text</div>
    </div>
</div>

<div class = "about-us">
    <div class = "slider">

    </div>
</div>

<div class = "contact">
    <div class = "map">

    </div>
    <div class = "contacts">


        <p>г. Киев</p>
        <p>ул. Киевская 11/2</p>
        <p>+380978911621</p>
        <p>katepol@gmail.com</p>
    </div>
</div>
<div class = "box footer">
    <div class="rights">
        <p>All rights reserved</p>
    </div>
    <ul class ="social-link">
        <li><a href="#"><img src ="img/twitter.png" alt="twitter"/></a></li>
        <li><a href="#"><img src ="img/facebook.png" alt="facebook"/></a></li>
        <li><a href="#"><img src ="img/instagram.png" alt="instagram"/></a></li>
    </ul>
    <div class="developer">
        <p>by K. Pol</p>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    let elem = document.getElementById("opensing");
    let elem1 = document.getElementsByClassName("modal")[0];
    function openmodal() {
        document.getElementsByClassName("modal-content")[0].style = ("display:block");
        document.getElementsByClassName("modal")[0].style = ("display:block");

    }

    function closemodal() {
        document.getElementsByClassName("modal-content")[0].style = ("display:none");
        document.getElementsByClassName("modal")[0].style = ("display:none;");

    }
    elem.onclick = openmodal;
    elem1.onclick = closemodal;
    $(function () {


        function checkfield() {
            let countField = 0;
            $('#auth input').each(function (i, elem) {
                if ($(this).val() == '') {
                    alert('Заполните все поля');
                    countField = 1;

                }
                if ($(this).val().length < 3) {
                    alert('Длина поля должна быть больше 3 симвлов');
                    countField = 1;

                }
            });
            return countField;
        }

        
        $("#SignIn").on('click', function () {

            let countField = checkfield();
            let email = $("#auth input[name='login']").val();
            let password = $("#auth input[name='password']").val();

            if (countField == 0) {
                $.ajax({
                    url: "../htdocs/jq_index.php",
                    type: "POST",
                    data: {email: email, password: password, a: 'auth'},
                    success: function (data) {
                        $('.info').html(data);

                    }
                });
            }
        });
        $("#outuser").on('click', function () {
            $.ajax({
                url: "../htdocs/jq_index.php",
                type: "POST",
                data: {a: 'out'},
                success: function (data) {


                    location.reload();


                }

            });
        })

    })
</script>
</html>


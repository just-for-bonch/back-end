<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="icon" href="../favicon.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <header><!-- start header -->
    <div class="main-menu"> <!-- главное меню -->
      <div class="container">
        <nav class="navbar row">
          <div class="col col-10">
          <ul class="row">
            <li class="logo col col-3"><a href="#"><img src="../img/logo.svg"></a></li>
            <li class="nav-item col col-2"><a href="#">О системе</a></li>
            <li class="nav-item col col-2"><a href="#">Поддержка</a></li>
            <li class="social col col-2">
              <div><a href="#"><img src="../img/github.svg"></a></div>
              <div><a href="#"><img src="../img/vk.svg"></a></div>
            </li>
            <li class="profile col col-3">
              <div class="avatar-hello">
                <div class="avatar-image"><img src="../img/1d.png"></div>
                <div><p style="margin: 0;">Hi, Tom!<br>
                  <a href="#">Log Out</a></p></div>
              </div>
            </li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
  </header><!-- end header -->

  <div class="sidebar"><!-- start sidebar -->
    <ul class="block-links">
      <li><a href="#">Профиль</a></li>
      <li><a href="#">Календарь</a></li>
      <li><a href="#">Задания</a></li>
      <li><a href="#">Рейтинг</a></li>
    </ul>
  </div><!-- end sidebar -->

  <div class="container"><!-- start main content -->
    <div class="row wrapper">     
      <div class="col col-10">
        <div class="row info">
          <div class="col col-3 avatar">
            <div><img src="../img/1d.png"></div>
          </div>
          <div class="col meta-profile">
            <p class="name">Имя Фамилия</p>
            <p class="company">Ваша компания: Just for Bonch</p>
            <p class="level">Ученик (2 уровень)</p>
            <p class="description">Описание</p>
            <div class="scale">
              <div class="progress"></div>
            </div>
            <p class="next-level">До на следующий уровень осталось <span class="value">56</span>XP<br>
            <span class="value">2</span> уровня до звания "<span class="value">Новичок</span>"</p>
          </div>
        </div><!-- end info -->
        <div class="achiev-slider">
          <div class="achiev-images">
            <div class="achiev"><img src="../img/1.png"></div>
            <div class="achiev"><img src="../img/2.png"></div>
            <div class="achiev"><img src="../img/3.png"></div>
            <div class="achiev"><img src="../img/4.png"></div>
            <div class="achiev"><img src="../img/5.png"></div>
          </div>
        </div><!-- end slider -->
        <div class="row done">
          <div class="col">
            <h5>Последние выполненные задания:</h5>
            <div class="panel">
              <ul>
                <li class="list-header">Название</li>
                <li>Заказчик</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</li>
              </ul>
              <ul>
                <li class="list-header">Название</li><!-- у названия отдельный стиль -->
                <li>Заказчик</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</li>
              </ul>
            </div>
          </div>
          <div class="col">
            <h5>Последние посещенные мероприятия:</h5>
            <div class="panel">
              <ul>
                <li class="list-header">Название</li>
                <li>Дата</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</li>
              </ul>
              <ul>
                <li class="list-header">Название</li>
                <li>Дата</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</li>
              </ul>
            </div>
          </div>
        </div><!-- end done panels -->
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->

  <footer><!-- start footer -->
    <div class="container"> 
      Copyright (c) Just for Bonch 2018
    </div>
  </footer><!-- end footer -->
    
  </div>
<script data-rocketsrc="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/script.js"></script>
</body>
</html>
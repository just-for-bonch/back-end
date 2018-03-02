<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>

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
        <h2>Рейтинг сотрудников</h2>
        <p class="company">Ваша компания: Just for Bonch</p>
        <div class="row user-rating"><!-- start user -->
          <div class="user-meta-image col">
            <div class="user-image">
              <img src="../img/1d.png">
            </div>
            <div class="user-meta">
              <p class="name">Имя Фамилия Отчество</p>
              <p>Дата рождения: 26.07.1987</p>
              <p>Обо мне: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col col-5"> 
            <div class="scale">
              <div class="progress"></div>
            </div>
            <p class="level">Уровень (2 уровень)</p>
          </div>
        </div><!-- end user -->
        <div class="row user-rating"><!-- start user -->
          <div class="user-meta-image col">
            <div class="user-image">
              <img src="../img/1d.png">
            </div>
            <div class="user-meta">
              <p class="name">Имя Фамилия Отчество</p>
              <p>Дата рождения: 26.07.1987</p>
              <p>Обо мне: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col col-5"> 
            <div class="scale">
              <div class="progress"></div>
            </div>
            <p class="level">Уровень (2 уровень)</p>
          </div>
        </div><!-- end user -->
        <div class="row user-rating"><!-- start user -->
          <div class="user-meta-image col">
            <div class="user-image">
              <img src="../img/1d.png">
            </div>
            <div class="user-meta">
              <p class="name">Имя Фамилия Отчество</p>
              <p>Дата рождения: 26.07.1987</p>
              <p>Обо мне: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col col-5"> 
            <div class="scale">
              <div class="progress"></div>
            </div>
            <p class="level">Уровень (2 уровень)</p>
          </div>
        </div><!-- end user -->
        <div class="row user-rating"><!-- start user -->
          <div class="user-meta-image col">
            <div class="user-image">
              <img src="../img/1d.png">
            </div>
            <div class="user-meta">
              <p class="name">Имя Фамилия Отчество</p>
              <p>Дата рождения: 26.07.1987</p>
              <p>Обо мне: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="col col-5"> 
            <div class="scale">
              <div class="progress"></div>
            </div>
            <p class="level">Уровень (2 уровень)</p>
          </div>
        </div><!-- end user -->
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->

<?php include( '../footer.php' ); ?>
<script data-rocketsrc="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/script.js"></script>
</body>
</html>
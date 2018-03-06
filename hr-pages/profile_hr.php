<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>

  <div class="container"><!-- start main content -->
    <div class="row wrapper">     
      <div class="col col-10">
        <h2>Здравствуйте, <?php echo $_SESSION['fam']." ".$_SESSION['imy'];?>!</h2>
        <p class="company">Ваша компания: 
          <?php 
              $query=mysql_query("SELECT name_comp FROM company WHERE id_comp='".$_SESSION['id_company']."'");
              $comm=mysql_fetch_array($query);
              echo $comm['name_comp'];
              unset($query);
              unset($comm);?> 
        </p>
        <article class="hr-funct">
          <p>Вы зарегистрированы как руководитель, поэтому вам доступны следующие функции:</p>
          <p>- Проверка заявок пользователей в компанию<br>
            <span class="attention">Внимание: пользователь не сможет зайти в систему, пока не получит ваше подтверждение</span>
          - Назначение пользователям прав руководителя<br>
          - Создание новых ачивок для ваших работников<br> 
          - Присуждение наград работникам<span class="red">*</span><br> 
          - Добавление, изменение и удаление событий в календаре (будут видны всем пользователям)</p>
        </article>
        <div class="btn-group row">
          <button class="col col-5 btn-green"><a href="unconfirmed.php">Заявки</a></button>
          <button class="col col-5 btn-yellow" onclick="openCel()">Создать новую ачивку</button>
        </div>
        <p><span class="red">*</span>Чтобы добавить награду работнику, перейдите в его профиль на странице рейтинга.</p>
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->
<div id="myNav" class="overlay">
        <div class="enter-block taskcreat-block">
          <div class="event-ttl">Добавить ачивку</div>
          <div class="close-btn" onclick="closeCel()">X</div>
          <div class="add-event-ttl">
            <span>Загрузите изображение:</span><br><input type="text">
          </div>
          <div class="add-event-ttl">
            <span>Введите название:</span><br><input type="text">
          </div>
          <div class="add-event-ttl">
            <span>Введите награду:</span><br><input type="text">
          </div> 
          <div class="butt-achive">
              <div class="achive-butt">
                  <div class="add-achive">Добавить ачивку</div>
              </div>
          </div>

        </div>
    </div>
<?php include( '../footer.php' ); ?>
<script src="../"></script>

<script src="../js/celender.js"></script>
</body>
</html>
  <div class="sidebar"><!-- start sidebar -->
    <ul class="block-links">
      <li><a href="<?php if ($_SESSION['id_group']==2) echo '/hr-pages/profile_hr.php'; else echo '/user-pages/profile_user.php' ?>">Профиль</a></li>
      <li><a href="<?php if ($_SESSION['id_group']==2) echo '/hr-pages/celender_hr.php'; else echo '/user-pages/celender_user.php' ?>">Календарь</a></li>
      <li><a href="/user-pages/desk.php">Задания</a></li>
      <li><a href="<?php if ($_SESSION['id_group']==2) echo '/hr-pages/rating.php'; else echo '/user-pages/rating.php' ?>">Рейтинг</a></li>
    </ul>
  </div><!-- end sidebar -->
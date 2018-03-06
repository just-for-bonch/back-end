<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>
  <div class='container'><!-- start main content -->
    <div class='row wrapper'>     
      <div class='col col-10'>
        <h2>Неподтверждённые пользователи</h2>
        <p class='company'>Ваша компания: <?php 
              $query=mysql_query("SELECT name_comp FROM company WHERE id_comp='".$_SESSION['id_company']."'");
              $comm=mysql_fetch_array($query);
              echo $comm['name_comp'];
              unset($query);
              unset($comm);?> 
        </p>
        <div class='users row'>
<?php 
  $query=mysql_query("SELECT * FROM requests INNER JOIN employees ON id_emp=id_user_req WHERE id_comp_req='".$_SESSION['id_company']."'");
  while($employ=mysql_fetch_array($query))
  echo "
          <div class='user col col-6'><!-- block of user -->
            <div class='user-delete'>
              <a href='../php/delete_us.php'><img src='/img/delete.svg'></a>
            </div>
            <div class='user-image'>
              <img src='".$employ['src_avatar']."''>
            </div>
            <div class='user-meta-btns'>
              <div class='user-meta'>
                <p class='name'>".$employ['fam_emp']." ".$employ['imy_emp']."</p>
                <p>Дата рождения: ".$employ['data_emp']."</p>
              </div>
              <div class='btn-group row'>
               <form class='col col-6' method='post' action='../php/confirm_user.php'><input type='text' name='id_us' hidden value='".$employ['id_emp']."'><button type='submit' class='btn-yellow'>Подтвердить как работника</button></form>
                <form class='col col-6' method='post' action='../php/confirm_hr.php'><input type='text' name='id_us' hidden value='".$employ['id_emp']."'><button type='submit' class='sbtn-green'>Подтвердить как руководителя</button></form>
              </div>
            </div>
          </div><!-- end block of user -->";
          
?>        
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->
</div>
<?php include( '../footer.php' ); ?>
</body>
</html>
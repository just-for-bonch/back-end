<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>

 
  <div class="container"><!-- start main content -->
    <div class="row wrapper">     
      <div class="col col-10">
        <h2>Рейтинг сотрудников</h2>
        <p class="company">Ваша компания: 
        <?php 
              $query=mysql_query("SELECT name_comp FROM company WHERE id_comp='".$_SESSION['id_company']."'");
              $comm=mysql_fetch_array($query);
              echo $comm['name_comp'];
              unset($query);
              unset($comm);?>
        </p>
        <?php 
      $query=mysql_query("SELECT * FROM employees INNER JOIN users ON id_user=id_emp INNER JOIN level ON id_emp=id_user_lvl WHERE id_company='".$_SESSION['id_company']."' ORDER BY total_exp DESC");
        while ($emp=mysql_fetch_array($query))
        {
          echo "
        <div class='row user-rating'><!-- start user -->
          <div class='user-meta-image col'>
            <div class='user-image'>
              <img src='..".$emp['src_avatar']."'>
            </div>
            <div class='user-meta'>
              <p class='name'>".$emp['fam_emp']." ".$emp['imy_emp']."</p>
              <p>Дата рождения: ".$emp['data_emp']."</p>
              <p>Обо мне: ".$emp['about_emp']."</p>
            </div>
          </div>
          <div class='col col-5'> 
            <p class='level'>";
            $i=0;
            $v=0;
             $lvls= array(0 => 0, 1 =>100, 2 =>300, 3=>600, 4=>1000, 5=>1500);
                $zvaniy= array(0 =>'Гость',1 =>'Ученик', 2 =>'Ученик', 3=>'Опытный', 4=> 'Опытный', 5=>'Ветеран');
                  while ($emp['total_exp']>$lvls[$i])
                    {
                      $i++;
                    }
                    if ($emp['total_exp']==0)
                    $proz=0;
                  else{
                    $proz=$emp['total_exp']/$lvls[$i]*100;
                  $v=$i-1; 
                  }
                echo $zvaniy[$v],' (',$v;
            echo " уровень)</p>
            <div class='scale'>
              <div class='progress' style='width:".$proz."'></div>
            </div>
          </div>  
          </div> 
        "; 
      }
        ?>
      </div>
      </div><!-- end col-10 -->
    </div><!-- end row -->
  </div><!-- end main content -->
<?php include( '../footer.php' ); ?>
<script data-rocketsrc="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/script.js"></script>
</body>
</html>
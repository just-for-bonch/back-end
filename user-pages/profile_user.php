<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>

  <div class="container"><!-- start main content -->
    <div class="row wrapper">     
      <div class="col col-10">
        <div class="row info">
          <div class="col col-3 avatar">
            <div><?php echo ("<img src='../".$_SESSION['img']."'>");?></div>
          </div>
          <div class="col meta-profile">
            <p class="name"><?php echo $_SESSION['fam']." ".$_SESSION['imy']; ?></p>
            <p class="company">Ваша компания: 
              <?php 
              $query=mysql_query("SELECT name_comp FROM company WHERE id_comp='".$_SESSION['id_company']."'");
              $comm=mysql_fetch_array($query);
              echo $comm['name_comp'];
              unset($query);
              unset($comm);?> 
            </p>
            <p class="level">  
              <?php
                $i=0;
                $query=mysql_query("SELECT total_exp FROM level WHERE id_user_lvl='".$_SESSION['id_p']."'");
                $tot=mysql_fetch_array($query);
                $lvls= array(0 => 0, 1 =>100, 2 =>300, 3=>600, 4=>1000, 5=>1500);
                $zvaniy= array(0 =>'Гость',1 =>'Ученик', 2 =>'Ученик', 3=>'Опытный', 4=> 'Опытный', 5=>'Ветеран');
                  while ($tot['total_exp']>$lvls[$i])
                    {
                      $i++;
                    }
                $diff=$lvls[$i]-$tot['total_exp'];
                $v=$i-1;  
                  if ($tot['total_exp']==0)
                    $proz=0;
                  else
                    $proz=$tot['total_exp']/$lvls[$i]*100;
                echo $zvaniy[$v],' (',$v;

                if (($v%2)==0) {$next=$zvaniy[$v+1]; $l=1;}
                else {$next=$zvaniy[$v+2]; $l=2;}
                ?> уровень)</p>
            <p class="description"><?php echo $_SESSION['about']; ?></p>
            <div class="scale">
              <div class="progress"  style="width: <?php echo $proz;?>%;"></div>
            </div>
            <p class="next-level">До следующего уровеня осталось <span class="value"><?php echo $diff?></span>XP<br>
            <span class="value"><?php echo $l; ?></span> уровня до звания "<span class="value"><?php echo $next; ?></span>"</p>
          </div>
        </div><!-- end info -->
        <div class="achiev-slider">
          <div class="achiev-images">
           <?php 
            $query=mysql_query("SELECT * FROM ach_emp INNER JOIN all_achievements ON id_ach_emp=id_ach WHERE id_emp_ach='".$_SESSION['id_p']."'");
            while($ach=mysql_fetch_array($query))
            echo "<div class=\"achiev\"><img style='max-width:100px;' src='".$ach['src_img_ach']."'></div>";
            ?>  
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

<?php include( '../footer.php' );?>
</body>
</html>
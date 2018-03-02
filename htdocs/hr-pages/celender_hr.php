<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>
  <div class="celender">
    <div class="mounth-ttl">Февраль 2018</div>
    <div class="date-search"><span>Год:</span><input type="text"><span>Месяц:</span><input type="text"><div class="arrows"></div></div>
    <div class="celender-block">
      <div class="day">
        <div class="date"><span>1<br>пн</span></div>
      </div>
      <div class="day">
        <div class="date"><span>2<br>вт</span></div>
        </div>
      <div class="day">
        <div class="date"><span>3<br>ср</span></div>
      </div>
      <div class="day">
        <div class="date"><span>4<br>чт</span></div>

      </div>
      <div class="day">
        <div class="date"><span>5<br>пт</span></div>
        </div>
      <div class="day">
        <div class="date"><span>6<br>сб</span></div>
      </div>
      <div class="day">
        <div class="date"><span>7<br>вс</span></div>
      </div>
      <div class="day">
        <div class="date"><span>8<br>пн</span></div>
        </div>
      <div class="day">
        <div class="date"><span>9<br>вт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>10<br>ср</span></div>
        <div class="event">
          <div class="add-event-cel" onclick="openCel()""></div>
        </div>
        <div id="myNav" class="overlay">
        <div class="enter-block">
          <div class="event-ttl">Событие 10.02.2018</div>
          <div class="close-btn" onclick="closeCel()">X</div>
          <div class="add-event-ttl">
            <span>Название:</span><br><input type="text">
          </div>
          <div class="add-event-ttl">
            <span>Описание:</span><br><textarea name="" ></textarea>
          </div>  
          <div class="buttns-event">
          <div class="add-event-butt "><div class="plus"></div></div>
          <div class="add-event-butt purp-butt"><div class="right-arrow"></div></div>
          <div class="add-event-butt red-butt"><div class="minus"></div></div></div>          
        </div>
    </div>
      </div>
      <div class="day">
        <div class="date"><span>11<br>чт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>12<br>пт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>13<br>сб</span></div>
      </div>
      <div class="day">
        <div class="date"><span>14<br>вс</span></div>
        </div>
      <div class="day">
        <div class="date"><span>15<br>пн</span></div>
      </div>
      <div class="day">
        <div class="date"><span>16<br>вт</span></div>
        </div>
      <div class="day">
        <div class="date"><span>17<br>ср</span></div>
      </div>
      <div class="day">
        <div class="date"><span>18<br>чт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>19<br>пт</span></div>
        </div>
      <div class="day">
        <div class="date"><span>20<br>сб</span></div>
      </div>
      <div class="day">
        <div class="date"><span>21<br>вс</span></div>
      </div>
      <div class="day">
        <div class="date"><span>22<br>пн</span></div>
      </div>
      <div class="day">
        <div class="date"><span>23<br>вт</span></div>
        </div>
      <div class="day">
        <div class="date"><span>24<br>ср</span></div>
      </div>
      <div class="day">
        <div class="date"><span>25<br>чт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>26<br>пт</span></div>
      </div>
      <div class="day">
        <div class="date"><span>27<br>сб</span></div>
      </div>
      <div class="day">
        <div class="date"><span>28<br>вс</span></div>
      </div>
      </div>
    </div><!-- end calendar -->

<?php include( '../footer.php' ); ?>

<script src="js/script.js"></script>
<script src="../js/celender.js"></script>
</body>
</html>
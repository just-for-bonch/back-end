<?php session_start(); include("../connect.php"); ?>
<?php include( '../header.php' ); ?>
<?php include( '../sidebar.php' ); ?>

<div class="desk-align">
    <div class="tab">
      <button class="tablinks active" onclick="openCity(event, 'Vacant')">Вакантные</button>
      <button class="tablinks" onclick="openCity(event, 'Solved')">Решаемые</button>
      <button class="tablinks" onclick="openCity(event, 'Created')">Созданные</button>
  </div>

  <!-- Tab content -->
  <div id="Vacant" class="tabcontent" style="display: block;">
      <div class="tasks">
          <h3>Рабочие задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
          </div>
      </div>
      <div class="tasks">
          <h3>Дополнительные задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task">Я могу!</div>
              </div>
          </div>
      </div>
      <div class="add-task">
          <div class="add-task-info">Вы можете создавать свои задачи и следить за их выполнением! Просто нажмите на кнопку</div>
          <div class="add-task-butt" onclick="openCel()">Создать задание</div>
      </div>
  </div>

  <div id="Solved" class="tabcontent">
      <div class="tasks">
          <h3>Рабочие задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
          </div>
      </div>
      <div class="tasks">
          <h3>Дополнительные задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Заказчик ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
                  <div class="butt-task end-task">Завершить задание</div>
              </div>
          </div>
      </div>
      <div class="add-task">
          <div class="add-task-info">Вы можете создавать свои задачи и следить за их выполнением! Просто нажмите на кнопку</div>
          <div class="add-task-butt" onclick="openCel()">Создать задание</div>
      </div>
  </div>

  <div id="Created" class="tabcontent">
      <div class="tasks">
          <h3>Рабочие задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
          </div>
      </div>
      <div class="tasks">
          <h3>Дополнительные задания</h3>
          <div class="block-tasks">
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
              <div class="task">
                  <div class="ttl-task">Название</div>
                  <div class="caller">Исполнитель ФИО</div>
                  <div class="description">Описание: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quam, non repellendus sint voluptas, deleniti animi. Pariatur vero enim nisi.</div>
                  <div class="reward">Нагнада: печеньки</div>
              </div>
          </div>
      </div>
      <div class="add-task">
          <div class="add-task-info">Вы можете создавать свои задачи и следить за их выполнением! Просто нажмите на кнопку</div>
          <div class="add-task-butt" onclick="openCel()">Создать задание</div>

      </div>
  </div>

</div>

<div id="myNav" class="overlay">
        <div class="enter-block taskcreat-block">
          <div class="event-ttl">Добавить задание</div>
          <div class="close-btn" onclick="closeCel()">X</div>
          <div class="add-event-ttl">
            <span>Название:</span><br><input type="text">
          </div>
          <div class="add-event-ttl">
            <span>Описание:</span><br><input type="text">
          </div>
          <div class="add-event-ttl">
            <span>Награда:</span><br><input type="text">
          </div> 
          <div class="tasks-choice">
              <p><input name="dzen" type="radio" value="nedzen">Рабочая</p>
               <p><input name="dzen" type="radio" value="nedzen">Дополнительная</p> 
          </div>
          <div class="chek">
              <div class="check-butt">
                  <div class="check-img"></div> 
              </div>
          </div>

        </div>
    </div>
    
<?php include( '../footer.php' ); ?>

<script data-rocketsrc="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/script.js"></script>
<script src="../js/celender.js"></script>
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>
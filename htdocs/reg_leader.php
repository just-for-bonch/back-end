<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="css/style.css">   
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

</head>
<body>
    <div class="header">
		<div class="head">
			<div class="logo"><a href=""><img src="img/logo.png" alt=""></a></div>
			<div class="menu">
				<ul>
					<li>Главная</li>
					<li>О системе</li>
					<li>Поддержка</li>
					<li>Вход</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-align">
		<div class="heading">
			<span>Регистрация</span>
		</div>
	</div>
    <div class="page-align">
        <div class="butt-block">
            <a href="reg_coop.php" class="reg-butt">Сотрудник</a>
            <a href="reg_leader.php" class="reg-butt-active">HR-руководитель</a>
        </div>
    </div>
    <div class="page-align">
		  <div class="stepsForm">
            <form method="post" class="forms"> 
                <div class="sf-steps">
                    <div class="sf-steps-content">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>                
                <div class="sf-steps-form sf-radius"> 
                    <ul class="sf-content"> 
                        <li><div class="ttl-name">Ваше имя:</div>
                            <div class="">
                                <input type="text" placeholder="Иван" data-required="true" class="name" name="imy">
                            </div>
                        </li>
                    </ul>                    
                    <ul class="sf-content"> 
                        <li><div class="ttl-email">Ваша фамилия:</div>
                            <div class="">
                                <input type="text" placeholder="Иванов" data-required="true"  class="email" name="fam">
                            </div>
                        </li>
                    </ul>
                    <ul class="sf-content"> 
                        <li><div class="ttl-email">Ваш e-mail:</div>
                            <div class="">
                                <input type="text" placeholder="example@example.com" data-required="true" data-email="true" class="email" name="login">
                            </div>
                        </li>
                    </ul>
                    <ul class="sf-content"> 
                        <li><div class="ttl-email">Ваш пароль:</div>
                            <div class="">
                                <input type="password" placeholder="qwer1234" data-required="true"  class="email" name="pass">
                            </div>
                        </li>
                    </ul>
                    <ul class="sf-content"> 
                        <li><div class="ttl-email">Ваша дата рождения:</div>
                            <div class="">
                                <br>
                                <?php
            // Число
            echo "<select name=\"sel_day\" style=\"font-size:26px; ext-align: center;\">";
            $i = 1;
            $ii=1;
            while ($i <= 31) 
            {
                echo "<option value='" . $i . "'>$i</option>";
                $i++;
            }
            echo "</select>";
                // Месяц
                echo "<select name='sel_month' style=\"font-size:26px;ext-align: center;\" >";
                $month = array(
                    "Январь",
                    "Февраль",
                    "Март",
                    "Апрель",
                    "Май",
                    "Июнь",
                    "Июль",
                    "Август",
                    "Сентябрь",
                    "Октябрь",
                    "Ноябрь",
                    "Декабрь"
                    );
                        foreach ($month as $m) {
                            echo "<option value='" . $ii . "'>$m</option>";
                            $ii=$ii+1;
                        }
                        unset($ii);
                    echo "</select>";
            echo "<select name='sel_year' style=\"font-size:26px; text-align: center;\">";
            $j = 1910;
                while ($j <= 2025) {
                    echo "<option value='" . $j . "'>$j</option>";
                    $j++;
                }
            echo "</select><br>";
        ?>
                            </div>
                        </li>
                    </ul>
                    <ul class="sf-content">
                         <li><div class="ttl-massage">Обо мне:</div>
                            <div class="">
                                <textarea placeholder="Я крут)" name="about" data-required="true" class="massage"></textarea>
                            </div>
                         </li>
                    </ul>
                    <ul class="sf-content">
                         <li><div class="ttl-massage">Ваш аватар:</div>
                            <div class="">
                                <input type="file" class="email" name="filename">
                            </div>
                         </li>
                    </ul>

                    <ul class="sf-content">
                         <li><div class="ttl-massage">Название вашей компании:</div>
                            <div class="">
                                <input type="text" class="email" name="company">
                            </div>
                         </li>
                    </ul>

                </div>
                
                <div class="sf-steps-navigation sf-align-right">
                    <span id="sf-msg" class="sf-msg-error"></span>
                    <button id="sf-next" type="button" class="sf-button"></button>
                </div>
            </form>
        </div>
	</div>
	<script src="js/jquery.min.js"></script>
    <script src="js/stepsForm1.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>



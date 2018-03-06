<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная страница</title>
	<link rel="stylesheet" href="css/style.css">	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body onload="<?php  if (isset($_GET['err'])) echo 'openNav()';?>">
	<div class="header">
		<div class="head">
			<div class="logo"><a href="index.php"><img src="img/logo.png" alt=""></a></div>
			<div class="menu">
				<ul>
					<li>Главная</li>
					<li>О системе</li>
					<li>Поддержка</li>

					<li class="enter" <?php 
					if (isset($_GET['err'])) echo "><a style='color:white;' href=\"php/logout.php\"> Выход"; 
						else
						{
					if (isset($_SESSION['id_group']))
					{
					if ($_SESSION['id_group']==1) echo "><a style='color:white;' href=\"/user-pages/profile_user.php\">Личный кабинет"; 
					if ($_SESSION['id_group']==2)echo "><a style='color:white;' href=\"/hr-pages/profile_hr.php\">Личный кабинет";
					}
						else echo "><a style='color:white;' href=\"auth.php\">Вход";
						}
						?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="hello">
		<div class="hello-block">
			<div class="hello-massage">
				<div class="ttl-hello">Добро пожаловать!</div>
				<div class="text-hello">Ищите новые решения для организации работы и повышения мотивированности сотрудников в своей компании? Тогда этот сервис для вас. Регистрируйтесь и покоряйте новые вершины!</div>
				<a href="auth.php"><div class="buttons">Авторизация</div></a>
				<span>или</span>
				<a href="reg.php"><div class="buttons register-butt">Регистрация</div></a>
			</div>
			<div class="hello-img">
				<img src="img/main_ph.png" alt="">
			</div>
		</div>
	</div>
	<div class="page-align">
		<div class="heading">
			<span>Что внутри?</span>
		</div>
	</div>
	<div class="features">
		<div class="features-block ">
			<div class="features-img lk"></div>
			<div class="features-ttl features-ttl-help">удобный лк</div>
			<div class="features-info">Следите за своими достижениями, повышайте уровень и продвигайтесь в рейтинге</div>
		</div>
		<div class="features-block">
			<div class="features-img achive"></div>
			<div class="features-ttl features-ttl-help">Система ачивок</div>
			<div class="features-info">Создавайте авторские ачивки и вручайте их за различные достижения</div>
		</div>
		<div class="features-block">
			<div class="features-img celen"></div>
			<div class="features-ttl">Функциональный календарь</div>
			<div class="features-info">Отмечайте интересные события и находите желающих прийти</div>
		</div>
		<div class="features-block">
			<div class="features-img note"></div>
			<div class="features-ttl">Современный Help-Desk</div>
			<div class="features-info">Создавайте задачи, назначайте награду и ждите ответа исполнителя</div>
		</div>

	</div> 
	
	<div class="page-align-last">
		<div class="heading-last"></div>
	</div>
	<div class="footer-main">
		<p>Пользуясь данным сайтом вы принимаете условия предоставления услуг и обязуетесь их не нарушать.</p>
		<p>2018</p>
	</div>
	<div id="myNav" class="overlay">
        <div class="enter-block">
        	<div class="enter-ttl">Вход</div>
        	<div class="close-btn" onclick="closeNav()">X</div>
        	<div class="enter-massage">
        		Извините, ваш аккаунт еще не подтвержден. Ожидайте ответа.
        	</div>
        	<div class="info-massage">
        		Подтвердить вашу принадлежность к указанной компании может только пользователь, зарегестрировавший ее.
        	</div>
        	<div class="error-comp">Ошиблись компанией при регистрации?</div>
        	<!---тут крч селект ------>
        	<div class="error-butt">Изменить</div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/enter.js"></script>
</body>
</html>
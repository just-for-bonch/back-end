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
			<span>Авторизация</span>
		</div>
	</div>
	<form action="/php/authorize_users.php" method="post">
	<div class="page-align">
	    <div class="auth-log">
	     	<label>E-mail:</label><br>
	    	<input type="text" class="form-control" name="login" id="e-mail" placeholder="example@example.ru">
	    <div><br>
	    <div class="auth-pass">
	     	<label>Пароль:</label><br>
	    	<input type="password" class="form-control" name="password" id="pass" placeholder="qwer1234"><br><br>
		<input type="submit" class="form-control" >	    
	    </div>
	</div>
	</form>    	
	<script src="js/jquery.min.js"></script>
    <script src="js/stepsForm.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>



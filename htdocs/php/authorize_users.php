<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку
    {
        $_SESSION['error']='Заполните все поля!';
        header('Location: error.php');
        exit;
    }
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include ("connect.php");
mysql_set_charset("utf8");//кодировка данных
$result = mysql_query("SELECT * FROM users INNER JOIN employees ON id_user=id_emp WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
    
if (empty($myrow['pass']))
    {
        //если пользователя с введенным логином не существует
        exit ("Извините, введённый вами login или пароль неверный.");
    }
        else 
            {
            //если существует, то сверяем пароли
            if ($myrow['pass']==$password) 
            {
                //если пароли совпадают, то запускаем пользователю сессию
                $_SESSION['login']=$myrow['login']; 
                $_SESSION['id_p']=$myrow['id_user'];//эти данные будет ноосить пользователь
	            $_SESSION['id_group']=$myrow['id_group'];
                if (is_null($myrow['id_company']))
                    header('Location: ../index.php?err=13');
                else
                {
                $_SESSION['id_company']=$myrow['id_company'];
                $_SESSION['img']=$myrow['src_avatar'];
                $_SESSION['imy']=$myrow['imy_emp'];
                $_SESSION['fam']=$myrow['fam_emp'];
                $_SESSION['about']=$myrow['about_emp'];
                $_SESSION['date']=$myrow['data_emp'];
                if ($_SESSION['id_group']==2)
                header('Location: ../hr-pages/profile_hr.php');
                if ($_SESSION['id_group']==1)
                header('Location: ../user-pages/profile_user.php');
                exit;
                }
            }
            else 
                {
                //если пароли не сошлись
                exit ("Извините, введённый вами login или пароль неверный.");
                }
            }
?>
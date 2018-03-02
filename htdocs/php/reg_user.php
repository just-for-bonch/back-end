<?php
session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (isset($_POST['imy'])) { $imy = $_POST['imy']; if ($imy== '') { unset($imy);} }
	if (isset($_POST['fam'])) { $fam = $_POST['fam']; if ($fam == '') { unset($fam);} }

    $about=$_POST['about'];
    $comp=$_POST['comp'];

if (empty($login) or empty($password) or empty($imy) or empty($fam))
{
    $_SESSION['error']='Заполните все поля!';
    header('Location: error.php');
    exit;
}
	

//Занесение даты в базу
$day=$_POST['sel_day'];
$month=$_POST['sel_month'];
$year=$_POST['sel_year'];
$date_birth="$year-$month-$day";

include("connect.php");

$query=mysql_query("INSERT INTO users(login,pass,id_group) VALUES('$login','$password',1)");
unset($query);

$query=mysql_query("SELECT id_user FROM users WHERE login='$login'");
$q=mysql_fetch_array($query, MYSQL_NUM);
$_SESSION['id_p']=$q[0];
unset($query);

$id_p=$_SESSION['id_p'];
$query=mysql_query("INSERT INTO requests(id_user_req,id_comp_req) VALUES ('$id_p','$comp')");
unset($query);

$query=mysql_query("INSERT INTO employees(id_emp,imy_emp,fam_emp,data_emp,about_emp) VALUES ('$id_p','$imy','$fam','$date_birth','$about')");
unset($query);

if(isset($_FILES['filename']) && $_FILES['filename']['error'] == 0)
{
    // Директория для закачивания
    $dir = '/avatars/'; 
    // Допустимые MIME-типы
    $arrType = array('image/jpeg','image/gif','image/png',);
    // Допустимые расширения
    $arrExt = array('png', 'jpg', 'jpeg', 'gif');
    // Получаем расширение файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    // 1. Проверка MIME-тип файла и расширение
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $type = $finfo->file($_FILES['filename']['tmp_name']);
    if (in_array($type, $arrType) && in_array($ext, $arrExt)){
        // 2. Генерирование уникального имени и пути файла
        $filepath = $dir.$id_p.'.'.$ext;
        if(move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$filepath)){
            // Если файл загружен, то можем вывести его на экран
            $query=mysql_query("UPDATE employees SET src_avatar='$filepath' WHERE id_emp=$id_p");        
        }
    }
}
else 	{
            $query=mysql_query("UPDATE employees SET src_avatar='/avatars/no_avatar.jpg' WHERE id_emp=$id_p");
        }
$_SESSION = array();
session_destroy();
print "<script language='Javascript'>function reload() {location = \"../index.php\"}; setTimeout('reload()', 100);</script> 
<p>Сообщение отправлено! Спасибо!</p>";
?>
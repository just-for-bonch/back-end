<?php
session_start();

$name_r=$_POST['name_ach'];
$rew_r=$_POST['reward'];

$name_r = stripslashes($name_r);
$name_r = htmlspecialchars($name_r);
$rew_r = stripslashes($rew_r);
$rew_r = htmlspecialchars($rew_r);
    //удаляем лишние пробелы
$rew_r = trim($rew_r);
$name_r = trim($name_r);

$compp=$_SESSION['id_company'];

include("connect.php");

unset($query);
$query=mysql_query("INSERT INTO all_achievements(id_comp_ach, name_ach, exp_ach) VALUES ('$compp','$name_r','$rew_r')");
unset($query);
$query=mysql_query("SELECT id_ach FROM all_achievements WHERE ((id_comp_ach='$compp')AND(name_ach='$name_r'))");
$q=mysql_fetch_array($query,MYSQL_NUM);
$id_achh=$q[0];

if(isset($_FILES['filename']) && $_FILES['filename']['error'] == 0)
{
    // Директория для закачивания
    $dir = '/ach/'; 
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
            $query=mysql_query("UPDATE all_achievements SET src_img_ach='$filepath' WHERE id_ach='$id_achh'");        
        }
    }
}
else 	{
            $query=mysql_query("UPDATE all_achievements SET src_img_ach='/ach/no_ach.png' WHERE id_ach='$id_achh'");
        }
header("Location: ../hr-pages/profile_hr.php");
?>
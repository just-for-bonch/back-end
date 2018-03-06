<?php 
session_start();
include("connect.php");
$id_userr=$_POST['id_us'];

$query=mysql_query("SELECT id_comp_req FROM requests WHERE id_user_req='$id_userr'");
$id_com=mysql_fetch_array($query,MYSQL_NUM);
unset($query);

$query=mysql_query("DELETE FROM requests WHERE id_user_req='$id_userr'");
unset($query);

$query=mysql_query("UPDATE users SET id_company='".$id_com[0]."' WHERE id_user='$id_userr'");
unset($query);

$query=mysql_query("UPDATE users SET id_group=2 WHERE id_user='$id_userr'");
unset($query);
header("location: ../hr-pages/unconfirmed.php");
?>
<?php
session_start();
$id_userr=$_GET['id'];
include("connect.php");

$query=mysql_query("SELECT id_comp_req FROM requests WHERE id_user_req='$id_userr'");
$id_com=mysql_fetch_array($query,MYSQL_NUM);
unset($query);

$query=mysql_query("DELETE FROM requests WHERE id_user_req='$id_userr'");
unset($query);

$query=mysql_query("UPDATE users SET id_company='".$id_com[0]."' WHERE id_user='$id_userr'");
unset($query);

$query=mysql_query("INSERT INTO level(id_user_lvl,total_exp) VALUES ('$id_userr', 0) ");
unset($query);

header("Location: index.php");
?>
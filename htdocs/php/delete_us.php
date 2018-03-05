<?php
session_start();
include("connect.php");
$id_us=$_POST['id_us'];
$query=mysql_query("UPDATE requests SET id_comp_req=0 WHERE id_user_req='$id_us'");
header("location: ../hr-pages/unconfirmed.php");
?>
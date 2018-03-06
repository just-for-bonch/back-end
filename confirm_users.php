<?php
session_start();
if ((isset($_SESSION['id_p']))&&($_SESSION['id_group']==2))
	{
		include("connect.php");
		$company=$_SESSION['id_company'];
		$query=mysql_query("SELECT * FROM requests INNER JOIN employees ON id_user_req=id_emp WHERE id_comp_req='$company'");
				echo "<table>";
				while ($guys=mysql_fetch_array($query))
				{
					echo "<tr><td>";
					echo $guys['fam_emp']." ".$guys['imy_emp'];
					echo "</td><td><form action='confirm.php' method='get'><input type='text' name='id' value='".$guys['id_user_req']."' hidden><input type='submit'></form></td></tr>";
				}				echo "</table>";
	}
else header("Location: index.php?error=1");
?>
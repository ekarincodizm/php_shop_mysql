<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sql1 = "DELETE FROM register WHERE user = '$id' ";
				mysql_query ( $sql1, $conn );
				echo "<center>Delete Success !!!!";
													echo "<script type='text/javascript'>";
													echo "window.location='testadmin.php'";
													echo "</script>";
?>


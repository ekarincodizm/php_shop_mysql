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
				echo "<h1><a href='admin.php'>กลับหน้าหลัก</a></h1></center>";
?>
<? session_start();?>
<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sql1 = "DELETE FROM preorder WHERE  id= '$id'  ";
				mysql_query ( $sql1, $conn );
													echo "<script type='text/javascript'>";
													echo "window.location='preorder.php'";
													echo "</script>";
?>
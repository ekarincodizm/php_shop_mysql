<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
				mysql_query("SET NAME UTF-8");

									
										$sql = "select * from  register ";
										$re = mysql_query($sql,$conn);
										
												echo "<table border='3'><tr>";
												echo "<td>user</td>";
												echo "<td>password</td>";
												echo "<td>firsname</td>";
												echo "<td>lastname</td>";
												echo "<td>address</td>";
												echo "<td>phone</td>";
												echo "<td>email</td>";
												echo "<td>status</td>";
												echo "<td>แก้ไขข้อมูล</td>";
												echo "<td>ข้อมูล</td></tr>";
												echo "<tr>";
										while ($result = mysql_fetch_array ($re)){
												
												echo "<td>".$result['user']."</td>";
												echo "<td>".$result['password']."</td>";
												echo "<td>".$result['firstname']."</td>";
												echo "<td>".$result['lastname']."</td>";
												echo "<td>".$result['address']."</td>";
												echo "<td>".$result['phone']."</td>";
												echo "<td>".$result['email']."</td>";
												echo "<td>".$result['status']."</td>";
												echo "<td align='center'><a href ='edit.php?id=".$result['user']." '>[ แก้ไขข้อมูล ]</a></td>";
												echo "<td align='center'><a href ='delete.php?id=".$result['user']." '>[ ลบข้อมูล ]</a></td></tr>";

										}                        
										
										echo "</table>";

										
?>
<a href="index.php">กลับไปหน้าเเรก</a>
										
						
			
			


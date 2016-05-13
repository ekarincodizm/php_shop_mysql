<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sqledit = "select * from  register  where user = '$id'  ";
				//echo "$id";
				$resultedit = mysql_query($sqledit,$conn);
				$result = mysql_fetch_array ($resultedit);
				//echo $result ['address'];

?>
<link rel="stylesheet" href="css/testadmin.css">
<h1><span class="blue">&lt;</span>Admin<span class="blue">&gt;</span> <span class="yellow">จัดการฐานข้อมูลครับ</pan></h1>
<h2><a href="testadmin.php">สมาชิก</a>&nbsp;&nbsp;<a href="manager.php">รายการสั่งซื้อ</a>&nbsp;&nbsp;<a href="pro.php">คลังสินค้า</a>&nbsp;&nbsp;<a href="index.php">กลับสู่หน้าหลัก</a></h2>
<?
echo '<table class="container">';
			echo  '<thead>';
			echo '<tr>';
			echo '<th><h1>user</h1></th>';
			echo '<th><h1>password</h1></th>';
			echo '<th><h1>firstname</h1></th>';
			echo '<th><h1>lastname</h1></th>';
			echo '<th><h1>phone</h1></th>';
			echo '<th><h1>email</h1></th>';
			echo '<th><h1>status</h1></th>';
			echo '<th><h1>แก้ไขข้อมูล</h1></th>';
			echo '<th><h1>ลบข้อมูล</h1></th>';
			echo '</tr>';
			echo '</thead>';
			echo '</thead>';
			?>
			<form method="post" action="">
				
			
		<tr>
			<td><input type="text" name="username" value="<? echo $result['user'];?>"></td>
			<td><input type="password" name="password" value="<?echo $result ['password']; ?>"></td>
			<td><input type="text" name="firstname" value="<?echo $result ['firstname']; ?>"></td>
			<td><input type="text" name="lastname" value="<?echo $result ['lastname']; ?>"></td>
			<td><textarea name="address" rows="4" cols="14" ><?echo $result ['address']; ?></textarea></td>
			<td><input type="tel" name="phone" value="<?echo $result ['phone']; ?>"></td>
			<td><input type="email" name="email" value="<?echo $result ['email']; ?>"></td>
			<td><input type="reset" value="ลบข้อมูล"></td>
			<td><input type="submit" value="แก้ไขข้อมูล"name="sub"></td>
		</tr>
		
	</tbody>
</table>
</form>

<?
						 $username = $_POST['username'];
						 $password = $_POST['password'];
						 $firstname = $_POST['firstname'];
						 $lastname = $_POST['lastname'];
						 $address = $_POST['address'];
						 $phone = $_POST['phone'];
						 $email = $_POST['email'];
						 $sub = $_POST['sub'];

						  if ($sub!=null){
						  
			$sqlUpdate = "Update register  set user='$username', password='$password',firstname='$firstname', lastname = '$lastname', address = '$address', phone ='$phone',email='$email' WHERE user = '$id' ";
			$resultUpdate = mysql_query($sqlUpdate);
						if ($resultUpdate){
													echo "<script type='text/javascript'>";
													echo "window.location='testadmin.php'";
													echo "</script>";
						}
						else echo "error insert";
						  
						  }
				
				
				?>



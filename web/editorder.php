<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sqledit = "select * from  orders  where orders = '$id'  ";
				//echo "$id";
				$resultedit = mysql_query($sqledit,$conn);
				$result = mysql_fetch_array ($resultedit);
				//echo $result ['address'];

?>
	<link rel="stylesheet" href="css/testadmin.css">
<h1><span class="blue">&lt;</span>Admin<span class="blue">&gt;</span> <span class="yellow">จัดการฐานข้อมูลครับ</pan></h1>
<h2><a href="testadmin.php">สมาชิก</a>&nbsp;&nbsp;<a href="manager.php">รายการสั่งซื้อ</a>&nbsp;&nbsp;<a href="pro.php">คลังสินค้า</a>&nbsp;&nbsp;<a href="index.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;<a href="showtotal.php">เเสดงรายการสั่งซื้อทั้งหมด</a></h2>
<?
			echo '<table class="container">';
			echo  '<thead>';
			echo '<tr>';
			echo '<th><h1>orders(PK)</h1></th>';
			echo '<th><h1>nameorder</h1></th>';
			echo '<th><h1>price</h1></th>';
			
		
			
			echo '<th><h1>แก้ไขข้อมูล</h1></th>';
			echo '<th><h1>ลบข้อมูล</h1></th>';
			echo '</tr>';
			echo '</thead>';
			echo '</thead>';
			?>
			<form method="post" action="">
				
			
		<tr>
			<td><input type="text" name="orders" value="<? echo $result['orders'];?>"></td>
			<td><input type="text" name="text1" value="<?echo $result ['nameorder']; ?>"></td>
			<td><input type="number" name="text2" value="<?echo $result ['price']; ?>"></td>
			
			
			<td><input type="reset" value="ลบข้อมูล"></td>
			<td><input type="submit" value="แก้ไขข้อมูล"name="sub"></td>
		</tr>
		
	</tbody>
</table>
</form>

<?
						 $id = $_POST['orders'];
						 $text1 = $_POST['text1'];
						 $text2 = $_POST['text2'];
						 //$text3 = $_POST['text3'];
						// $text4 = $_POST['text4'];
						
						 $sub = $_POST['sub'];

						  if ($sub!=null){
						  
			$sqlUpdate = "Update orders  set nameorder='$text1', price = '$text2'  WHERE orders = '$id' ";
			$resultUpdate = mysql_query($sqlUpdate);
						if ($resultUpdate){
													echo "<script type='text/javascript'>";
													echo "window.location='pro.php'";
													echo "</script>";
						}
						else echo "error insert";
						  
						  }
				
				
				?>



<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
				mysql_query("SET NAME UTF-8");

					$sql = "select * from  orders ";
					$re = mysql_query($sql,$conn);


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
			//echo '<th><h1>ใส่ข้อมูล</h1></th>';
		
			
			echo '<th><h1>แก้ไขข้อมูล</h1></th>';
			echo '<th><h1>ลบข้อมูล</h1></th>';
			echo '</tr>';
			echo '</thead>';
			echo '</thead>';
	
	while ($result = mysql_fetch_array ($re)){
		echo '<tr>';
			echo "<td>".$result['orders']."</td>";
			echo "<td>".$result['nameorder']."</td>";
			echo "<td>".$result['price']."</td>";
		    
			
			//echo "<td ><a href ='insertorder.php?id=".$result['orders']." '>ใส่ข้อมูล</a></td>";
			echo "<td ><a href ='editorder.php?id=".$result['orders']." '>แก้ไข</a></td>";
			echo "<td ><a href ='deleteorder.php?id=".$result['orders']." '>ลบข้อมูล</a></td>";
			echo '</tr>';

	}

  echo '</table>';
?>

					<center><a href="insertorder.php"><font size="" color="ffffff">เพิ่มข้อมูลใหม่นี้</font></a><center>


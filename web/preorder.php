<?session_start();?>
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
				
			  //$sql = " select * from register  , preorder  , order  where register.user = '$loginuser' and register.user = preorder.user and  preorder.order= order.order ";
			  $sql = "SELECT * FROM `orders`, `preorder`, register WHERE  register.`user` = '$loginuser' and register.`user` = `preorder`.`user`and`preorder`.`orders` = `orders`.`orders`";
			  $re = mysql_query($sql);
			 // $res = mysql_fetch_array($re);
		     // echo $res['nameorder'];
			 		/*if ($_SESSION['logoutuser']==null && $_SESSION['loginuser']==null) {
		        "<script type='text/javascript'>";
			    "window.location='index1.php'";
		       "</script>";
				 }
				 else if  ($_SESSION['logoutuser']==null && $_SESSION['loginuser']){
				  "<script type='text/javascript'>";
				   "window.location='index2.php'";
				  "</script>";
				}
				 else if  ($_SESSION['logoutuser']!=null || $_SESSION['loginuser']==null){
				  "<script type='text/javascript'>";
				   "window.location='index1.php'";
				  "</script>";
				}*/
				
				/*echo $_SESSION['$order4'] ;
				echo $_SESSION['resultstatus4'];
			 	echo $_SESSION['$order5'] ;
				echo $_SESSION['resultstatus5'];*/

?>
<form method="post" action="">
<meta charset="utf-8">

<link rel="stylesheet" href="css/preorder.css">
<h1><strong><em><u>รายการสินค้าทั้งหมดของคุณ</u></em></strong></h1>
<table>
	<thead>
	<tr>
		<th colspan="5">รายการที่คุณ&nbsp;<? echo $loginuser;?>&nbsp;สั่งครับ</th>
	</tr>

	<?
	echo "<tr>";
		echo "<th>สินค้า</th>";
		echo "<th>จำนวน</th>";
		echo "<th>ราคาทั้งหมด</th>";
		//echo "<th>แก้ไขข้อมูล</th>";
		echo "<th>ลบรายการ</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
				while ($res = mysql_fetch_array($re)){
				
				echo "<tr>";
				echo "<th>".$res['nameorder']."</th>";
				echo "<th>".$res['statusorder']."</th>";
				echo "<th>".$res['money']."</th>";
				//echo "<th><strong><em><a href=''><font color='ffffff'>แก้ไขข้อมูล</font></a></em></strong></th>";
				echo "<th><strong><em><a href ='deleteorder2.php?id=".$res['id']."'><font  color='ffffff'>ลบรายการ</font></a></em></strong></th>";
				echo "</tr>";
	            echo "</thead>";
				
				}
	
	echo "</tbody>";
echo "</table>";
?>






<p><a href="order2.php"><font size="ffffff" color="">แก้ไขรายการ</font></a></p>
<p><input type="submit" name ="ok" value="ยืนยันการทำรายการ"></a></p>
</form>

<p><a class="button-3d" href="#" target="_blank">ใบเสร็จ</a></p>
<a href=" #" onclick=" window.print()" >Print Page</a>
<button onclick=" javascript:window.print()" />






<?
		$ok = $_POST['ok'];

		

		if ($ok!=null){
									
											
					
				                    unset ($_SESSION['$order1']);
					                unset ($_SESSION['$order2']);
						            unset ($_SESSION['$order3']);
							        unset ($_SESSION['$order4']);
							    	unset ($_SESSION['$order5']);
									unset ($_SESSION['$order6']);
									unset ($_SESSION['resultstatus1']);
									unset ($_SESSION['resultstatus2']);
									unset ($_SESSION['resultstatus3']);
									unset ($_SESSION['resultstatus4']);
									unset ($_SESSION['resultstatus5']);
									unset ($_SESSION['resultstatus6']);
								   
									
									
									echo "<script type='text/javascript'>";
									echo "window.location='order2.php'";
									echo "</script>";
									

									
				
		}

									

?>
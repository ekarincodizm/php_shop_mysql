<?  session_start(); ?>
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sqledit = "select * from  register  where user = '$loginuser'  ";
				//echo "$id";
				$resultedit = mysql_query($sqledit,$conn);
				$result = mysql_fetch_array ($resultedit);
				//echo $result ['address'];

?>
				<meta charset="utf-8">
				<form method="post" action="#">
					<link rel="stylesheet" href="css/register.css">
<meta charset="utf-8">
<body>
<div class="sign-up-main-content">
				<form id="sign-up" name="sign-up" action="#" method="post">
					<input type="hidden" name="user_type" value="seeker">
					
<div class="input-row"><label for="zip">user :</label> <input type="text" id="passw" name="username" value="<?echo $result ['user'];?>" required="required"></div>
					
<div class="input-row"><label for="passw">Password :</label> <input type="password" id="passw" name="password" value="<?echo $result ['password'];?>" title="Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6" required="required"></div>
					<label class="helper-text"><em>(Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6)</em></label>

					<div class="input-row"><label for="passw">Repeat Password :</label> <input type="password" id="passw" name="Repeatpassword" value="<?echo $result ['password'];?>" title="Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6" required="required"></div>
					
<div class="input-row"><label for="fname">First Name :</label> <input type="text" id="fname" name="firstname" value="<?echo $result ['firstname'];?>" required="required"></div>
					
<div class="input-row"><label for="lname">Last Name :</label> <input type="text" id="lname" name="lastname" value="<?echo $result ['lastname'];?>" required="required"></div>
					

			
	<div class="input-row"><label for="zip">Address : </label><textarea name="address" rows="3" cols="50"><?echo $result ['address'];?></textarea></div>		
	<div class="input-row"><label for="lname">Telphone :</label> <input type="tel" id="lname" name="phone" value="<?echo $result ['phone'];?>" required="required"></div>	
		
		<div class="input-row"><label for="email_address">Email :</label> <input type="email" id="email_address" name="email" value="<?echo $result ['email'];?>" placeholder="name@example.com" title="name@example.com" required="required" autofocus="autofocus"></div>

		




	<center> กรุณากรอกข้อมูลตามความเป็นจริงเพื่อง่ายต่อการใช้บริการของท่านลูกค้า <br> 
	               เเละสามรถใช้ในการรับสิทธิ์พิเศษอีกมากมาย
	  </center>

				
					
<div class="input-row buttons">
<div><span class="not-on-mobile">&nbsp;<a href="index2.php" class="silverbutton">Cancel</a></span> &nbsp; <label for="Create_Account" class="not-on-mobile">&nbsp;</label> <input type="submit" id="Create_Account" name="Create" value="Create Account" class="greenbutton"></div>
</div>
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

						  if ($Create!=null){
						  
			$sqlUpdate = "Update register  set user='$username', password='$password',firstname='$firstname', lastname = '$lastname', address = '$address', phone ='$phone',email='$email' WHERE user = '$loginuser' ";
			$resultUpdate = mysql_query($sqlUpdate);
						if ($resultUpdate){
													echo "<script type='text/javascript'>";
													echo "window.location='insert.php'";
													echo "</script>";
						}
						else						echo "<script type='text/javascript'>";
													echo "window.location='inserterror.php'";
													echo "</script>";
						  
						  }
				
				
				?>
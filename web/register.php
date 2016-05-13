<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
				mysql_query("SET NAME UTF-8");

				if ($logout!=null && $_SESSION['loginuser']!=null){
				session_destroy();
				}
				else if ($logout==null && $_SESSION['loginuser']) 
		        "<script type='text/javascript'>";
			    "window.location='index2.php'";
		       "</script>";

?>

<link rel="stylesheet" href="css/register.css">
<meta charset="utf-8">
<body>
<div class="sign-up-main-content">
				<form id="sign-up" name="sign-up" action="#" method="post">
					<input type="hidden" name="user_type" value="seeker">
					
<div class="input-row"><label for="zip">user :</label> <input type="text" id="passw" name="username" value="" required="required"></div>
					
<div class="input-row"><label for="passw">Password :</label> <input type="password" id="passw" name="password" value="" title="Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6" required="required"></div>
					<label class="helper-text"><em>(Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6)</em></label>

					<div class="input-row"><label for="passw">Repeat Password :</label> <input type="password" id="passw" name="Repeatpassword" value="" title="Valid passwords have at least one number, one lowercase, one uppercase letter and minimum length 6" required="required"></div>
					
<div class="input-row"><label for="fname">First Name :</label> <input type="text" id="fname" name="firstname" value="" required="required"></div>
					
<div class="input-row"><label for="lname">Last Name :</label> <input type="text" id="lname" name="lastname" value="" required="required"></div>
					

			
	<div class="input-row"><label for="zip">Address :</label><textarea name="address" rows="3" cols="50"></textarea></div>		
	<div class="input-row"><label for="lname">Telphone :</label> <input type="tel" id="lname" name="tel" value="" required="required"></div>	
		
		<div class="input-row"><label for="email_address">Email :</label> <input type="email" id="email_address" name="email" value="" placeholder="name@example.com" title="name@example.com" required="required" autofocus="autofocus"></div>

		




	<center> กรุณากรอกข้อมูลตามความเป็นจริงเพื่อง่ายต่อการใช้บริการของท่านลูกค้า <br> 
	               เเละสามรถใช้ในการรับสิทธิ์พิเศษอีกมากมาย
	  </center>

				
					
<div class="input-row buttons">
<div><span class="not-on-mobile">&nbsp;<a href="index.php" class="silverbutton">Cancel</a></span> &nbsp; <label for="Create_Account" class="not-on-mobile">&nbsp;</label> <input type="submit" id="Create_Account" name="Create" value="Create Account" class="greenbutton"></div>
</div>
				</form>

				<?
					     $username = $_POST['username'];
						 $password = $_POST['password'];
						 $firstname = $_POST['firstname'];
						 $lastname = $_POST['lastname'];
						 $address = $_POST['address'];
						 $tel = $_POST['tel'];
						 $email = $_POST['email'];
						 $Create = $_POST['Create'];

						// echo "$username $password  $firstname  $lastname  $address $tel $email" ;
					if ($Create!=null){
							
							
							$sql = "insert into register values ( '$username' ,'$password', '$firstname', '$lastname', '$address' , '$tel' ,'$email','user')";
							$result = mysql_query($sql,$conn);
							mysql_query("SET NAME UTF-8");
							 if ($result ) {
													 echo "<script type='text/javascript'>";
													echo "window.location='thank.php'";
													echo "</script>";
							 
							 }
					
					
					
					
					
					}

				
				
				?>


</div>  
</body> 
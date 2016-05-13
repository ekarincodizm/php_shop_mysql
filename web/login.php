<?
		session_start ();
?>
<link rel="stylesheet" href="css/login.css">
<?
				//session_start ();
				//session_register("loginuser");
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

		

?>
<meta charset ="utf-8">
<div class="login">
	<h1>เข้าสู่ระบบ</h1>
    <form method="post" action="#">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <input type="submit" name ="login"  value ="เข้าสู่ระบบ"class="btn btn-primary btn-block btn-large">
		  <a href="index.php"><font size="3" color="ffffff">กลับไปหน้าเเรก</font></a>
    </form>

				<?				
				
							 $username = $_POST['username'];
							 $password = $_POST['password'];
							 $login = $_POST['login'];

									if($login!=null){
										$sql = "select * from register where user ='$username' and password = '$password' ";
										
										$result = mysql_query($sql,$conn);
										$relogin = mysql_fetch_array($result);
											if ($relogin && $relogin['status']=='user'){
													//echo "welcome to user";
													
													$_SESSION['loginuser'] = $username;
													$_SESSION['status']=$relogin['status'];
													
													echo "<script type='text/javascript'>";
													echo "window.location='index2.php'";
													echo "</script>";
											}
											else if ($relogin && $relogin['status']=='admin'){
													//echo "welcom to admin";
													$_SESSION['status']=$relogin['status'];
													echo "<script type='text/javascript'>";
													echo "window.location='testadmin.php'";
													echo "</script>";
													
											}
											else 
													echo "<script type='text/javascript'>";
													echo "window.location='error.php'";
													echo "</script>";
 									
									}

				?>
</div>
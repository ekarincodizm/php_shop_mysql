<?session_start ();?>
	  <?
				
				//session_register("loginuser");
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

			
?>
<!DOCTYPE">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/order.css">
<title>index</title>




<style type="text/css">
body {
	  
}

#head {
	height: 376px;
	width: 980px;
	float:center;
	
   
}

.menu-side-menu-container {
    width: 190px;
	float:left;
}

.menu-side-menu-container ul {
	margin: 0px;
	padding: 0px;
}

ul#menu-side-menu { 
	background: #ebebeb; 
}
	
.menu-side-menu-container li { 
	list-style: none; 
}

ul#menu-side-menu li {
	border-bottom: #fff solid;
	border-top: #fff solid;
	border-width: 1px;
}

.menu-side-menu-container a {
	color: #333;
	cursor: pointer;
	display:block;
	height:100px;/* chang size container left box*/
	line-height: 25px;
	text-indent: 10px;					
	text-decoration:none;
	text-align:center;
	width:100%;
}

.menu-side-menu-container a:active{ 
	text-decoration:underline;
	color: #FFFFFF;
}


.menu-side-menu-container a:hover{ 
	text-decoration:underline;
	color: #FFFFFF;
}

.menu-side-menu-container li:hover {
	background: #5BBBE4; /*chang color for left side*/
	position: relative;
	color: #FFFFFF !important;
}

ul.sub-menu {
	display: none; 
}

h1 {
	font-family: 'Open Sans Condensed', sans-serif;
	font-size:20pt;
	/*text-align:center;*/
		
}

</style>
   
	
	
	<body>
		
                
<div id="container">
	<ul id="menu">
	<li><a href="index.php">หน้าเเรก</a>
		
	</li>
	<li><a href="#">สินค้า</a>
		<ul>
			<li><a href="recomend.php">สินค้าเเนะนำ</a></li>
			<li><a href="order.php">ขั้นตอนการสั่งซื้อ</a></li>
			
		</ul>
	</li>
	<li><a href="#">ขั้นตอนการชำระ</a>
		<ul>
			<li><a href="trnsferdetail.php">การโอนเงิน</a></li>
			<li><a href="order.php">การสั่งซื้อ</a></li>
			
		</ul>
	</li>
	<li><a href="#">ติดต่อเรา</a>
		<ul>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Telphone and E-mail</a></li>
		</ul>
	</li>
	<li><a href="register.php">สมัครสมาชิก</a></li>
	<li><a href="login.php">เข้าสู่ระบบ</a></li>

</ul>
</div>
			




			
</head>
   <div align="center">
<body 
<div id="head">
  <p><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img/images/images/images/headerrollover_01.png',1)"><img src="img/images/images/images/header_01.png" width="950" height="376" id="Image1" /></a><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','img/images/images/images/images/menu_02.png',1)">
  </div>
























<form method="post" action="check.php">
	

  <ul class="catCardList">
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/pink-cupcake-eraser-from-Japan-by-Iwako-160130-1.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>Almond Butterscotch Coffee</h3>
<div class="startingPrice">Prices Starting At <span>$32.00</span></div>
<p>เค้กรสกาแฟหอมกรุ่น Top ด้วย Almond กับซอส Butterscotch หวานหอม</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order1"></div>
</div>
</div>
</li>
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/cupcake-frosting-x.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>Blueberry Surprise</h3>
<div class="startingPrice">Prices Starting At <span>$29.00</span></div>
<p>ครีมรสบลูเบอร์รี่กับเค้กสอดไส้ซอสบลูเบอร์รี่</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order2"></div>
</div>
</div>
</li>
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/asdw.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>Cookies & Cream</h3>
<div class="startingPrice">Prices Starting At <span>$44.00</span></div>
<p>เค้กช็อกโกแลตนม แต่งหน้า คุกกี้ครีม (Kids' favorite!!)</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order3"></div>
</div>
</div>
</li>
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/sdasd.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>Italian Mocha </h3>
<div class="startingPrice">Prices Starting At <span>$44.00</span></div>
<p>อีกเมนูสำหรับผู้ใหญ่ด้วยเค้กรสกาแฟ ครีมผสมกาแฟบดและโรยหน้าด้วยช็อกโกแล็ต
</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order4"></div>
</div>
</div>
</li>
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/cup.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>Triple chocolate</h3>
<div class="startingPrice">Prices Starting At <span>$169.00</span></div>
<p>เค้กช็อกโกแลตเข้มข้น แต่งหน้าด้วยช็อกโกแลตครีมชีส และตกแต่งด้วยช็อกโกแลตชิป</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order5"></div>
</div>
</div>
</li>
<li class="catCardList">
<div class="catCard"><a href="#"><img src="img/php pic/Raspberry-Cupcakes.jpg" width="221" height="200" border="0" alt=""></a>
<div class="lowerCatCard">
<h3>White Choc Macadamia</h3>
<div class="startingPrice">Prices Starting At <span>$174.00</span></div>
<p>เค้กวนิลามอลท์หอมๆกับไวท์ช็อกโกแล็ตและถั่วแม็คคาดาเมีย</p>
<h4>Best Sale :</h4>
<ul>
<li>*****</li>
<li>จำนวนชิ้น</li>
</ul>
<div id="catCardButton" class="button">จำนวนชิ้น :<input type="number" name="order6"></div>
</div>
</div>
</li>
</ul>
<input type="submit" value="ต้องการซื้อ"name="sub"><input type="reset" value="ลบข้อมูลออก">
</form>

				<?
					$sub=$_POST['sub'];
					if ($sub!=null){
						if ($_SESSION['loginuser']==null){
													echo "<script type='text/javascript'>";
													echo "window.location='check.php'";
													echo "</script>";
						
						}
						else echo "<script type='text/javascript'>";
													echo "window.location='preorder.php'";
													echo "</script>";
				}
				
				?>























































				
			
</body>
</html>

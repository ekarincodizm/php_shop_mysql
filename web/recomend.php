<?session_start();?>

<?
			


?>
<!DOCTYPE">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/menu.css">
<title>index2</title>




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
	height:10px;/* chang size container left box*/
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
  <p><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img/images/images/images/headerrollover_01.png',1)"><img src="img/images/images/images/header_01.png" width="980" height="376" id="Image1" /></a><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','img/images/images/images/images/menu_02.png',1)">
  </div>

			




			













<div id="pricing">
	<div class="price_card alpha">
		<div class="header">
			<span class="price">$29</span>
			<span class="name">Almond Butterscotch Coffee</span>
		</div>
		<ul class="features">
			<li>สามารถสั่งซื้อ</li>
			<li>สั่งซื้อสินค้ากับเราได้ที่นี่เลย</li>
		</ul>
		<button>Add to cart</button>
		<span class="tip">* Great for beginners!</span>
	</div>
	<div class="price_card bravo">
		<div class="header">
			<span class="price">$29</span>
			<span class="name">Blueberry Surprise</span>
		</div>
		<ul class="features">
			<li>สามารถสั่งซื้อ</li>
				<li>สั่งซื้อสินค้ากับเราได้ที่นี่เลย</li>
			<li>สินค้าที่น่าสนใจ</li>
		</ul>
		<button>Add to cart</button>
		<span class="tip">* Most popular!</span>
	</div>
	<div class="price_card charlie">
		<div class="header">
			<span class="price">$44</span>
			<span class="name">Cookies & Cream</span>
		</div>
		<ul class="features">
			<li>สามารถสั่งซื้อ</li>
			<li>สั่งซื้อสินค้ากับเราได้ที่นี่เลย</li>
			<li>สินค้าที่น่าสนใจ</li>
			<li>สำหรับคนมีคู่</li>
		</ul>
		
		<button > Add to cart</button></a>
	</div>
</div>

<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Indie+Flower);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
body{
	background-color: rgb(237, 237, 237);
}

#pricing{
	width: 989px;
	margin: 100px auto;
	font-family: 'Open Sans', Helvetica;
}

.price_card{
	width: 300px;
	background: rgb(255, 255, 255);
	display: inline-table;
	top: 0;
}
.price_card:not(:last-child){
	margin-right: 40px;
}
.header{
	color: rgb(255, 255, 255);
}
.alpha .header{
	background: rgb(245, 166, 35);
}
.bravo .header{
	background: rgb(246, 77, 77);
}
.charlie .header{
	background: rgb(48, 219, 181);
}
.price{
	width: 100%;
	font-size: 60px;
	font-weight: 300;
	display: block;
	text-align: center;
	padding: 30px 0 10px;
}
.name{
	width: 100%;
	font-size: 15px;
	font-weight: 700;
	display: block;
	text-align: center;
	padding: 0 0 30px;
}
.features{
	list-style: none;
	text-align: center;
	color: rgb(138, 138, 138);
	margin: 0;
	padding: 0;
}
.features li{
	margin: 0 35px;
	padding: 20px 15px;
	width: 200px;
}
.features li:not(:last-child){
	border: 1px solid rgb(242, 242, 242);
	border-top: 0;
	border-left: 0;
	border-right: 0;
}
button{
	color: rgb(255, 255, 255);
	border: 0;
	border-radius: 5px;
	height: 40px;
	width: 200px;
	display: block;
	font-weight: 700;
	font-size: 15px;
	text-transform: uppercase;
	margin: 20px auto 35px;
}
.alpha button{
	background: rgb(245, 166, 35);
}
.bravo button{
	background: rgb(246, 77, 77);
}
.charlie button{
	background: rgb(48, 219, 181);
}
.tip{
	font-family: 'Indie Flower';
	position: absolute;
	color: rgb(117, 117, 117);
	margin: 10px 5px;
}
</style>


<?
		session_start();
?>

<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
		
		$loginuser=$_SESSION['loginuser'];
		$sql = "select * from register where user ='$loginuser' ";
		$result = mysql_query($sql,$conn);
		$relogin = mysql_fetch_array($result);
		

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
	<li><a href="index2.php">หน้าเเรก</a>
		
	</li>
	<li><a href="#">สินค้า</a>
		<ul>
			<li><a href="recomend2.php">สินค้าเเนะนำ</a></li>
			<li><a href="order2.php">ขั้นตอนการสั่งซื้อ</a></li>
			
		</ul>
	</li>
	<li><a href="#">ขั้นตอนการชำระ</a>
		<ul>
			<li><a href="tr2.php">การโอนเงิน</a></li>
			<li><a href="order2.php">การสั่งซื้อ</a></li>
			
		</ul>
	</li>
	<li><a href="#">ติดต่อเรา</a>
		<ul>
				<li><a href="https://www.facebook.com/tak.pangwongtong">Facebook</a></li>
			<li><a href="https://twitter.com/RamezSlam">Twitter</a></li>
		</ul>
	</li>
	
	<li><a href="#">ชื่อผู้ใช้ในระบบ : &nbsp;&nbsp;&nbsp;&nbsp;<? echo $_SESSION['loginuser'] ;?></a>
		<ul>
				<li><a href="editprofile.php">แก้ไขข้อมูล</a></li>
		</ul>
	</li>
	<li><a href="logout.php?logout='1'">ออกจากระบบ</a></li>
	

</ul>
</div>
</head>
   <div align="center">
<body 
<div id="head">
  <p><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img/images/images/images/headerrollover_01.png',1)"><img src="img/images/images/images/header_01.png" width="980" height="376" id="Image1" /></a><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','img/images/images/images/images/menu_02.png',1)">
  </div>








 <font size="" color="ffffff">Sweet me a day - Homemade คัพเค้ก เค้ก แนวใหม่ เก๋ไก๋ ไม่ซ้ำใคร ราคาไม่แพง คัดสรรวัตถุดิบชั้นดี เพื่อให้ได้เค้ก อร่อย ใหม่ สด ทุกวันค่ะ สั่งซื้อได้ที่ Tel & Line 083-8442121 หรือ Inbox เข้ามาที่ Facebook Fanpage: Sweet me a day

Sweet me a day ขาย รับสั่งทำ คัพเค้กเก๋ๆ หรือ สวยหรู ไม่ซ้ำใคร รับรองความอร่อย และน่ารัก ไม่ว่าจะเป็น คัพเค้กวันเกิด (คัพเค้กในรูปแบบที่ลูกค้าต้องการค่ะ) คัพเค้กงานแต่ง คัพเค้กในโอกาสวันสำคัญ วันพิเศษต่างๆ งานเลี้ยงฉลองต่างๆ  หรือจะสั่งเพื่อเป็นของขวัญสำหรับคนที่เรารัก หรือ จะเป็นร้านกาแฟที่มองหาคัพเค้กน่ารัก อร่อย ราคาถูก เพื่อน้ำไปขาย หรือจะเป็นคัพเค้กสำหรับเด็กๆค่ะ ซื้อไปมอบให้กับน้องๆ มูลนิธิต่างๆ ได้อร่อยกัน แล้วก็ได้บุญด้วยค่ะ

Sweet me a day ขายคัพเค้ก คัพเค้กวันเกิดคัพเค้กการ์ตูน น่ารักๆ คัพเค้กงานแต่ง คัพเค้กแต่งงาน สวย หรู ไม่ซ้ำใคร คัพเค้กอร่อย น่ารักๆ สำหรับงานจัดเลี้ยงบริษัท งานประชุม สัมนา งานเลี้ยงบริษัท งานเลี้ยงสังสรรค์ต่างๆ ทำคัพเค้กตามสั่ง คัพเค้กวันเกิด คัพเค้กวันครบรอบแต่งงาน คัพเค้กแฟชั่น น่ารัก เก๋ๆ คัพเค้กการ์ตูนโดเรมอน คัพเค้กคิตตี้ angry bird หรือ แบบอื่นๆ หรือจะเป็นรวมการ์ตูนในราคาไม่แพงค่ะ

คัพเค้กสำหรับเด็ก ราคาเริ่ม 25 บาท เพื่อซื้อไปแจกเด็กๆ ราคาไม่แพงค่ะ ได้อิ่มบุญกันค่ะ

คัพเค้กแต่งงาน แพ็คเกจแต่งงาน แพ็คเกจงานแต่ง ราคาถูก ไม่ซ้ำใคร เรา Design และออกแบบคัพเค้กตามธีมงานของคุณได้ค่ะ เริ่มต้นที่ 2,500 บาทขึ้นไป พร้อมชั้นเค้ก + เชิงเทียน + กระบี่ตัดเค้ก ให้ยืมฟรี ค่ะ  คัพเค้กงานแต่งงาน ของ Sweet me a day น่ารัก สวยๆ ทั้งนั้นเลยค่ะ เรารับออกแบบและดีไซน์คัพเค้กงานแต่ง ตามธีมงานที่ของคุณ เพื่อเก็บความทรงจำดีๆ เราใช้วัตถุดิบที่มีคุณภาพ ไม่ใส่วัตถุกันเสีย สด อร่อย ม๊บริการส่ง ด้วยค่ะ *** ดูรูปแพ็คเกจคัพเค้กแต่งงานสวย หรู ไม่ซ้ำใครได้ที่ด้านล่างค่ะ**

มีบริการให้เช่า และขาย ชั้นวางคัพเค้ก แบบ 3 ชั้น, 5 ชั้น, 7 ชั้น, 9 ชั้น ค่ะ พร้อมเชิงเทียน และกระบี่ตัดเค้ก ในราคาย่อมเยาว์
 
Sweet me a day ยังมีจำหน่าย Snack box เค้กหน้านิ่ม + น้ำผลไม้  สด อร่อย บรรจุในกล่องน่ารักๆ สำหรับงานประชุม สัมนา coffee break งานเลี้ยงต่างๆ  รับประกันความอร่อยค่ะ สามารถจัด cupcake น่ารัก เป็น snack box ได้ค่ะ หรือจะจัดตามงบประมาณลูกค้าค่ะ  เพื่อได้ snack box เก๋ๆ ไม่ซ้ำใคร ในราคาไม่แพง

สนใจลองเข้าไปแวะชมเมนู เค้ก คัพเค้ก คัพเค้กแต่งงาน คัพเค้กสำหรับจัดเลี้ยง snack box ได้นะคะ

สนใจโทรสอบถามได้ที่ Tel: 083-8442121   หรือ email:    sweetmeaday@hotmail.com</font>


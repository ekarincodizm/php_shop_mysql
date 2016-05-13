
<!DOCTYPE">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/menu.css">
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


//colors
$blue: #263238;
$blue-light: lighten(#263238, 20%);

//fonts
@import url(http://fonts.googleapis.com/css?family=Roboto:400,100,900);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400);
@import url(http://fonts.googleapis.com/css?family=Bevan);

//Font declarations
$roboto: 'Roboto', sans-serif;
$sans: 'Open Sans', sans-serif;
$bevan: 'Bevan', cursive;

//Z-index
$zBottom: 0;
$zMiddle: 200;
$zTop: 600;

html,
body {
    box-sizing: border-box;
    height: 100%;
    width: 100%;
}

*,
*:before,
*:after { box-sizing: inherit; }

body {
    display: table;
    background: #333;
    font-size: 100%; 
    font-family: $roboto;
    font-weight: normal;
    padding: .75em;
}

.card-container {
    background-image: radial-gradient($blue-light, $blue);
    border-radius: 0.9375em;
    display: table-cell;
    font-size: .3rem;
    height: 100%;
    overflow: hidden;
    text-align: center;
    vertical-align: middle;
    width: 100%;
  
    @media(min-width: 25.625em) { font-size: .4rem; }

    @media(min-width: 47.5em) { font-size: .75rem; }

    @media(min-width: 60.625em) { font-size: 1rem; }
}

h1 {
    color: #fff;
    font-family: $bevan;
    font-size: 4.75em;
    font-weight: normal;
    margin: 0 0 .5em;  
    text-align: center;
    text-shadow: 0.013em 0.039em 0.132em rgba(0, 0, 0, .6);
    text-transform: uppercase;
}

///////////////////////
//card common styles
/////////////////////
.card {
    background: #fff;
    border-radius: 0.25em;
    box-shadow: 0 0.039em 0.132em rgba(0, 0, 0, .4);
    display: inline-block;
    font-size: 1em;
    height: 3em; 
    overflow: hidden;
    position: relative;
    margin-right: 1em;
    vertical-align: middle;
    width: 5em;

    &:nth-of-type(5) { margin-right: 0; }
}

///////////////
//visa
//////////////

$blue-visa: #00579F;
$yellow-visa: #FBA31B;

.visa {
    font-family: $sans; 
    font-size: 2em;
    font-style: italic; 
    font-weight: 800;
    padding: .05em;
    z-index: $zBottom; 
    //blue and yellow stripe
    &:before,
    &:after {
        background: $blue-visa;
        border-top-left-radius: 0.25em;
        border-top-right-radius: 0.25em;
        content: "";
        display: block;
        height: .75em;
        left: 50%;
        position: absolute;
        top: 1.75%;
        transform: translate(-50%, 0);
        width: 96%;
        z-index: $zMiddle;
    }
    //push yellow down
    &:after {
        background: $yellow-visa;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0.25em;
        border-bottom-right-radius: 0.25em;
        bottom: 1.75%;
        top: auto;
    }
    //visa letters
    p { 
        color: $blue-visa;
        line-height: 3em; 
        position: relative;

        //yellow swoosh
        &:after {
              border-top: .1em solid transparent;
              border-bottom: .1em solid transparent;
              border-left: .4em solid $yellow-visa;
              border-radius: 0.0625em; 
              content: "";
              display: block;
              height: 0; 
              left: 25.5%;
              position: absolute;
              top: 37.25%;
              transform: rotateZ(189deg);
              width: 0; 
              z-index: $zTop;
        }
    }
}



///////////////
// MasterCard
//////////////

$red-mc: #EF3526;
$yellow-mc: #FCB836;
$blue-mc: #0059B3;

.mc {
    background: $blue-mc;
    font-size: 2em;
  
    &:before,
    &:after {
        background: $red-mc;
        border-radius: 50%;
        content: "";
        display: block;
        height: 2em;
        left: 35%; 
        position: absolute;
        top: 50%;
        width: 2em;
        transform: translate(-50%, -50%);
        z-index: $zMiddle;
    }

    &:after {
        background: $yellow-mc;
        left: 65%;
    }
  
    hr {
        background: $red-mc;
        border: none;
        border-top-right-radius: 0.25em;
        height: .14em; 
        margin: .14em auto;
        position: relative;
        top: 25%;
        width: .65em; 
        z-index: $zTop;

        &:nth-of-type(1),
        &:nth-of-type(5) { transform: translate(-28%, 0);  }
        
        &:nth-of-type(2),
        &:nth-of-type(4){ transform: translate(-10%, 0);  }

        &:nth-of-type(4),
        &:nth-of-type(5) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0.25em;
        }

        &:nth-of-type(3) {
            border-top-right-radius: 4;
            border-bottom-right-radius: 0.25em;
        }
    }

    p {
        color: #fff;
        font-size: .63em;
        font-weight: 600;
        line-height: 1.5em; 
        position: relative;
        text-shadow: 0.0625em 0.0625em 0.0625em rgba(0, 0, 0, 1);
        top: -.8em;
        z-index: $zTop;
    }
}


///////////////
// AMEX
//////////////
$blue-light-AMEX: rgba(126,205,242,1);
$blue-dark-AMEX: rgba(9,113,188,1);
  
.amex {
    background: $blue-dark-AMEX;
    background-image: radial-gradient(top left, circle farthest-corner, $blue-light-AMEX, $blue-dark-AMEX 60%); 
    font-size: 2em;
    font-weight: 900; 
  
    hr {
        border: none;
        border-top: 1px solid rgba(255, 255, 255, .05);
        margin: .15em 0;
    }
  
    .svg {
        color: #FFF; 
        font-size: .8em;
        left: 0;
        position: absolute;
        top: 0;
        stroke-width: 1;
    }
}


///////////////
// Discover
//////////////
$orange-disc: #FF7800;
.discover {
    font-size: 2em;

    &:after {
        border-top: .75em solid transparent;
        border-bottom: 0 solid transparent;
        border-right: 1.75em solid $orange-disc;
        bottom: 0;
        content:"";
        height: 0;
        position: absolute;
        right: 0;
        width: 0;
    }

    p {
        font-size: .75em;
        font-weight: bold;
        letter-spacing: .0625em;
        line-height: 4em;
        position: relative;
        text-transform: uppercase;

        &:after {
            background: $orange-disc;
            border-radius: 50%;
            content: "";
            display: block;
            height: .85em;
            left: 3.11em;
            position: absolute;
            top: 1.5em;
            width: .85em;

            @media(min-width: 25.625em) { 
                top: 1.59em;
            }
        }

    }
}

///////////////
// Back
//////////////
.back {
    background: #ccc;
    font-size: 2em;
    padding: .5em .12em;

    &:before {
        background: #333;
        content: "";
        display: block;
        height: .6em;
        width: 100%;
    }

    &:after {
        background: #333;
        border: 0.2em solid #fff;
        content: "";
        display: block;
        height: .55em;
        margin-left: 0.2em;
        margin-top: 0.28em;
        width: 55%;
    }

    span {
        background: #333;
        border: 0.15em solid #fff;
        display: block;
        height: .43em;
        margin-left: .2em;
        margin-top: .5em;
        position: absolute;
        right: .65em;
        top: 0.95em;
        width: .55em;
        z-index: $zBottom;

        &:before { 
            border: 0.15em solid red;
            border-radius: 50%;
            content: "";
            height: .95em;
            left: -0.35em;
            position: absolute;
            top: -0.4em;
            width: .95em;
            z-index: $zTop;
        }
    }
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








 <font size="" color="ffffff">Sweet me a day - Homemade คัพเค้ก เค้ก แนวใหม่ เก๋ไก๋ ไม่ซ้ำใคร ราคาไม่แพง คัดสรรวัตถุดิบชั้นดี เพื่อให้ได้เค้ก อร่อย ใหม่ สด ทุกวันค่ะ สั่งซื้อได้ที่ Tel & Line 083-8442121 หรือ Inbox เข้ามาที่ Facebook Fanpage: Sweet me a day

Sweet me a day ขาย รับสั่งทำ คัพเค้กเก๋ๆ หรือ สวยหรู ไม่ซ้ำใคร รับรองความอร่อย และน่ารัก ไม่ว่าจะเป็น คัพเค้กวันเกิด (คัพเค้กในรูปแบบที่ลูกค้าต้องการค่ะ) คัพเค้กงานแต่ง คัพเค้กในโอกาสวันสำคัญ วันพิเศษต่างๆ งานเลี้ยงฉลองต่างๆ  หรือจะสั่งเพื่อเป็นของขวัญสำหรับคนที่เรารัก หรือ จะเป็นร้านกาแฟที่มองหาคัพเค้กน่ารัก อร่อย ราคาถูก เพื่อน้ำไปขาย หรือจะเป็นคัพเค้กสำหรับเด็กๆค่ะ ซื้อไปมอบให้กับน้องๆ มูลนิธิต่างๆ ได้อร่อยกัน แล้วก็ได้บุญด้วยค่ะ

Sweet me a day ขายคัพเค้ก คัพเค้กวันเกิดคัพเค้กการ์ตูน น่ารักๆ คัพเค้กงานแต่ง คัพเค้กแต่งงาน สวย หรู ไม่ซ้ำใคร คัพเค้กอร่อย น่ารักๆ สำหรับงานจัดเลี้ยงบริษัท งานประชุม สัมนา งานเลี้ยงบริษัท งานเลี้ยงสังสรรค์ต่างๆ ทำคัพเค้กตามสั่ง คัพเค้กวันเกิด คัพเค้กวันครบรอบแต่งงาน คัพเค้กแฟชั่น น่ารัก เก๋ๆ คัพเค้กการ์ตูนโดเรมอน คัพเค้กคิตตี้ angry bird หรือ แบบอื่นๆ หรือจะเป็นรวมการ์ตูนในราคาไม่แพงค่ะ

คัพเค้กสำหรับเด็ก ราคาเริ่ม 25 บาท เพื่อซื้อไปแจกเด็กๆ ราคาไม่แพงค่ะ ได้อิ่มบุญกันค่ะ

คัพเค้กแต่งงาน แพ็คเกจแต่งงาน แพ็คเกจงานแต่ง ราคาถูก ไม่ซ้ำใคร เรา Design และออกแบบคัพเค้กตามธีมงานของคุณได้ค่ะ เริ่มต้นที่ 2,500 บาทขึ้นไป พร้อมชั้นเค้ก + เชิงเทียน + กระบี่ตัดเค้ก ให้ยืมฟรี ค่ะ  คัพเค้กงานแต่งงาน ของ Sweet me a day น่ารัก สวยๆ ทั้งนั้นเลยค่ะ เรารับออกแบบและดีไซน์คัพเค้กงานแต่ง ตามธีมงานที่ของคุณ เพื่อเก็บความทรงจำดีๆ เราใช้วัตถุดิบที่มีคุณภาพ ไม่ใส่วัตถุกันเสีย สด อร่อย ม๊บริการส่ง ด้วยค่ะ *** ดูรูปแพ็คเกจคัพเค้กแต่งงานสวย หรู ไม่ซ้ำใครได้ที่ด้านล่างค่ะ**

มีบริการให้เช่า และขาย ชั้นวางคัพเค้ก แบบ 3 ชั้น, 5 ชั้น, 7 ชั้น, 9 ชั้น ค่ะ พร้อมเชิงเทียน และกระบี่ตัดเค้ก ในราคาย่อมเยาว์
 
Sweet me a day ยังมีจำหน่าย Snack box เค้กหน้านิ่ม + น้ำผลไม้  สด อร่อย บรรจุในกล่องน่ารักๆ สำหรับงานประชุม สัมนา coffee break งานเลี้ยงต่างๆ  รับประกันความอร่อยค่ะ สามารถจัด cupcake น่ารัก เป็น snack box ได้ค่ะ หรือจะจัดตามงบประมาณลูกค้าค่ะ  เพื่อได้ snack box เก๋ๆ ไม่ซ้ำใคร ในราคาไม่แพง

สนใจลองเข้าไปแวะชมเมนู เค้ก คัพเค้ก คัพเค้กแต่งงาน คัพเค้กสำหรับจัดเลี้ยง snack box ได้นะคะ

สนใจโทรสอบถามได้ที่ Tel: 083-8442121   หรือ email:    sweetmeaday@hotmail.com</font>


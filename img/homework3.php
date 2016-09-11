<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<style>
*{
	margin:0;
	padding:0;
	font-family: 'Open Sans', sans-serif;
}
.wrapper{
margin:0px auto;
width:800px;
}
.header{
	margin-top:30px;
}
.menu{
	background: #444343; /* Для старых браузров */
   background: linear-gradient(to top, #444343, #5e5e5e);
   color:white;
	margin-top:30px;
}
.menu li{
	display: inline-block;
	list-style: none;
	/*margin:25px;
	margin:0px 2px;
	padding: 20px 0px;*/
	padding:5px 20px;
	border-left: 1px solid transparent;
	border-right: 1px solid transparent;
}
.menu li:hover{
	border-left: 1px solid white;
	border-right: 1px solid white;
	background: #2e2e2e; /* Для старых браузров */
   background: linear-gradient(to top, #2e2e2e, #4a4a4a);
   cursor: pointer;
}
.body{
	margin-top:20px;
}
.sidebar {
	width:175px;
	float:left;
}
.sidebar li{
	list-style: none;
	border:1px solid gray;
	padding:5px 10px;
	margin-bottom: -1px;
}
.sidebar li:hover{
	padding-left:30px;
	cursor: pointer;
	background-color: #f9f9f9;
}
.content{
	float:right;
	width:600px;
}
.content img {
	border: 1px solid gray;
	padding: 0px 40px;
	float:right;
}
.content p{
	text-align: justify;
}
.footer{
	margin-top:20px;
	clear:both;
	background-color: #e1e1e1;
	height:30px;
	padding-right: 10px;
	display: inline-block;
width: 100%;
}
.footer ul{
	float:left;
}
.footer li{
	display: inline-block;
	list-style: none;
	/*margin:25px;
	margin:0px 2px;
	padding: 20px 0px;*/
	padding:5px 5px;
	border-left: 1px solid transparent;
	border-right: 1px solid transparent;
	font-size:13px;
}
copyright{
	float:right;
}
</style>
</head>
<body>
<div class=wrapper>
<div class=header>
<img src="logo.jpg">
<ul class=menu>
	<li>Главная</li>
	<li>Товары</li>
	<li>О нас</li>
	<li>Контакты</li>
</ul>
</div>
<div class=body>
<div class=sidebar>
<ul>
	<li>Ноутбуки</li>
	<li>Планшеты</li>
	<li>Телефоны</li>
	<li>Телевизоры</li>
	<li>Бытовая техника</li>
	<li>Автотовары</li>
</ul>
</div>
<div class=content>
<img src='good_1.jpg'>
<p>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів Letraset, які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп'ютерного верстування на кшталт Aldus Pagemaker, які використовували різні версії Lorem Ipsum.</p>
</div>
</div><!--//end body-->
<div class=footer>
<ul>
	<li>Главная</li>
	<li><u>Товары</u></li>
	<li>О нас</li>
	<li>Контакты</li>
</ul>
<copyright>All rights reserved 2016</copyright>
</div>
</div><!--//end wrapper-->
</body>
</html>
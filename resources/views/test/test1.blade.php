<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="http://nikorabg.com/matraci/public_html/css/font-awesome.css" rel="stylesheet">

<script src="http://nikorabg.com/matraci/public_html/libs/jquery-loader.js"></script>
  <link rel="stylesheet" href="http://nikorabg.com/matraci/public_html/libs/qunit/qunit.css" media="screen">
  <link rel="stylesheet" href="http://nikorabg.com/matraci/public_html/dist/jquery.nstSlider.css" media="screen">
  <script src="http://nikorabg.com/matraci/public_html/libs/qunit/qunit.js"></script>
  <script src="http://nikorabg.com/matraci/public_html/js/jquery.nstSlider.js"></script>
  <!-- Load local lib and tests. -->
<style>

body {

    font-family: 'Open Sans';
    overflow-x: hidden;
}
.header {
    position: relative;
    min-height: 150px;
}

.navbar-fixed {
    top: 0;
    z-index: 100;
  position: fixed;
    width: 100%;
}

.logo img {
	width: 80%;

    padding: 30px 30px 0 30px;
}

.contacts-header img{
	width: 105%;

    padding: 30px 30px 0 30px;
}

.searchbox {
	position: relative;
    bottom: 0;
}
.searchbox table {
	width: 100%;
}

.searchbox table tr > td{
	padding-bottom: 5px !important;
}

table tr > td
{
  padding-bottom: 25px;
}

.searchbox input {
	width: 100%;
    padding: 5px;
    font-size: 14px;
    font: 'Open Sans Light';
    z-index: 10000;
}
.searchbox a {
	border-right: 1px solid black;
	padding: 0 15px 0 15px;
	font-size: 14px;
	color: #000;
	font-style: 'Open Sans Light';
	text-transform: uppercase;
}
.searchbox a.first {
	padding-left: 0px;
}
.searchbox .header-search {

    width: initial;
    position: absolute;
    right: 17px;
    border: 0;
    border-left: 0;
    margin-top: 1px;
    padding: 6px;
    background: #fff;
}
a.last {
	border-right: 0;
}
.menu-label {
	float: left;
}
.caret {
	float: right;
    margin-top: 4px;
    vertical-align: top !important;
    border-top: 6px dashed !important;
    border-right: 6px solid transparent !important;
    border-left: 6px solid transparent !important;
}
.bottom_aligner {
    display: inline-block;
    height: 70px;
    vertical-align: bottom;
    width: 0px;
}

.container-fluid {
    padding-right: 0 !important;
    padding-left: 0 !important;

}
.main-menu {
	background: #3fa9f5;
	font-size: 20px;
}
.main-menu a {
	color:#fff;
	text-transform: uppercase;
	font-size: 18px;
	font-style: 'Open Sans';
}

.nav>li {

    vertical-align: top;
    margin-left:-5px;
}

.order-image img {
	width: 100%;
}

.order-info, .item-count, .item-price {
	padding-top: 15px;
}
.item-count select {
	border-radius: 5px;
    min-width: 50px;
}
.order-info .name {
	font-size: 15px;
	margin: 0;

}

.order-info .brand {
	font-weight: 900;
	font-size: 19px;
    margin: 0;
}

.order-info .size {
	font-size: 15px;
}
.order-item {
	margin-bottom:5px;
	background: #fff;
}
.content {
	background: #e9f1f4;
	padding:10px;
}

.old-price p {
	padding-bottom: 0 !important;
	margin-bottom: 0 !important;
}

.price-line-through{
	color:red;
	text-decoration:line-through;
}

.old-price-val {
	color: black;
}

.item-price .price {
	font-size: 25px;
    font-weight: 900;
	color: red;

}

.item-price .price span {
	font-size:20px;

    font-weight: 300;
}

.title {
	font-size: 20px;
	font-weight: 700;
}
.green {
	color: green;
}
.total-price {
	font-size: 25px;
	font-weight: 700;
}
.content hr {
    border-top: 1px solid #000;
}
.order-info {

    padding: 25px;
}
.order-info p{

   font-size: 18px;
}

.order-info button {

    width: 100%;
    border: 0;
    text-transform: uppercase;
    padding: 5px;
    background: #e40001;
    color: #fff;
}

.total-order p {
	margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.no-padding-left {
	padding-left: 0;
}

.paddingtop70 {
	padding-top:20px;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #137bc6;
}
.nav>li>a {
	min-height: 70px;
	text-align: left;
}

.home-button {
	font-size: 27px;
}

.pay-types {
	padding-bottom: 15px;
}

.product-list img {
	width:100%;
}
.product-list h3 {
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    margin-top: 0;
}
.product-list img.brand {
	width:60%;
}

.product-list {

    font-size: 14px;
    font-weight: 600;
    line-height: 1.1;
    padding-bottom: 10px;
}
.bottom-padding {
	padding-bottom: 10px;
}
.company-logo {

    width: 50% !important;
    display: block;
    padding-bottom: 10px;
    margin: auto;
}

.product-info {

    border: 1px solid #c1c1c1;
    margin-top: 10px;

    padding-bottom: 10px;
}

.product-list span.old-price {

	text-decoration:line-through;
}

.product-list .product-div {
	padding-left:0px;
}

.product-list span.new-price {

    font-size: 20px;
    color: red;
    font-weight: 700;
    float: right;
}

.promo {

    width: 50% !important;
    position: absolute;
    top: 10px;
    right: 15px;
}

.view-button {

    text-decoration: none !important;    
    text-transform: uppercase;
    font-size: 16px;
    cursor: pointer;
    color: white;
    background: #3fa9f5;
    float: right;
    padding: 6px 15px 6px 15px;
}
.right {
	float: right;
}
.left {
	float: left;
}
.filters input {

    zoom: 1.3;
    vertical-align: middle;
    margin: 0px;
}

.filter-section h4{

    background: red;
    padding: 5px 10px;
    color: #fff;
}
.max-width {
	width:100% !important;
}
.filter-section label{
	width:100%;
    margin-left: 10px;

    display: inline-block;
    vertical-align: middle;
}

.leftSpanPrice {
	float: left;

}

.leftSpanPrice div, .rightSpanPrice div {
	float: left;

}

.rightSpanPrice {
	float: right;
}

.filters h2 {
	font-size: 25px;
}

h1 {
	font-size: 20px;
	text-transform: uppercase;
}

footer h2 {
	
    font-size: 16px; 
    margin-top: 0;
    font-weight: 700;
    text-transform: uppercase;
}

footer {
	min-height: 200px;
	background: #bdcbd4;
	padding-top: 20px;
}

footer a:hover {
	text-decoration: none;
	cursor:pointer;
}

footer ul {

    margin-left: -25px;
}
@media (min-width: 768px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  .navbar-nav > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav > li.navbar-right {
    float: right !important;
  }
}
</style>
<body>
<!-- Latest compiled and minified CSS -->
<header class="header">
<div class="col-xs-12 col-md-4 logo">
<img src="http://nikorabg.com/matraci/public_html/img/logo.png">
</div>

<div class="col-xs-12 col-md-4 searchbox">
<div class="bottom_aligner"></div>
<table>
<tr>
	<td><input type="text" name=""  placeholder="Търсене на продукт"><i class=" header-search icon-large icon-search
"></i></td>
</tr>
<tr>
	<td><div><a class="first" href="#">Профил</a><a href="#">вход</a><a href="#">количка</a><a href="#" class="last">общи условия</a></div></td>
</tr>
</table> 

</div>
<div class="col-xs-12 col-md-4 contacts-header">
<img src="http://nikorabg.com/matraci/public_html/img/free_tel_4.png">

</div>



<nav class="">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <ul class="nav navbar-nav main-menu" id="nav-bar">
      <li><a  href="#"><i class="home-button icon-large icon-home"></i></a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="menu-label">Промоции<br> Топ Оферти</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li>
      <li><a href="#">Матраци</a></li>
      <li><a href="#">Луксозни <br>матраци</a></li>
      <li><a href="#">Възглавници<br> и аксесоари</a></li>
      <li><a href="#">Подматрачни <br>рамки</a></li>
      <li><a href="#">Мебели<br> Спалня</a></li>
    </ul>
  </div>
</nav>

</header>

<div class="container paddingtop70 max-width">
<div class="col-md-2 filters">
<h2>Филтри</h2>
<div class="filter-section">
	<h4 > По марка <span class="caret"></span></h4>
	<label>
		<input type="checkbox"> Тед
	</label>
	<label>
		<input type="checkbox"> Нани
	</label>
	<label>
		<input type="checkbox"> Тед
	</label>
	<label>
		<input type="checkbox"> Нани
	</label>

</div>


<div class="filter-section">
	<h4 > По марка <span class="caret"></span></h4>
		<div class="nstSlider" data-range_min="0" data-range_max="100" 
		                       data-cur_min="0"    data-cur_max="100">

		    <div class="bar"></div>
		    <div class="leftGrip">
		    	<div class="white-point leftGrip"></div>

		    </div>

		    <div class="rightGrip">
		    	<div class="white-point rightGrip"></div>
		    </div>
		</div>
		<span class="leftSpanPrice"><div class="leftLabel" /></div> лв.</span>
		<span class="rightSpanPrice"><div class="rightLabel" /></div> лв.</span>
<div class="clearfix"></div>
</div>


<div class="filter-section">
	<h4 > Вид на матрака <span class="caret"></span></h4>
	<label>
		<input type="checkbox"> Еднолицев
	</label>
	<label>
		<input type="checkbox"> Двулицев
	</label>
	<label>
		<input type="checkbox"> Детски
	</label>
	<label>
		<input type="checkbox"> Топ матрак
	</label>

</div>

<div class="filter-section">
	<h4 > Състав <span class="caret"></span></h4>
	<label>
		<input type="checkbox"> Мемори пяна
	</label>
	<label>
		<input type="checkbox"> Латекс
	</label>
	<label>
		<input type="checkbox"> Полиуретан
	</label>
	<label>
		<input type="checkbox"> HR пяна
	</label>

</div>

<div class="filter-section">
	<h4 > Твърдост <span class="caret"></span></h4>
	<label>
		<input type="checkbox"> Мек
	</label>
	<label>
		<input type="checkbox"> Мека до средна
	</label>
	<label>
		<input type="checkbox"> Средна
	</label>
	<label>
		<input type="checkbox"> Средна до твърда
	</label>

</div>

<div class="filter-section">
	<h4 > Екстри <span class="caret"></span></h4>
	<label>
		<input type="checkbox"> Анатомичен
	</label>
	<label>
		<input type="checkbox"> Антиакарен
	</label>
	<label>
		<input type="checkbox"> Дишащ
	</label>
	<label>
		<input type="checkbox"> Кокос
	</label>

</div>


</div>
<div class="col-md-10 product-list">
	<div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
<div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div><div class="col-md-3 product-div">
	<div class="product-info">
		<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
		<h3>-50% Маттера двулицев</h3>
		<img src="http://www.mattro.net/images/stories/MatraciTed/Kolekciq2016/matraci-ted-bed-logo-2016-mattro.net.png" class ="company-logo">
		<img src="http://nikorabg.com/matraci/public_html/img/promo.png" class="promo">
		<div class="col-md-6 bottom-padding">
			Стара цена<br>
			<span class="old-price">528лв</span>.
		</div>

		<div class="col-md-6 bottom-padding">
			<span class="new-price">291лв.</span>
		</div>
		<div class="clearfix"></div>
		
		<div class="col-md-6 bottom-padding left">
			Безплатна доставка
		</div>
		<div class="col-md-6 bottom-padding right">
			<a class="view-button"> Виж</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	
</div>
</div>
<footer>
	<div class="container">
		<div class="col-md-3">
			<h2>Категории</h2>
			<ul>
				<li><a>Начало</a></li>
				<li><a>Промоции и топ оферти</a></li>
				<li><a>Матраци</a></li>
				<li><a>Луксозни матраци</a></li>
				<li><a>Възглавници и аксесоари</a></li>
				<li><a>Подматрачни рамки</a></li>
				<li><a>Мебели спалня</a></li>
			</ul>
		
		</div>
		<div class="col-md-3">
			<h2>Информация</h2>
			<ul>
				<li><a>За нас</a></li>
				<li><a>Общи условия</a></li>
				<li><a>Безплатна доставка</a></li>
				<li><a>Контакти</a></li>
				<li><a>На изплащане с 0% лихва</a></li>
				<li><a>Начини на плащане</a></li>
			</ul>
		
		</div>

		<div class="col-md-2">
		<img src="http://nikorabg.com/matraci/public_html/img/free_tel_3.png">
		
		</div>

		<div class="col-md-4">

		
		</div>
	</div>

</footer>
<script type="text/javascript">
	
var navTop;
$(document).ready(function() {
  navTop = $('#nav-bar').position().top;
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
    if ($(window).scrollTop() >  $('#nav-bar').position().top) {
      $('#nav-bar').addClass('navbar-fixed');
      $('.container').addClass('paddingtop70');
    }
    if ($(window).scrollTop() <= navTop) {
      $('#nav-bar').removeClass('navbar-fixed');
      $('.container').removeClass('paddingtop70');
    }
  });
});

$('.nstSlider').nstSlider({
    "left_grip_selector": ".leftGrip",
    "right_grip_selector": ".rightGrip",
    "value_bar_selector": ".bar",
    "value_changed_callback": function(cause, leftValue, rightValue) {
        $(this).parent().find('.leftLabel').text(leftValue);
        $(this).parent().find('.rightLabel').text(rightValue);
    }
});
</script>
</body>
</html>
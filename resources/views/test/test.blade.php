<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="http://nikorabg.com/matraci/public_html/css/font-awesome.css" rel="stylesheet">

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
	color:red;text-decoration:line-through
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
	font-size: 30px;
}

.pay-types {
	padding-bottom: 15px;
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Промоции<br> Топ Оферти
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

<div class="container paddingtop70">

	<h1>Поръчка</h1>
	<div class="col-md-9 no-padding-left">
		<div class="order-list content">

			<div class="order-item">
				<div class="order-image col-md-4">
				<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
				</div>
				<div class="col-md-8">
					<div class="order-info col-md-6">
						<p class="name"> ДВУЛИЦЕВ МАТРАК</p>
						<p class="brand"> Bioactive</p>
						<p class="size">размер: 160/200</p>
					</div>

					<div class="item-count col-md-3">
						<select>
							<option>1</option>
						</select>
						<label>бр.</label>
					</div>

					<div class="item-price col-md-3">
						<div class="old-price">
							<p class="old-price-label">стара цена:</p>

							<span class="price-line-through">
								<p class="old-price-val">432 лв.</p>
							</span>
						</div>
						<p class="price">113<span>лв.</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><a href="#">Избери съвместим продукт</a></div>
					<div class="col-md-3 col-md-offset-3"><a href="#">Изтрий</a></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="order-item">
				<div class="order-image col-md-4">
				<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
				</div>
				<div class="col-md-8">
					<div class="order-info col-md-6">
						<p class="name"> ДВУЛИЦЕВ МАТРАК</p>
						<p class="brand"> Bioactive</p>
						<p class="size">размер: 160/200</p>
					</div>

					<div class="item-count col-md-3">
						<select>
							<option>1</option>
						</select>
						<label>бр.</label>
					</div>

					<div class="item-price col-md-3">
						<div class="old-price">
							<p class="old-price-label">стара цена:</p>

							<span class="price-line-through">
								<p class="old-price-val">432 лв.</p>
							</span>
						</div>
						<p class="price">113<span>лв.</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><a href="#">Избери съвместим продукт</a></div>
					<div class="col-md-3 col-md-offset-3"><a href="#">Изтрий</a></div>
				</div>
				<div class="clearfix"></div>
			</div>


			<div class="order-item">
				<div class="order-image col-md-4">
				<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">
				</div>
				<div class="col-md-8">
					<div class="order-info col-md-6">
						<p class="name"> ДВУЛИЦЕВ МАТРАК</p>
						<p class="brand"> Bioactive</p>
						<p class="size">размер: 160/200</p>
					</div>

					<div class="item-count col-md-3">
						<select>
							<option>1</option>
						</select>
						<label>бр.</label>
					</div>

					<div class="item-price col-md-3">
						<div class="old-price">
							<p class="old-price-label">стара цена:</p>

							<span class="price-line-through">
								<p class="old-price-val">432 лв.</p>
							</span>
						</div>
						<p class="price">113<span>лв.</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><a href="#">Избери съвместим продукт</a></div>
					<div class="col-md-3 col-md-offset-3"><a href="#">Изтрий</a></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class=" total-order">
				<div class="col-md-offset-6 col-md-3">
					<p>Общо продукти:</p>

					<p class="green">Безплатна доставка</p>
					<p>Обще цена:</p>
				</div>

				<div class="col-md-3">
					<p>329лв.</p>
					<br>
					<p>329лв.</p>
				</div>

				<div class="clearfix"></div>
			</div>

		</div>


	</div>

	<div class="col-md-3 content order-info">
		<p class="title">ИНФОРМАЦИЯ ЗА ПОРЪЧКАТА</p>
		<p>Общо продукти: 329лв.</p>
		<p class="green">Безплатна доставка</p>
		<hr>
		<p class="total-price">Общо:<br>329лв.</p>

		<button>Назад</button>

	</div>
	<div class="clearfix"></div>
	<h1>ИЗБЕРЕТЕ НАЧИН НА ПЛАЩАНЕ</h1>
	<div class="col-md-12 pay-types">
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-1.png">
		</div>
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-2.png">
		</div>
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-3.png">
		</div>
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-4.png">
		</div>
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-5.png">
		</div>
		<div class="col-md-2">
			<img src="http://nikorabg.com/matraci/public_html/img/B1-6.png">
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
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
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
</script>
</body>
</html>
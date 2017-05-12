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
	font-size: 30px;
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

    font-size: 12px;
    font-weight: 600;
    line-height: 1.1;
    padding-bottom: 10px;
}

.product-info {

    border: 1px solid black;
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
}


.product-list .view-button {

    text-decoration: none !important;
    cursor: pointer;
    color: white;
    background: #3fa9f5;
    padding: 6px 15px 6px 15px;
}

.filter-section h4{

    background: red;
    padding: 5px 10px;
    color: #fff;
}
.filter-section label{
	width:100%;
    margin-left: 10px;
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


.product-img img{
  width: 100%;
  border:1px solid black;
}

.product-size-info h3 {

    margin: 0px;
    color: #34abff;
    font-weight: 700;
    font-size: 18px;
}

.color-initial {
  color:initial;
}

.no-padding {
  padding:0px;
}
.product-size-discount {

    min-height: 20px;
    text-align: center;
    line-height: 50px;
    font-size: 25px;
    color: red;
}

.product-size-price p {
    text-align: center;
    margin-bottom: 0;

}

.product-size-price .price {
    color: red;
    font-size: 19px;
}
.product-size-price .price span {

    font-weight: 900;
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

.product-size {
    border-bottom: 1px solid black;
    padding-top: 10px;
}

.product-size.last {
  border:0px;
}

.product-size-list {
    background: #eaf0f5;
    margin-bottom: 20px;
}

.product-desc .brand-logo-desc {
  width: 70%;
}
.product-desc p {

    text-transform: uppercase;
    margin-top: 15px;
    font-weight: 600;
    margin-bottom: 0;
}

.product-desc h4 {

    margin-top: 0;
    font-size: 30px;
    color: #34abff;
}

.product-desc .sale-image img{

    width: 80%;
}
.product-desc .sale-image p{
    color: white;
    font-size: 3em;
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(-45%, 20%);
  }
  .max-width {
  width:100% !important;
  }

  .gift-name p {

    font-size: 18px;
    margin: 0;
    height: 33px;
    line-height: 33px;
    background-color: #83cff5;
    text-align: center;
    color: white;
  }
  .gift-name {
    padding:0;
  }
  .product-gift-type {
    padding:0;
  }

  .product-gift-type p {

    margin: 0;
    height: 33px;
    border: 1px solid #83cff5;
    line-height: 15px;
    border-top-right-radius: 2em;
    border-bottom-right-radius: 2em;
    font-size: 13px;
    padding-left: 13px;
    padding-right: 13px;
  }

  .product-desc-circle-img {
    width: 12%;
  }
  .action-buttons {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .description-link {
    padding: 20px;
    font-size: 20px;
    margin: 20px;
    background: #83cff5;
    color: #fff;
  }
  
  .contacts-link {

    padding: 20px;
    font-size: 20px;
    background: #e80000;
    color: #fff;
  }  

  .product-long-description {

    margin-top: 20px;
    margin-left: 50px;
    background: #eaf0f5;
    padding: 15px 100px 15px 30px;
    margin-bottom: 20px;
    color: #000;
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

<div class="container paddingtop70 max-width">
	<div class="col-md-8 product-info-div">
		<div class="col-md-12">
			<div class="col-md-8 product-img">
				<img src="http://matraci.bg/media/catalog/product/cache/1/image/500x375/af097278c5db4767b0fe9bb92fe21690/1/_/1_3.jpg">		
			</div>

			<div class="col-md-4 product-desc">
      <img src="https://www.bellanotte.bg/sites/all/themes/bellanotte/logo.png" class="brand-logo-desc">
				<p>Двулицев матрак</p>
        <h4>BioActive</h4>
        <div class="sale-image">
          <img src="https://www.samhober.com/howtofoldpocketsquares/Flat1.jpg">
          <p> -50%
          </p>
        </div>
        <div class="product-desc-gifts">
          <div class="gift-name col-md-6">
            <p>ПОДАРЪК</p>
          </div>
          <div class="product-gift-type col-md-6"><p>2бр. възглавници</p></div>
        </div>
			</div>

      <div class="clearfix"></div>

      <div class="col-md-12">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
        <img class="product-desc-circle-img" src="http://vignette4.wikia.nocookie.net/agk/images/1/16/Black_Circle.png">
      </div>

      <div class="clearfix"></div>

      <div class="col-md-12">
        <div class="col-md-6 action-buttons">
          <a href="#" class="description-link"> ОПИСАНИЕ</a>
          <a href="#" class="contacts-link"> СВЪРЖИ СЕ С НАС</a>
        </div>
        <div class="col-md-6 image-buttons">

        </div>


		</div>

    <div class="col-md-11 product-long-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
    </div>

	</div>
  </div>

	<div class="col-md-4 product-size-list">
	
    <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
     <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
     <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
         <div class="product-size">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
    </div>
     <div class="product-size last">
      <div class="col-md-3 product-size-info">
        <h3>Bioactive</h3>
        <p>размер:<br>82/190</p>
      </div>

      <div class="col-md-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial">432 лв.</span></span></p>
      </div>

      <div class="col-md-2 product-size-discount no-padding-left">
        <p>-50%</p>
      </div>

      <div class="col-md-2 product-size-price no-padding">
        <p> Цена:</p>
        <p class="price"> <span>216</span>лв.</p>
      </div>

      <div class="col-md-3 product-size-options">
        <a href="#" class="view-button">Купи</a>
        <a href="#" class="credit-button">Кредит</a>
      </div>
      <div class="clearfix"></div>
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

		<div class="col-md-2 product-img">
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
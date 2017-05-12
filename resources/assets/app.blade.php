<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{ asset ('/css/font-awesome.css') }}" rel="stylesheet">

  <script src="{{asset ('/libs/jquery/jquery.js') }}"></script>
  <link rel="stylesheet" href="{{asset ('libs/qunit/qunit.css') }}" media="screen">
  <link rel="stylesheet" href="{{asset ('dist/jquery.nstSlider.css') }}"" media="screen">
  <script src="{{asset ('libs/qunit/qunit.js') }}""></script>
  <script src="{{asset ('js/jquery.nstSlider.js') }}""></script>
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
    width: 80%;
    padding-right: 30px;
    padding-top: 10px;
    float: right;
    padding-bottom: 10px;
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
    max-width: 140px;
}
.caret {
    float: right;
    margin-left: 5px;
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

.no-padding-right {
    padding-right: 0;
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
    font-size: 25px;
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
.banner img{
    width: 100%;
    min-height: 200px;
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
    font-size: 14px;
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
.discount-percent {
    font-size: 0.8em;
}
.product-desc .sale-image p{
    color: white;
    font-size: 3em;
    position: absolute;
    top: 20%;
    left: 40%;
    transform: translate(-50%, 20%);
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
    padding-left: 0px;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .description-link {
    padding: 15px;
    font-size: 20px;
    margin: 20px;
    margin-left: 0px !important;
    background: #83cff5;
    color: #fff;
  }
  
  .contacts-link {

    padding: 15px;
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
  .sale-image{
    position: relative;
  }
  .producers-list {
    overflow: hidden;
    height: 100vh;
  }
  .producers {
    background: #eaf0f5;
    overflow-y: scroll;
    width: 120%;
    margin-top: 10px;
  }
  .producers img {

    width: 60%;
    margin-left: 15%;
  }
  .caret-product-info {
    float: none;
    margin-top: 0;
    vertical-align: initial !important;
  }

  .active .caret-product-info {
    border-top: 6px dashed !important;
    border-bottom: 0 dashed !important;
    border-right: 6px solid transparent !important;
    border-left: 6px solid transparent !important;
  }
  .caret-product-info {
    border-top: 0 dashed !important;
    border-right: 6px solid transparent !important;
    border-left: 6px solid transparent !important;
    border-bottom: 6px dashed !important;

  }
  .description-link:focus,.description-link:hover {
    color: #fff;
    text-decoration: none;
    }  
    .contacts-link:focus,.contacts-link:hover {
    color: #fff;
    text-decoration: none;
    }

</style>
<body>
<!-- Latest compiled and minified CSS -->
<header class="header">
<div class="col-xs-12 col-md-4 logo">
<a href="{{url('/')}}"><img src="{{url('img/logo.png')}}"></a>
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
<img src="{{url('img/free_tel_4.png')}}">

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
      <li><a  href="{{url('/')}}"><i class="home-button icon-large icon-home"></i></a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('promotions')}}"><span class="menu-label">Промоции<br> Топ Оферти</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li>

     @foreach($categories as $category)
      <li><a href="{{url('products/'.$category['title'])}}"><span class="menu-label">{!!$category['name']!!}</span><span class="caret"></span></a></li>
      @endforeach
    </ul>
  </div>
</nav>

</header>
    <div class="container paddingtop70 max-width">
        @yield('content')
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
      $('.container').removeClass('paddingtop70');
    }
    if ($(window).scrollTop() <= navTop) {
      $('#nav-bar').removeClass('navbar-fixed');
      $('.container').addClass('paddingtop70');
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
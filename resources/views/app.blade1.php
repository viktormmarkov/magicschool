<!DOCTYPE html>
<html>
<title>Stella - Матраци</title>
  <base href="{{url('/')}}" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="матрак, матраци, matrak, поръчка, онлайн, бургас, матраци бургас, ламелни рамки, топматраци" />
  <meta name="description" content="Матраци -  Поръчки онлайн и бърза доставка."/> 
<link rel="stylesheet" href="{{ asset ('/css/bootstrap.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{ asset ('/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset ('/css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset ('libs/qunit/qunit.css') }}" media="screen">
  <link rel="stylesheet" href="{{asset ('dist/jquery.nstSlider.css') }}"" media="screen">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link href="{{ asset ('/css/skins/page.css')}}" rel="stylesheet" />
    <link href="{{ asset ('/css/super-panel.css')}}" rel="stylesheet" />
    <script src="{{ asset ('/js/super-panel.js')}}"></script>
    <link href="{{ asset ('/css/skins/default/accordion-menu.css')}}" rel="stylesheet" />
    <script src="{{ asset ('/js/accordion-menu.js')}}"></script>
    <style>#accordion { box-shadow:none; } #accordion p{margin:30px 0;}</style>
  <!--<script src="{{asset ('/libs/jquery/jquery.js') }}"></script>-->



  <!-- Load local lib and tests. -->
<style>


</style>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=182974238730583";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

{!!$googleCode['value']!!}

<!-- Latest compiled and minified CSS -->
<img src="//as.adwise.bg/servlet/tp.gif?id=1422" width="1px" height="1px" style="display:none;">
<script type="text/javascript" src="//i.adwise.bg/clients/matracistela.js"></script>
<header class="header">
<div class="col-xs-12 col-md-4 logo">
<a href="{{url('/')}}"><img src="{{url('img/logo.png')}}"></a>
</div>


<div class="col-xs-12 col-md-4 contacts-header">
<img src="{{url('img/free_tel_4.png')}}">

</div>
<div class="col-xs-12 col-md-4 searchbox">
<div class="bottom_aligner"></div>

<table>
<tr><td colspan="2">
  <div class="flags col-md-12">
    <a href="{{url('/lang/bg')}}">
      <img src="{{url('/img/flag_bg.png')}}">
    </a>
    <a href="{{url('/lang/ru')}}">
      <img src="{{url('/img/flag_ru.png')}}">
    </a>
    <a href="{{url('/lang/en')}}">
      <img src="{{url('/img/flag_en.png')}}">
    </a>
  </div>
  </td>
  </tr>
<tr>
<td class="no-mobile"><a href="{{url('/shopping-cart')}}"><img src="{{url('/img/shop-09.png')}}"></a></td>
    <td><form id="search-form" method="post" action="{{url('/search')}}"><input type="hidden" name="_token" value="{{csrf_token()}}"><input type="text" name="search" id="search" value="{{$search or ''}}" placeholder="{{trans('messages.search')}}"><i class=" header-search icon-large icon-search" onclick="$('#search-form').submit()" ></i></form></td>
</tr>
<tr class="mobile cart-row" align="center">
<td><a href="{{url('/shopping-cart')}}"><img src="{{url('/img/shop-09.png')}}">{{trans('messages.cart')}}</a></td>
</tr>
</table> 

</div>
<div class="clearfix"></div>
<div class="col-md-12 no-padding ">
<!--
    <div id="panel1">
    <span data-panel="panel1" class="panel-button"></span>
        <div id="accordion">
            <ul>
            <li><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
            <li>
                <a href="{{url('promotions')}}">{{trans('messages.promotions')}}
                </a>
           </li>


         @foreach($categories as $category)
          <li>
              <div>{!!$category['name_'.$lang]!!}</div>
              
              <ul>
              @foreach ($category->getSubCategories() as $subcat)
                <?$subsubcats=$subcat->getSubCategories()?>

                @if (isset($subsubcats[0]))
                <div>{!!$subcat['name_'.$lang]!!}</div>
                  <ul> 
                  @foreach ($subsubcats as $subsubcat)
                    <li><a href="{{url('products/'.$subsubcat['title'])}}">{{$subsubcat['name_'.$lang]}}</a></li>
                  
                  @endforeach
                  <li> <a href="{{url('products/'.$subsubcat['title'])}}">{{trans('messages.see_all')}}</a></li>
                  </ul>
                @else

                  <li><a href="{{url('products/'.$subcat['title'])}}">{{$subcat['name_'.$lang]}}</a></li>
                @endif
              @endforeach
                <li> <a href="{{url('products/'.$category['title'])}}">{{trans('messages.see_all')}}</a></li>
            </ul>
          </li>
          @endforeach
            </ul>
        </div>
    </div>
-->

<nav class="navbar navbar-default  no-padding" role="navigation">
      <div class="container2">
      <div class="navbar navbar-default navbar-fixed-top">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
        <!--<div class="navbar-header">
            <div class="nav-button-background">
               
                <span data-panel="panel1" class="panel-button"></span>{{trans('messages.menu')}}
            </div>
        </div>-->



      


        <div id="navbar" class="navbar-collapse collapse no-padding">
          <ul class="nav navbar-nav main-menu" id="nav-bar">


            <li class="no-mobile"><a href="{{url('/')}}"><i class="home-button icon-large icon-home"></i></a></li>
            <li class="mobile"><a href="{{url('/')}}"><span class="menu-label">{{trans('messages.home')}}</span></a></li>
          <li >
            <a href="{{url('promotions')}}"><span class="menu-label">{{trans('messages.promotions')}}</span>
            <div class="clearfix-mobile"></div>
            </a>
           
          </li>
          <li>
              
              
                

               
         @foreach($categories as $category)
          <li>
              <a href="{{url('products/'.$category['title'])}}" ><span class="menu-label">{!!$category['name_'.$lang]!!}</span>
                 
            <div class="clearfix-mobile"></div>
              </a>
              
          </li>
          @endforeach
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>


</header>
    <div class="container paddingtop70">
        @yield('content')
     </div>
     <div class="clearfix"></div>
<footer>
    <div class="container">
    <div class="col-md-8">
        <div class="col-md-6">
            <h2>{{trans('messages.categories')}}</h2>
            <ul>
                <li><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
                <li><a href="{{url('/promotions')}}">{{trans('messages.promotions')}}</a></li>
                @foreach($categories as $category)
                  <li><a href="{{url('products/'.$category['title'])}}">{!!$category['name_'.$lang]!!}</a></li>
                @endforeach

            </ul>
        
        </div>
        <div class="col-md-6">
            <h2>{{trans('messages.information')}}</h2>
            <ul>
                <li><a href="{{url('page/about')}}">{{trans('messages.about')}}</a></li>
                <li><a href="{{url('page/terms')}}">{{trans('messages.terms')}}</a></li>
                <li><a href="{{url('page/contacts')}}">{{trans('messages.contacts')}}</a></li>
                <li><a href="{{url('page/service')}}">{{trans('messages.service')}}</a></li>
            </ul>
        
        </div>
        <div class="col-md-12">
        <img src="{{url('img/visa.png')}}">
        </div>
</div>
<div class="col-md-4 no-mobile">

        <div class="">
<div class="fb-page" data-href="https://www.facebook.com/stelamattress/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/stelamattress/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/stelamattress/">Матраци Стела</a></blockquote></div>
      
        </div>
        </div>
    </div>
<div class="clearfix"></div>
</footer>
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('libs/qunit/qunit.js') }}""></script>
  <!--<script src="{{asset ('js/jquery-3.1.0.min.js') }}""></script>-->
  <script src="{{asset ('js/jquery.nstSlider.js') }}""></script>
  <script src="{{asset ('js/jssor.slider-21.1.5.mini.js') }}""></script>
<script type="text/javascript">

var url = '{{url('/')}}/';

var navTop;
$(document).ready(function() {
     $('.product-img-div').hover(function () {
        $($(this).find('div')[0]).addClass('transition');
 
    }, function() {
        $($(this).find('div')[0]).removeClass('transition');
    });
  navTop = 140;

  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
    if ($(window).scrollTop() >  navTop) {
      $('.container2').addClass('navbar-fixed');
      $('.container').removeClass('paddingtop70');
    }
    if ($(window).scrollTop() <= navTop) {
      $('.container2').removeClass('navbar-fixed');
      $('.container').addClass('paddingtop70');
    }
  });
  //resizeProducts();
  resizeBannerImages();
  

});
window.onload = function() {
  resizeProducts();
}
$( window ).resize(function() {
    resizeBannerImages();
    resizeProducts();
    });

function resizeProducts() {

  var height = 0;
  $('.product-info').css('height','initial');
  $('.product-div').css('height','initial');
  $('.product-info').each(function() {
    if($(this).height()>height) height = $(this).height()
  });
  $('.product-info').css('height',(parseInt(height)+15)+'px');
  var height = 0;
  $('.product-div').each(function() {
    if($(this).height()>height) height = $(this).height()
  });
  $('.product-div').css('height',(parseInt(height)+15)+'px');
}

function resizeBannerImages() {
    $($('.banner img')[$('.banner img').length-1]).height($($('.banner div')[0]).height());
}
var FromValue = 0;
var ToValue = 99999;
$('.nstSlider').nstSlider({
    "left_grip_selector": ".leftGrip",
    "right_grip_selector": ".rightGrip",
    "value_bar_selector": ".bar",
    "value_changed_callback": function(cause, leftValue, rightValue) {
        $(this).parent().find('.leftLabel').text(leftValue);
        $(this).parent().find('.rightLabel').text(rightValue);
        FromValue = leftValue;
        ToValue = rightValue;
    }
});
function showMenu() {
    var x = document.getElementById("nav-bar");
    if (x.className === "nav navbar-nav main-menu") {
        x.className += " responsive";
    } else {
        x.className = "nav navbar-nav main-menu";
    }
}


function showSubMenu (title) {
  $('.show-on-hover').removeClass('opened');
  $('.cat-'+title).addClass('opened');
}


</script>


    </body>
</html>
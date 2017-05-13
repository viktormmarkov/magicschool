<!DOCTYPE html>
<!--
Template Name: Algenius
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Magic School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{url('css/index.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{url('css/overridebootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="{{url('js/jquery-2.0.3.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{url('js/rsvp.min.js')}}"></script>
    <script src="{{url('js/httpRequester.js')}}"></script>
    <script src="{{url('js/carousel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.js"></script>
    <script type="text/javascript">
    	console.log(_.filter);
    </script>
</head>
<body id="top">
  <div id="container" class="container" >

        @yield('content')
  </div>

</body>

</html>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{url('js/jquery-2.0.3.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{url('js/rsvp.min.js')}}"></script>
    <script src="{{url('js/httpRequester.js')}}"></script>
    <script src="{{url('js/carousel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.js"></script>

</head>
<body id="top">
  <div id="container" class="container" >
    <div id="success-msg" class="success">
        </div>
        <div id="error-msg" class="error">
        </div>
        @if(Auth::check() and Auth::user()->isTeacher())
                            <nav class="navbar navbar-inverse" role="navigation" style="width: 100%;">
                    <div class="navbar-header" style="width: 100%;">
                        <!--Teacher's Menu-->
                        <ul ul class="nav navbar-nav" style="width: 98%;">
                            <li>
                                <a href="{{url('/get-class')}}">
                                    <i class="fa fa-list"></i>
                                    Ученици
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/add-question')}}">
                                    <i class="fa fa-question-circle"></i>
                                    Създаване на въпрос
                                </a>
                            </li>
                            <li class="pull-right">
                                <a href="{{url('/logout')}}">
                                    Изход
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                            </ul>
                    </div>
                </nav>       
        @elseif(Auth::check() and Auth::user()->isStudent())
            <nav class="navbar navbar-inverse" role="navigation" style="width: 100%;">
                    <div class="navbar-header" style="width: 100%;">
                        <ul ul class="nav navbar-nav" style="width: 98%;">
                            <li class="pull-left">
                                <a href="{{url('/')}}">
                                   <i class="fa fa-user"></i>
                                    Профил
                                </a>
                            </li>
                            <li>
                                <a href="{{url('messages')}}">
                                   <i class="fa fa-envelope"></i>
                                    @if($new_messages)
                                        Нови Съобщения
                                        <span class="badge">{{$new_messages}}</span>
                                    @else
                                        Съобщения
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{url('questions')}}">
                                    <i class="fa fa-bell"></i>
                                    Въпроси 
                                     @if($new_questions)
                                        <span class="badge">{{$new_questions}}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="pull-right">
                                <a href="{{url('logout')}}">
                                    Изход
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>       

        @endif
        @yield('content')
  </div>
<script type="text/javascript">
    $('#error-msg').hide();
        $('#success-msg').hide();
</script>
</body>

</html>
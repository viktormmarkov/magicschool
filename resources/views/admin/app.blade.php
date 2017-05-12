<!DOCTYPE html>
<html>
    <head>
        <title>Adminstration</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
        <link href="{{ asset ('css/admin/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/admin/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="{{ asset ('css/admin/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset ('js/jquery-3.1.0.min.js') }} "></script>


        <script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/ckeditor/build-config.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/ckeditor/styles.js') }}"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
  </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{ url('/admin') }}">
                        Матраци Администрация             
                    </a>  
                    <a class="brand" style="float:right" href="{{ url('/admin/logout') }}">
                        Изход
                    </a>   
                </div> <!-- /container -->
            </div> <!-- /navbar-inner -->
        </div> <!-- /navbar -->
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li>
                            <a href="{{ url('admin/administrators') }}">
                                <i class="icon-user"></i>
                                <span>Администратори</span>
                            </a>                        
                        </li>
                        <li>
                            <a href="{{ url('admin/orders') }}">
                                <i class="icon-list-alt"></i>
                                <span>Списък Поръчки</span>
                            </a>                    
                        </li>
                        <li>                    
                            <a href="{{ url('admin/settings') }}">
                                <i class="icon-cog"></i>
                                <span>Настройки</span>
                            </a>                                    
                        </li>
                        <li>                    
                            <a href="{{ url('admin/header-images') }}">
                                <i class="icon-picture"></i>
                                <span>Снимки в хедъра</span>
                            </a>                                    
                        </li>
                        <li>                    
                            <a href="{{ url('admin/pages') }}">
                                <i class="icon-file"></i>
                                <span>Страници</span>
                            </a>                                    
                        </li>
                         <li>                    
                            <a href="{{ url('admin/categories') }}">
                                <i class="icon-shopping-cart"></i>
                                <span>Продукти</span>
                            </a>                                    
                        </li>
                        <li>                    
                            <a href="{{ url('/admin/characteristics') }}">
                                <i class="icon-pushpin"></i>
                                <span>Характеристики</span>
                            </a>                                    
                        </li>
                         <li>                    
                            <a href="{{ url('admin/news') }}">
                                <i class="icon-globe"></i>
                                <span>Новини</span>
                            </a>                                    
                        </li>
                         <li>                    
                            <a href="{{ url('admin/producers') }}">
                                <i class="icon-tags"></i>
                                <span>Производители</span>
                            </a>                                    
                        </li>             
                         <li>                    
                            <a href="{{ url('admin/banners') }}">
                                <i class="icon-bookmark"></i>
                                <span>Банери</span>
                            </a>                                    
                        </li>           
                         <li>                    
                            <a href="{{ url('admin/attribute-types') }}">
                                <i class="icon-list-alt"></i>
                                <span>Типове атрибути</span>
                            </a>                                    
                        </li>
                    </ul>
                </div> <!-- /container -->
            </div> <!-- /subnavbar-inner -->
        </div> <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
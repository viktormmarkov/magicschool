@extends('app')

@section('content')

<div class="col-md-8 col-md-offset-2 error-main-div">
	<div>
		<div class="col-md-5">
			<div class="error-div"><span class="error-number">404</span> <span class="error-text">error</span></div>
			<img class="error-img" src="{{url('img/error-404.png')}}">
		</div>
		<div class="col-md-7 error-right-div">
			<div class="error-info">Съжаляваме, търсената от Вас страница не е намерена</div>
			<div class="error-home-link"><a href="{{url('/')}}" class="view-button"><img src="{{url('img/home-error.png')}}">Върни се на началната страница</a><div class="clearfix"></div></div>
			<div class="error-quick-links"><a href="{{url('promocii')}}">Промоции</a><a href="{{url('matraci')}}">Матраци</a><a href="{{url('spalni')}}">Спални</a><a href="{{url('aksesoari')}}" class="last">Аксесоари</a></div>
		</div>
	</div>
	<div class="error-search-info col-md-12">Ако желаете може да използвате и търсачката на сайта</div>
</div>
@endsection
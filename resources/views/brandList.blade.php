@extends('app')

@section('content')
<div class="menu-tabs col-md-12">
{!!$menu_html!!}
</div>
<div class="clearfix"></div>

<div class="col-md-12 product-list">

@foreach($producers as $producer)
	<div class="col-md-2 product-div">
		<div class="product-info producer-info">
			<a href="{{url('brand/'.$producer->title)}}"><img src="{{url($producer->indeximage)}}" alt="{{$producer->name}}" title="{{$producer->name}} - {{$producer->name}}" class="product-info-img"></a>
		</div>
	</div>

@endforeach
</div>


@endsection
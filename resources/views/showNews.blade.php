@extends('app')

@section('content')


@foreach($news as $new)
	{{$new->title}}<img src="{{url($new->image)}}">
@endforeach

@endsection
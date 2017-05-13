@extends('app')

@section('content')
<div id="dialog">
</div>
<table class="table">
@foreach($questions as $question)
<tr>
	<td>{{$question->question}}</td>
</tr>
@endforeach
</table>

@endsection
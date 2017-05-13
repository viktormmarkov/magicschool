@extends('app')

@section('content')
	<table class="table">
		@foreach($messages as $message)
		<tr>
			<td>{{$message->Text}}</td>
		</tr>
		@endforeach
	</table>
@endsection
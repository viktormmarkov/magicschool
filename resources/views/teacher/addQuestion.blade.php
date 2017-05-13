@extends('app')

@section('content')
<div class="well register">
	<div class="centered">
	<form class="form-signin" method="post" action="{{url('add-question')}}">
		<div class="input-group-lg">
		<input class="form-control" type="text" name="quest" placeholder="Въпрос" autofocus><br />
	</div>
		<div class="input-group">
			<div class="input-group-addon">Верен?</div>
			<span class="form-control">Отговор</span>
		</div>
		<div class="input-group">
			<div class="input-group-addon"><input type="radio" name="right_answer" value="0"></div>
			<input class="form-control" type="text" name="answers[]" placeholder="Отговор 1">
		</div>

		<div class="input-group">
			<div class="input-group-addon"><input type="radio" name="right_answer" value="1"></div>
			<input class="form-control" type="text" name="answers[]" placeholder="Отговор 2">
		</div>

		<div class="input-group">
			<div class="input-group-addon"><input type="radio" name="right_answer" value="2"></div>
			<input class="form-control" type="text" name="answers[]" placeholder="Отговор 3">
		</div>

		<div class="input-group">
			<div class="input-group-addon"><input type="radio" name="right_answer" value="3"></div>
			<input class="form-control" type="text" name="answers[]" placeholder="Отговор 4">
		</div>

		<br />
		<input class="form-control" placeholder="Време" type="text" name="time">
		<br />
		<input class="form-control" placeholder="Точки опит (XP)" type="text" name="xp">
		<br />
		<input class="form-control" placeholder="Точки за умения (AP)" type="text" name="ap">
		<br />
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
				@foreach ($classes as $class)
					<li><a href="#">
						<label><input type="checkbox" name="classes[]" value="{{$class->id}}"> {{$class->name}}</label>
					</a></li>
				@endforeach
				</ul>
			</div>
		</nav>
		<input type="hidden" name="_token" value="{{csrf_token()}}"><br />
		<input class= "btn btn-primary btn-block" type="submit" name="save" value="Публикувай Въпрос">
	</form>
	</div>
</div>



@endsection
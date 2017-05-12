@extends('app')

@section('content')

<div class="col-xs-12 col-md-2">
<div id="sidebar" class="profile">
        <ul>
            <li class="active"><a href="{{ url('/profile') }}">Моят профил</a></li>
            <li><a href="{{ url('/profile/orders') }}">Моите покупки</a></li>
        </ul>
    </div>

</div>

<section id="login-content" class="login-content col-md-10">
	<div class="awe-parallax bg-login-content"></div>
	<div class="awe-overlay"></div>
	<div class="container">
		<div class="row">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				{{ Lang::get('content.error_msg') }}<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<!-- FORM -->
			<main class="col-xs-12 col-md-12">
				<div id="content" class="register-page no-sidebar">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12">
									<h2>Редактиране на профил</h2>
									<hr />
								</div>
							</div>
						</div>
					</div>
					<form method="post" action="{{url('/profile/edit') }}">
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
						<div class="row">
							<div class="col-xs-12">
								<h2>Лични данни</h2>
								<hr />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="ime" class="control-label required">Име <span class="required">*</span>:</label>
									<input required type="text" id="ime" name="name" required class="form-control" data-validation="required" data-validation-error-msg="Полето е задължително" value="{{ Auth::user()->name }}" />
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="familia" class="control-label required">Фамилия <span class="required">*</span>:</label>
									<input required type="text" id="familia" name="family" class="form-control" data-validation="required" data-validation-error-msg="Полето е задължително" value="{{ Auth::user()->family }}" />
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="telefon" class="control-label required">Телефон <span class="required">*</span>:</label>
									<input required type="text" id="telefon" name="phone" class="form-control" data-validation="required" data-validation-error-msg="Полето е задължително" value="{{ Auth::user()->phone }}" />
								</div>
							</div>
							<div class="col-xs-12"><hr /></div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<h2>Данни за достъп</h2>
								<hr />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="username" class="control-label required">E-mail <span class="required">*</span>:</label>
									<input required type="email" id="username" name="email" class="form-control" data-validation="email" data-validation-error-msg="Моля, въведете коректен e-mail адрес" value="{{ Auth::user()->email }}" />
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="password" class="control-label required">Парола <span class="required">*</span>:</label>
									<input required type="password" id="password" name="password" class="form-control" data-validation="length" data-validation-length="min8" data-validation-error-msg="Минимум 8 символа" />
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label for="password_confirm" class="control-label required">Повтори парола <span class="required">*</span>:</label>
									<input required type="password" id="password_confirm" name="password_confirmation" class="form-control" data-validation="confirmation" data-validation-error-msg="Паролите не съвпадат" />
								</div>
							</div>
							<div class="col-xs-12"><hr /></div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-md-3">
								<div class="row">
									<div class="form-group">
										<div class="col-xs-12">
											<input type="hidden" name="id" value="{{ Auth::user()->id }}">
											<button type="submit" class="btn btn-default btn-block register">Запази</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</main>
		</div>
	</div>
</section>
@endsection

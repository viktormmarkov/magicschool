@extends('app')

@section('content')
<section id="login-content" class="login-content">
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
    
                <div class="well register">
                <h1>Регистрация</h1>
                <form action="{{url('/register')}}" method="post" id="register_form">
                    <div class="form-group">
                    <input class="form-control" type="text" name="username" value="" placeholder="Потребителско име"/>
                    </div>
                    <div class="form-group">
                        <input required type="password" id="password" name="password" class="form-control" data-validation="length" data-validation-length="min8" data-validation-error-msg="Минимум 8 символа" />
                    </div>
                    <div class="form-group">
                        <input required type="password" id="password_confirm" name="password_confirmation" class="form-control" data-validation="confirmation" data-validation-error-msg="Паролите не съвпадат" />
                    </div>
                    <input class="form-control" type="name" name="name" value="" placeholder="Истинско име"/>

    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <input class="btn btn-success btn-lg btn-block" type="submit" name="register" value="Регистрирай" />
                </form>
            </div>

   

    
            </div>
        </div>
    </section>
@endsection

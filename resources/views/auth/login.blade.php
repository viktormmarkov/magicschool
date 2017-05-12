@extends('app')

@section('content')
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
<div class="well login">
<form class="form-signin" action="{{ url('/login') }}" method="post">
    <h2 class="form-signin-heading">Моля, впишете се</h2>
    <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Потребителско име" autofocus="">
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Парола"/>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="Вход"  />
</form>
</div>




@endsection

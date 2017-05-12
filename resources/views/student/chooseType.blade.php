@extends('app')

@section('content')

<form action="{{url('set-type')}}" method="post" id="character_type">
<input type="hidden" name="type" id="type"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
</form>


<div id="container">
    <div id="wrapper-character">
        <div class="content">
            <h1>Здравейте, {{Auth::user()->Name}}!</h1>
            <span>
                За да започнеш приключението си в нашата платформа, първо трябва да избереш типа на своя герой. Всеки герой има уникални специални умения.
            </span>
        </div>
        <div class="characters">
            <a id="spellcaster" onclick="Send_form('1')">
                <img src="{{url('/img/characters/spellcaster-small.jpg')}}">
            </a>
            <a id="warrior" onclick="Send_form('2')">
                <img src="{{url('/img/characters/warrior-small.jpg')}}">
            </a>
            <a id="ranger" onclick="Send_form('3')">
                <img src="{{url('/img/characters/ranger-small.jpg')}}">
            </a>
        </div>
    </div>
</div>


<script>
function Send_form(type) {
  $('#type').val(type);
  $('#character_type').submit();
  
}
</script>

@endsection

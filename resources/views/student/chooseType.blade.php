@extends('app')

@section('content')

<form action="{{url('set-type')}}" method="post" id="character_type">
<input type="hidden" name="type" id="type"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
</form>
<div id="container">
    <div id="wrapper-character">
        <div>
            <h1>Здравейте, {{Auth::user()->Name}}!</h1>
            <p>
                За да започнеш приключението си в нашата игра, първо трябва да избереш своя герой. Всеки от тях има специални способности. В зависимост от това как се справяш с работата в час и домашните работи ще получаваш различни награди. 
            </p>
            <p> Наградите за доброто ти представяне са: 
            <ul>
                <li><b>Точки опит</b> - С тези точки развиваш своя герой и му позволяваш да отключваш по-добри умения</li>
                <li><b>Точки действие</b> - Благодарение на тях използваш <b>активните</b> умения на своя герой</li>
            </ul>
            </p>

        </div>
        <div id="carousel" class="hidden-xs hidden-sm" style="height: 600px">
            <div class="character-card"> 
            <div class="hero-card-header">Магьосник</div>

            <img src="{{url('/img/characters/spellcaster-small.jpg')}}">
            <div class="hero-description">
             <button class="btn btn-primary block full-width" onclick="Send_form('1')">Потвърди</button>
            Силата на магьосниците е в писмените изпитвания. Имат умения, които определено улесняват живота.
            </div>
            </div>
            <div class="character-card">
            <div class="hero-card-header">Боец</div>
            <img src="{{url('/img/characters/warrior-small.jpg')}}">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('2')">Потвърди</button>
            Боецът е несломим, когато стане дума за съревнование очи в очи. 
            </div>
            </div>
            <div class="character-card">
            <div class="hero-card-header">Стрелец</div>
            <img src="{{url('/img/characters/ranger-small.jpg')}}">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('3')">Потвърди</button>
            Лукаво се сдобива с данни от другите герои и ги използва в своя полза.
            </div>
            </div>
        </div>
        <div class="hidden-md hidden-lg" style="height: 600px">
            <div class=""> 
            <div class="hero-card-header">Магьосник</div>

            <img src="{{url('/img/characters/spellcaster-small.jpg')}}" class="full-width">
            <div class="hero-description">
             <button class="btn btn-primary block full-width" onclick="Send_form('1')">Потвърди</button>
             Силата на магьосниците е в писмените изпитвания. Имат умения, които определено улесняват живота.
            </div>
            </div>
            <div class="">
            <div class="hero-card-header">Боец</div>
            <img src="{{url('/img/characters/warrior-small.jpg')}}" class="full-width">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('2')">Потвърди</button>
             Боецът е несломим, когато стане дума за съревнование очи в очи.
            </div>
            </div>
            <div class="">
            <div class="hero-card-header">Стрелец</div>
            <img src="{{url('/img/characters/ranger-small.jpg')}}" class="full-width">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('3')">Потвърди</button>
            Лукаво се сдобива с данни от другите герои и ги използва в своя полза.
            </div>
            </div>
        </div>
    </div>
</div>


<script>

$( ".character-card" ).click(function(event) {
  $(".active-hero").removeClass("active-hero");
  $(event.currentTarget).addClass("active-hero");
});


function Send_form(type) {
  $('#type').val(type);
  $('#character_type').submit();
  
}
</script>

<script type="text/javascript">
    $("#carousel").Cloud9Carousel({
        autoPlay: 0,
        bringToFront: true,
        speed: 2,
        yRadius: 0,
        itemClass: 'character-card'
    });
</script>
@endsection

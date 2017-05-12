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
            <span>
                За да започнеш приключението си в нашата платформа, първо трябва да избереш типа на своя герой. Всеки герой има уникални специални умения.
            </span>
        </div>
        <div id="carousel" style="height: 600px">
            <div class="character-card"> 
            <div class="hero-card-header">Магьосник</div>

            <img src="{{url('/img/characters/spellcaster-small.jpg')}}">
            <div class="hero-description">
             <button class="btn btn-primary block full-width" onclick="Send_form('2')">Потвърди</button>
            Известен факт е, че читателя обръща внимание на съдържанието, което чете, а не на оформлението му.
            </div>
            </div>
            <div class="character-card">
            <div class="hero-card-header">Боец</div>
            <img src="{{url('/img/characters/warrior-small.jpg')}}">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('2')">Потвърди</button>
            Известен факт е, че читателя обръща внимание на съдържанието, което чете, а не на оформлението му.
            </div>
            </div>
            <div class="character-card">
            <div class="hero-card-header">Стрелец</div>
            <img src="{{url('/img/characters/ranger-small.jpg')}}">
            <div class="hero-description">
            <button class="btn btn-primary block full-width" onclick="Send_form('3')">Потвърди</button>
            Известен факт е, че читателя обръща внимание на съдържанието, което чете, а не на оформлението му.
            </div>
            </div>
        </div>
    </div>
</div>


<script>

$( ".character-card" ).click(function(event) {
  $(".active-hero").removeClass("active-hero");
  console.log(event);
  $(event.currentTarget).addClass("active-hero");
});


function Send_form(type) {
  $('#type').val(type);
  $('#character_type').submit();
  
}
</script>

<script type="text/javascript">
    $("#carousel").Cloud9Carousel( {
  autoPlay: 0,
  bringToFront: true,
  speed: 2,
  yRadius: 0,
  itemClass: 'character-card'
} );
</script>
@endsection

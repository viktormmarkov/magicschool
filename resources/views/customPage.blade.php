@extends('app')

@section('content')
<div class="col-md-12">
	{!!$pageInfo->info!!}
	@if ($pageInfo->title == 'kontakti')   

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIoVChXrgDz1FuXVJHuRCbIA5Il5Cl0aI&callback=initMap"
  type="text/javascript"></script><div><div id='gmap_canvas' style="width: 100%;
   height: 400px;
   background-color: grey;"></div></div>

   <script type='text/javascript'>function initMap(){
   		var uluru = {lat: 43.232347, lng: 27.87994809999998};
        var map = new google.maps.Map(document.getElementById('gmap_canvas'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        }</script>
        
	@endif
</div>

@endsection

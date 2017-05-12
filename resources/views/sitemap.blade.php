@extends('app')

@section('content')
<div class="banner col-md-12 nopadding">
	<div class="col-md-12 nopadding sitemap">
  <span class="sitemap-header"> Карта на сайта </span>
    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[0]['title'])}}"> {!!$categories[0]['name']!!} </a>
        @foreach ($categories[0]->getSubCategories() as $subcat)
          <a href="{{url($categories[0]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach
     
    </div>
    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[1]['title'])}}"> {!!$categories[1]['name']!!} </a>
        @foreach ($categories[1]->getSubCategories() as $subcat)
          <a href="{{url($categories[1]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach

      <a class="sitemap-title" href="{{url($categories[2]['title'])}}"> {!!$categories[2]['name']!!} </a>
        @foreach ($categories[2]->getSubCategories() as $subcat)
          <a href="{{url($categories[2]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach
    </div>
    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[3]['title'])}}"> {!!$categories[3]['name']!!} </a>
        @foreach ($categories[3]->getSubCategories() as $subcat)
          <a href="{{url($categories[3]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach
    </div>
    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[4]['title'])}}"> {!!$categories[4]['name']!!} </a>
        @foreach ($categories[4]->getSubCategories() as $subcat)
          <a href="{{url($categories[4]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach
    </div>

    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[5]['title'])}}"> {!!$categories[5]['name']!!} </a>
        @foreach ($categories[5]->getSubCategories() as $subcat)
          <?$subsubcats=$subcat->getSubCategories()?>
          <a href="{{url($categories[5]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}} @if (isset($subsubcats[0])) > @endif </a>
            @if (isset($subsubcats[0]))
                  @foreach ($subsubcats as $subsubcat)
                    <a href="{{url($subcat['title'].'/'.$subsubcat['title'])}}"> > {{$subsubcat['name']}}</a>
                  @endforeach
                @endif
        @endforeach
    </div>

    <div class="col-md-2">
      <a class="sitemap-title" href="{{url($categories[6]['title'])}}"> {!!$categories[6]['name']!!} </a>
        @foreach ($categories[6]->getSubCategories() as $subcat)
          <a href="{{url($categories[6]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach

      <a class="sitemap-title" href="{{url($categories[7]['title'])}}"> {!!$categories[7]['name']!!} </a>
        @foreach ($categories[7]->getSubCategories() as $subcat)
          <a href="{{url($categories[7]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach

      <a class="sitemap-title" href="{{url($categories[8]['title'])}}"> {!!$categories[8]['name']!!} </a>
        @foreach ($categories[8]->getSubCategories() as $subcat)
          <a href="{{url($categories[8]['title'].'/'.$subcat['title'])}}">{{$subcat['name']}}</a>
        @endforeach
    </div>    
	</div>
</div>

@endsection
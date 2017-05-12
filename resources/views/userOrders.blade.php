@extends('app')

@section('content')
<div class="col-xs-12 col-md-2">
<div id="sidebar" class="profile">
        <ul>
            <li><a href="{{ url('/profile') }}">Моят профил</a></li>
            <li class="active"><a href="{{ url('/profile/orders') }}">Моите покупки</a></li>
        </ul>
    </div>

</div>
<section id="login-content" class="login-content col-md-10">
<div class="table-responsive">
@if(isset($orders) and count($orders)>0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Номер на поръчка</th>
                                            <th class="text-center">Дата на поръчката</th>
                                            <th class="text-center">Брой продукти</th>
                                            <th class="text-center">Обща стойност</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                    	@foreach($orders as $key=>$order)
                                        <tr class="active">
                                            <td class="text-center">{{$order->id}}</td>
                                            <td class="text-center">{{$order->created_at}}</td>
                                            <td class="text-center">@foreach($order->products as $p)
                                            							{{$p->pivot->count}} x {{$p->name}}<br>
                                            							
                                            						@endforeach</td>
                                            <td class="text-center">{{$prices[$key]}} лв.</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                @else 
                                <h1> Все още нямате направени поръчки </h1>
                                @endif
                            </div>

</section>
@endsection

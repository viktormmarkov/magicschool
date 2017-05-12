@extends('admin/app')

@section('content')
<div class="container">
<div style="min-height: 300px;">
	<div>
		<h4>Преглед поръчка</h4>
	</div>
	ID : {{ $order->id }} <br>
	Дата : {{ $order['created_at'] }} <br>
	

	@foreach ($order->products as $product)

		Продукти : <br>
		{{ $product->producer->name}} {{$product->name}} ;
		
		@foreach($product->size as $productSizes)
			@if($product->pivot->size_id == $productSizes->id)
				Размер :  {{ $productSizes->size }} ;
				Цена : {{ $productSizes->price }} лв.; <br>
			@endif
		@endforeach
	@endforeach

	

	От : {{ $order['name'] }} {{ $order['family'] }}<br>
	Телефон : {{ $order['phone'] }} <br> 
	Email : {{ $order['email'] }} <br> 
	Град : {{ $order['city'] }} <br>
	Адрес : {{ $order['address'] }} <br>
	Начин на плащане : {{ $order['payment_type'] }} <br> 

	-------------------------------------------<br>
	Допълнителна информация : <br>
	{{ $order['description'] }}  
	<br><br>
	@if (isset($order['firm_name']))
		Име на фирмата: {{$order['firm_name']}}<br>
		ЕИК на фирмата: {{$order['firm_eik']}}<br>
		Адрес на фирмата: {{$order['firm_address']}}<br>
		МОЛ на фирмата: {{$order['firm_mol']}}<br>
	@endif
</div>
</div>
@endsection 


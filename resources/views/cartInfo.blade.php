@extends('app')

@section('content')
	<h1>Поръчка</h1>
	<div class="col-md-9 no-padding-left">
		<div class="order-list content">
		<?php $price=0;$delivery=0; ?>
		<?$catTitle = '' ?>
		@if (isset($products))
			@foreach ($products as $product)
			<?php $price+=($product['old_price']*$product['count']); ?>
				<div class="order-item" id="item{{$product['size_id']}}">
					<div class="order-image col-md-3">

		      	<?php $images = explode(',',$product['image']);?>
					<img src="{{url($images[0])}}">
					</div>
					<div class="col-md-9">
						<div class="order-info col-md-6">
							<p class="name"> {{$product['type']}}</p>
							<p class="brand"> {{$product['name']}}</p>
							<p class="size">размер: {{$product['size']}}</p>
						</div>

						<div class="item-count col-md-3">
							<select id="product_count{{$product['size_id']}}" onchange="updateCart({{$product['size_id']}},$(this).val(),{{$product['old_price']}},'{{ csrf_token() }}')">
								<option value="1" @if($product['count'] == 1) selected @endif>1</option>
								<option value="2" @if($product['count'] == 2) selected @endif>2</option>
								<option value="3" @if($product['count'] == 3) selected @endif>3</option>
								<option value="4" @if($product['count'] == 4) selected @endif>4</option>
								<option value="5" @if($product['count'] == 5) selected @endif>5</option>
								<option value="6" @if($product['count'] == 6) selected @endif>6</option>
								<option value="7" @if($product['count'] == 7) selected @endif>7</option>
								<option value="8" @if($product['count'] == 8) selected @endif>8</option>
								<option value="9" @if($product['count'] == 9) selected @endif>9</option>
								<option value="10" @if($product['count'] == 10) selected @endif>10</option>
							</select>
							<input type="hidden" id="currentCount{{$product['size_id']}}" value="{{$product['count']}}">
							<label>бр.</label>
						</div>

						<div class="item-price col-md-3">
						@if ($product['price']!=$product['old_price'])
							<div class="old-price">
								<p class="old-price-label">стара цена:</p>

								<span class="price-line-through">
									<p class="old-price-val">{{$product['price']}} лв.</p>
								</span>
							</div>
						@endif
							<p class="price">{{$product['old_price']}}<span>лв.</span></p>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-6"><a href="{{url($product['catTitle'])}}">Избери съвместим продукт</a></div>
						<div class="col-md-3 col-md-offset-3"><a onclick="removeProduct({{$product['size_id']}},'{{ csrf_token() }}',{{$product['old_price']}})" class="pointer">Изтрий</a></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<?$catTitle = isset($product['catTitle'])? $product['catTitle'] : '' ?>
				<?if($product['delivery']>0) $delivery+=$product['old_price']*$product['count']*$product['delivery']/100;?>
				<?
                $delivery = round($delivery);
                ?>
				@endforeach
				@endif
			<input type="hidden" id="deliveryInput" value="{{$delivery}}">

				<? if($price < 100) $delivery += 6; ?>
			<div class=" total-order no-mobile">
				<div class="col-md-offset-6 col-md-3">
					<p>Общо продукти:</p>

					<p class="green not-free" @if ($delivery==0) style="display:none" @endif>Доставка:</p>
					<p class="green free-delivery" @if ($delivery>0) style="display:none" @endif>Безплатна доставка</p>
					<p>Обща цена:</p>
				</div>
				<div class="col-md-3">
					<p><span class="span-price">{{$price}}</span>лв.</p>
					<p class="green not-free" @if ($delivery==0) style="display:none" @endif><span class="delivery-price-span">{{$delivery}}</span>лв.</p>
					<br class="free-delivery" @if ($delivery>0) style="display:none" @endif>
					<p> <span  class="full-price-span">{{$price+$delivery}}</span>лв.</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>


	</div>

	<div class="col-md-3 content order-info">
		<p class="title">ИНФОРМАЦИЯ ЗА ПОРЪЧКАТА</p>
		<p>Общо продукти: <span id="span-price" class="span-price">{{$price}}</span>лв.</p>
		<p class="green not-free" @if ($delivery==0) style="display:none" @endif>Доставка: <span class="delivery-price-span">{{$delivery}}</span>лв.</p>
		<p class="green free-delivery" @if ($delivery>0) style="display:none" @endif>Безплатна доставка</p>
		
		<hr>
		<p class="total-price">Общо:<br><span id="full-price-span" class="full-price-span">{{$price+$delivery}}</span>лв.</p>

		<button data-toggle="modal" data-target="#paymentMethods">ЗАВЪРШИ ПОРЪЧКАТА</button>
		<a href="{{url('/brand/'.$catTitle)}}" class="view-button">ПРОДЪЛЖИ С ПАЗАРУВАНЕТО</a>

	</div>
	<div class="clearfix"></div>
	<div class="modal fade" role="dialog" id="paymentMethods">
    <div class="vertical-alignment-helper">
	    <div class="modal-dialog vertical-align-center">
			<div class="modal-content">
        	<button class="close-modal" data-toggle="modal" data-target="#paymentMethods">x</button>
				<div class="col-md-offset-1">
				<h1>ИЗБЕРЕТЕ НАЧИН НА ПОРЪЧКА</h1>
				</div>
				<div class="col-md-offset-1 col-md-10 pay-types">
						<button onclick="sendPaymentInfo('no-reg')">ПОРЪЧАЙ <br>БЕЗ РЕГИСТРАЦИЯ</button>
						<button onclick="sendPaymentInfo('reg')">ПОРЪЧАЙ <br>С РЕГИСТРАЦИЯ</button>
						<button onclick="window.location='{{$loginUrl}}'"><img src="{{url('/img/facebook.png')}}" class="fb-login-logo">РЕГИСТРИРАЙ СЕ <br>ПРЕЗ ФЕЙСБУК</button>
						<button onclick="window.location='{{url('/auth/login')}}'">РЕГИСТРИРАНИ <br>КЛИЕНТИ</button>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	</div>
<form method="post" action="{{url('/payment')}}" class="hidden" id="payment-form">
	<input type="hidden" name="payment-type" id="payment-type">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>


<script>
  function closeModal() {

    $('body').removeClass('modal-open');
    $('#paymentMethods').removeClass('in');
    $('#paymentMethods').hide();
  }
function sendPaymentInfo(type) {
	$('#payment-type').val(type);
	$('#payment-form').submit();
}
function updateCart(size_id,count,price,token) {
    $.post( "{{url('/updatecart')}}",{ size_id: size_id, count: count,'_token':token  }).done(function( data ) {

       var curPrice = parseInt($('#span-price').html());
       var curFullPrice = parseInt($('#full-price-span').html());
       var currentCount = parseInt($('#currentCount'+size_id).val());
       $('#currentCount'+size_id).val(count);
     
       var totalPrice = curPrice+(count-currentCount)*price;
       var deliveryInput = parseInt(data);
       if(totalPrice>=100 && deliveryInput==0) {
		  totalPriceDel = totalPrice;
		  $('.not-free').hide();
		  $('.free-delivery').show();
       }  
       else {
       	deliveryInput = deliveryInput ==0 ? 6 : deliveryInput;
		  totalPriceDel = totalPrice+deliveryInput;
		  $('.delivery-price-span').html(deliveryInput);
		  $('.not-free').show();
		  $('.free-delivery').hide();

       }

       $('.span-price').html(totalPrice);
       $('.full-price-span').html(totalPriceDel);
    });
 
}

function removeProduct(size_id,token,price) {

    $.post( "{{url('/removeproduct')}}",{ size_id: size_id, '_token':token  }).done(function( data ) {
    	
       
       var curPrice = parseInt($('#span-price').html());
       var curFullPrice = parseInt($('#full-price-span').html());
       var currentCount = parseInt($('#currentCount'+size_id).val());
       price = parseInt(price);
       $('#item'+data).remove();
       var totalPrice = curPrice-currentCount*price;
       if(totalPrice>=100) {
		  totalPriceDel = totalPrice;
		  $('.not-free').hide();
		  $('.free-delivery').show();
       }  
       else {
		  totalPriceDel = totalPrice+6;
		  $('.delivery-price-span').html(6);
		  $('.not-free').show();
		  $('.free-delivery').hide();

       }

       $('.span-price').html(totalPrice);
       $('.full-price-span').html(totalPriceDel);
    });
}
</script>
@endsection
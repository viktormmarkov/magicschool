@extends('app')

@section('content')
	<h1>Плащане</h1>
	<div class="col-md-12">
		<form>
		<div class="content order-details">

			<div class="col-md-6">
				<div class="profile-data">			
					<h2>ДАННИ ЗА ПРОФИЛ</h2>

					<div class="col-md-12">
						<label>Име:</label>
						<input type="text" name="name">
					</div>
					<div class="col-md-12">
						<label>Фамилия:</label>
						<input type="text" name="family">
					</div>
					<div class="col-md-12">
						<label>Имейл:</label>
						<input type="text" name="email">
					</div>
					<div class="col-md-12">
						<label>Телефон:</label>
						<input type="text" name="phone">
					</div>
					@if($regType=='reg')
						<div class="col-md-12">
							<label>Парола:</label>
							<input type="password" name="password">
						</div>
						<div class="col-md-12">
							<label>Повтори паролата:</label>
							<input type="password" name="password_repeat">
						</div>
					@endif
							<div class="clearfix"></div>
				</div>
				<div class="delivery-data">			
					<h2>АДРЕС ЗА ДОСТАВКА</h2>

					<div class="col-md-12">
						<label>Адрес:</label>
						<input type="text" name="address">
					</div>
					<div class="col-md-12">
						<label>Населено място:</label>
						<input type="text" name="city">
					</div>
					<div class="col-md-12">
						<label>Област:</label>
						<input type="text" name="region">
					</div>
					
					<div class="clearfix"></div>
				</div>

				<div class="invoice-data">			
					<h2>ДАННИ ЗА ФАКТУРА</h2>
					<p class="hint">/Попълва се само ако клиента желае фактура/</p>
					<div class="col-md-12">
						<label>Фирма:</label>
						<input type="text" name="firm_name">
					</div>
					<div class="col-md-12">
						<label>ЕИК/БУЛСТАТ:</label>
						<input type="text" name="firm_eik">
					</div>
					<div class="col-md-12">
						<label>Адрес на фирмата:</label>
						<input type="text" name="firm_address">
					</div>
					<div class="col-md-12">
						<label>МОЛ:</label>
						<input type="text" name="firm_mol">
					</div>
					<div class="clearfix"></div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="clearfix"></div>


				<div class="paytype-info">
					<h2>ПЛАЩАНЕ</h2>
					<div class="col-md-12">
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="cash" onclick="OpenPaymentType('cash')">Плащане с наложен платеж</label></div>
					<div class="col-xs-4">
					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="bnp" onclick="OpenPaymentType('bnp')">На изплащане с БНП париба лични финанси</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_pariba.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="tbi" onclick="OpenPaymentType('tbi')">На изплащане с TBI Bank</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_TBI.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="unicredit" onclick="OpenPaymentType('unicredit')">На изплащане с UniCredit consumer financing</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_uni_credit.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="paypal" onclick="OpenPaymentType('paypal')">Плащане с PayPal</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_pay_pal.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="bank" onclick="OpenPaymentType('bank')">Плащане с банков превод</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_bank.png')}}">
					<div class="clearfix"></div>

					</div>
					<div class="col-xs-8">
						<label><input type="radio" name="payment-type" value="pariba" onclick="OpenPaymentType('pariba')">Плащане с карта</label></div>
					<div class="col-xs-4">
							<img src="{{url('img/logo_master_card.png')}}">
					<div class="clearfix"></div>
					</div>
					</div>
					<div class="clearfix"></div>
					</div>
<div class="clearfix"></div>
				</div>
					<div class="clearfix"></div>

				<div class="order-list content">
					<h2>КОШНИЦА</h2>
					<?php $price=0;$delivery=0; ?>
					@if (isset($products))
						@foreach ($products as $product)
						<?php $price+=($product['price']*$product['count']); ?>
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
										<select id="product_count{{$product['size_id']}}" onchange="updateCart({{$product['size_id']}},$(this).val(),'{{ csrf_token() }}')">
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
								</div>
								<div class="clearfix"></div>
							</div>
							@endforeach
							@endif
							<? if($price < 100) $delivery = 6; ?>

						<div class=" total-order">
							<div class="col-md-offset-3 col-md-6">
								<p>Общо продукти:</p>

								<p class="green not-free" @if ($delivery==0) style="display:none" @endif>Доставка:</p>
								<p class="green free-delivery" @if ($delivery>0) style="display:none" @endif>Безплатна доставка</p>
					
								<p>Обща цена:</p>
							</div>

							<div class="col-md-3">
								<p>{{$price}}лв.</p>
								<p class="green not-free" @if ($delivery==0) style="display:none" @endif><span class="delivery-price-span">{{$delivery}}</span>лв.</p>
								<br class="free-delivery" @if ($delivery>0) style="display:none" @endif>
								<p>{{$price+$delivery}}лв.</p>
							</div>

							<div class="clearfix"></div>
						</div>

					</div>

				<div class="more-info paytypes" id="bank" style="display:none;">
					<h2>ДАННИ ЗА ПЛАЩАНЕ</h2>
					
					
				</div>	
				
				<div class="more-info paytypes" id="cash" style="display:none;">
					<h2>ДАННИ ЗА ПЛАЩАНЕ В КЕШ</h2>
					
					
				</div>

				<div class="more-info paytypes" id="unicredit" style="display:none;">
					<h2>УНИКРЕДИТ</h2>
					<p class="scheme_value">Кредит за {{$price}} лв.</p>
					<table cellspacing="0" cellpadding="0" border="0" class="schemes_table"  id="schemes_table">
						<tr>
							<th>Брой месеци</th>
							<th>Вноска на месец</th>
							<th>Първоначална вноска</th>
							<th>Крайна цена</th>
						</tr>
						@foreach ($uniCreditData as $item)
						<tr id="months">
							<td style="text-align:left;"><label><input type="radio" name="months" value="@if ($item['is_special']){{$item['months']+2000}}
								@elseif ($item['insurance']) {{$item['months']+1000}}
									@else {{$item['months']}}@endif"/> {{$item['months']}} месеца 
									@if ($item['insurance'] == 1) + Застраховка @endif
									@if ($item['is_special']) <b>0% лихва</b>
									@endif
									</td>
							<td>{{$item['per_month']}} лв.</td>
							<td>@if ($item['is_special']){{$item['downpayment']}}@else 0.00 @endif лв</td>
							<td>{{$item['total']}} лв.</td>
						</tr>
						@endforeach
					</table>
					
				</div>	
				
				<div class="more-info">
					<h2>ДОПЪЛНИТЕЛНО ПОЯСНЕНИЕ</h2>
				
					<textarea class="more-info-text"></textarea>
				</div>	

				<div class="terms-agree">
					<label><input type="checkbox" name="agree_terms" value="1"> Съгласен съм с общите условия.</label>
					<a href="{{url('terms')}}" target="_blank"> Виж общите условия</a>
				</div>	

			</div>
			<div class="clearfix"></div>
		</div>
		</form>
	</div>
	<div class="clearfix"></div>
	

<script>
function OpenPaymentType(id) {
	$('.paytypes').hide();
	$('#'+id).show();
}
</script>
@endsection
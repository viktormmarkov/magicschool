@extends('app')

@section('content')
	<h1>Плащане</h1>
	<div class="col-md-12">
		<form method="post" action="{{url('/Order')}}">
		<div class="content order-details">
		{{csrf_field()}}
			<div class="col-md-6">
				<div class="profile-data">			
					<h2>ДАННИ ЗА ПРОФИЛ</h2>

					<div class="col-md-12">
						<label>Име <span class="required">*</span>:</label>
						<input type="text" name="name" required value="@if(Auth::check()){{ Auth::user()->name}}@endif">
					</div>
					<div class="col-md-12">
						<label>Фамилия<span class="required">*</span>:</label>
						<input type="text" name="family" required  value="@if(Auth::check()){{ Auth::user()->family}}@endif">
					</div>
					<div class="col-md-12">
						<label>Имейл<span class="required">*</span>:</label>
						<input type="text" name="email" required  value="@if(Auth::check()){{ Auth::user()->email}}@endif">
					</div>
					<div class="col-md-12">
						<label>Телефон<span class="required">*</span>:</label>
						<input type="text" name="phone" required  value="@if(Auth::check()){{ Auth::user()->phone}}@endif">
					</div>
					<div class="col-md-12 credit" style="display: none">
						<label>ЕГН<span class="required">*</span>:</label>
						<input type="text" name="egn" required  value=" ">
					</div>
					@if($regType=='reg')
						<div class="col-md-12">
							<label>Парола<span class="required">*</span>:</label>
							<input type="password" name="password" required>
						</div>
						<div class="col-md-12">
							<label>Повтори паролата<span class="required">*</span>:</label>
							<input type="password" name="password_confirmation" required>
						</div>
					@endif
							<div class="clearfix"></div>
				</div>
				<div class="delivery-data">			
					<h2>АДРЕС ЗА ДОСТАВКА</h2>

					<div class="col-md-12">
						<label>Адрес<span class="required">*</span></label>
						<input type="text" name="address" required >
					</div>
					<div class="col-md-12">
						<label>Населено място<span class="required">*</span></label>
						<input type="text" name="city" required>
					</div>
					<div class="col-md-12">
						<label>Област<span class="required">*</span></label>
						<input type="text" name="region" required>
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

				<div class="more-info">
					<h2>ДОПЪЛНИТЕЛНО ПОЯСНЕНИЕ</h2>
				
					<textarea class="more-info-text" name="description"></textarea>
				</div>	

			</div>

			<div class="col-md-6">
				<div class="clearfix"></div>


				<div class="paytype-info">
					<h2>ПЛАЩАНЕ</h2>
					<div class="col-md-12">
					<div class="col-md-8 col-xs-12">
						<label><input type="radio" name="payment-type" value="cash" onclick="OpenPaymentType('cash')" checked="">Плащане с наложен платеж</label></div>
					<div class="col-xs-4 no-mobile">
					</div>
					@if($total_price>200)
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_pariba.png')}}"></div>
						<label><input type="radio" name="payment-type" value="pariba" onclick="OpenPaymentType('pariba')">На изплащане с БНП париба лични финанси</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_pariba.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_TBI.png')}}"></div>
						<label><input type="radio" name="payment-type" value="tbi" onclick="OpenPaymentType('tbicredit')">На изплащане с TBI Bank</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_TBI.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_uni_credit.png')}}"></div>
						<label><input type="radio" name="payment-type" value="unicredit" onclick="OpenPaymentType('unicredit')">На изплащане с UniCredit consumer financing</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_uni_credit.png')}}">
					<div class="clearfix"></div>
					</div>
					@endif
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_pay_pal.png')}}"></div>
						<label><input type="radio" name="payment-type" value="paypal" onclick="OpenPaymentType('paypal')">Плащане с PayPal</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_pay_pal.png')}}">
					<div class="clearfix"></div>
					</div>
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_bank.png')}}"></div>
						<label><input type="radio" name="payment-type" value="bank" onclick="OpenPaymentType('bank')">Плащане с банков превод</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_bank.png')}}">
					<div class="clearfix"></div>

					</div>
					<div class="col-md-8 col-xs-12">
					<div class="col-xs-12 mobile"><img src="{{url('img/logo_master_card.png')}}"></div>
						<label><input type="radio" name="payment-type" value="borica" onclick="OpenPaymentType('borica')">Плащане с карта</label></div>
					<div class="col-xs-4 no-mobile">
							<img src="{{url('img/logo_master_card.png')}}">
					<div class="clearfix"></div>
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
										<select id="product_count{{$product['size_id']}}" disabled onchange="updateCart({{$product['size_id']}},$(this).val(),'{{ csrf_token() }}')">
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
							<?if($product['delivery']>0) $delivery+=$product['old_price']*$product['count']*$product['delivery']/100?>
							
								<?
				                $delivery = round($delivery);
				                ?>
							@endforeach
							@endif
							<? if($price < 100) $delivery += 6; ?>

						<div class=" total-order">
						<div class="mobile col-xs-12"> 
								<p class="green free-delivery" @if ($delivery>0) style="display:none" @endif>Безплатна доставка</p>
								</div>
							<div class="col-md-offset-3 col-xs-6">
								<p class="no-mobile">Общо продукти:</p>

								<p class="green not-free " @if ($delivery==0) style="display:none" @endif>Доставка:</p>
								<p class="green free-delivery no-mobile" @if ($delivery>0) style="display:none" @endif>Безплатна доставка</p>
					
								<p>Обща цена:</p>
							</div>

							<div class="col-xs-3">
								<p class="no-mobile">{{$price}}лв.</p>
								<p class="green not-free" @if ($delivery==0) style="display:none" @endif><span class="delivery-price-span">{{$delivery}}</span>лв.</p>
								<br class="free-delivery no-mobile" @if ($delivery>0) style="display:none" @endif>
								<p>{{$price+$delivery}}лв.</p>
							</div>

							<div class="clearfix"></div>
						</div>

					</div>

				<div class="more-info paytypes" id="bank" style="display:none;">
					<h2>ДАННИ ЗА ПЛАЩАНЕ</h2>
					<p>На посочения имейл ще ви изпратим данните нужни за плащане по банков път</p>
					
					
				</div>	
				
				<div class="more-info paytypes" id="cash2" style="display:none;">
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
							<td style="text-align:left;"><label><input onclick="changePlanName(this)" type="radio" checked name="months" value="@if ($item['is_special']){{$item['months']+2000}}
								@elseif ($item['insurance']) {{$item['months']+1000}}
									@else {{$item['months']}}@endif"/> {{$item['months']}} месеца 
									@if ($item['insurance'] == 1) + Застраховка @endif
									@if ($item['is_special']) <b>0% лихва</b>
									@endif
									</td>
							<td>{{$item['per_month']}} лв.</td>
							<td>0.00 лв</td>
							<td>{{$item['total']}} лв.</td>
						</tr>
						@endforeach
					</table>
					
				</div>	

				<div class="more-info paytypes" id="tbicredit" style="display:none;">
					<h2>ТБИ КРЕДИТ</h2>
					<p class="scheme_value">Кредит за {{$price}} лв.</p>
					<table cellspacing="0" cellpadding="0" border="0" class="schemes_table"  id="schemes_table">
						<tr>
							<th>Брой месеци</th>
							<th>Вноска на месец</th>
							<th>Първоначална вноска</th>
							<th>Крайна цена</th>
						</tr>
						@foreach ($tbiCreditData as $item)
						<tr id="months">
							<td style="text-align:left;"><label><input onclick="changePlanName(this)" type="radio" checked name="months" value="@if ($item['is_special']){{$item['months']+2000}}
								@elseif ($item['insurance']) {{$item['months']+1000}}
									@else {{$item['months']}}@endif"/> {{$item['months']}} месеца @if ($item['is_special']) 0% лихва @endif
									</td>
							<td>{{$item['per_month']}} лв.</td>
							<td>@if ($item['is_special']){{$item['downpayment']}}@else 0.00 @endif лв</td>
							<td>{{$item['total']}} лв.</td>
						</tr>
						@endforeach
					</table>
					
				</div>	

				<div class="more-info paytypes" id="pariba" style="display:none;">
					<h2>БНП ПАРИБА ЛИЧНИ ФИНАНСИ</h2>
					@if(isset($paribaCreditData) and count($paribaCreditData)>0)

					<p class="scheme_value">Кредит за {{$price}} лв.</p>

					<table cellspacing="0" cellpadding="0" border="0" class="schemes_table"  id="schemes_table">
						<tr>
							<th>Брой месеци</th>
							<th>Вноска на месец</th>
							<th>ГЛП</th>
							<th>ГПР</th>
							<th>Първоначална вноска</th>
							<th>Обща стойност</th>
						</tr>
						@foreach ($paribaCreditData as $k=>$item)
						<tr id="scheme_months" >
							<td style="text-align:left;"><label><input onclick="changePlanName(this)" type="radio" name="months" value="{{$k}}" class="" checked /> {{$item['PricingSchemeName']}} ({{$k}} месеца)</label></td>
							<td>{{$item['InstallmentAmount']}} лв.</td>
							<td>{{$item['NIR']}} %</td>
							<td>{{$item['APR']}} %</td>
							<td>{{$item['CorrectDownPaymentAmount']}} лв.</td>
							<td>{{$item['TotalRepaymentAmount']}} лв.</td>
						</tr>
						@endforeach
					</table>
					@else 
						<p class="scheme_value">ТОЗИ ПРОДУКТ НЕ СЕ ПРЕДЛАГА НА КРЕДИТ ОТ БНП ПАРИБА</p>
					@endif
			</div>
				

				<div class="terms-agree">
					<label><input type="checkbox" name="agree_terms" value="1" required> Съгласен съм с <a href="{{url('terms')}}" target="_blank">общите условия</a>.</label>
				</div>	
				<input type="hidden" name="credit_name" id="credit_name">
				<div class=""><input type="submit" value="ПОРЪЧАЙ" class="submit-order"></div>

			</div>
			<div class="clearfix"></div>
		</div>
		</form>
	</div>
	<div class="clearfix"></div>
	

<script>
function changePlanName(input) {
	var text = $(input).parent().text();
	$('#credit_name').val(text);
}
function OpenPaymentType(id) {
	$('.paytypes').hide();
	$('#'+id).show();
	if(id == 'tbicredit' || id=='unicredit' || id == 'pariba') {
		$('.credit').show();
		$('.credit input').val('');
	}
	else {
		$('.credit').hide();

		$('.credit input').val(' ');
	}
}
</script>
@endsection
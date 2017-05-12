@extends('app')

@section('content')
<div class="menu-tabs col-md-12 no-mobile">
{!!$menu_html!!}
</div>
<div class="clearfix"></div>
<div itemscope itemtype="http://schema.org/Product">
 <span >


<div class="col-md-7 product-info-div">
		<div class="col-md-12">
			<div class="col-md-8 product-img">

      <?php $images = explode(',',$product->image);?>
      <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 648px; height: 488px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('{{url('img/loading.gif')}}') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 648px; height: 488px; overflow: hidden;">
         @foreach($images as $number => $image)

            <div data-p="225.00" style="display: none;">
                <img data-u="image" @if($number==0) itemprop="image" @endif src="{{url($image)}}" alt="{{$product->name}} @if(count($images)>1){{$number+1}}@endif на супер цени" title="{{$product->name}} @if(count($images)>1){{$number+1}}@endifна супер цени - Intermatrak" />
            </div>
        @endforeach
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    </div>

			<div class="col-md-4 product-desc">
     @if($product->producerImage()) <img src="{{url($product->producerImage())}}" class="brand-logo-desc" title="{{$product->producerTitle()}} - {{$product->producerTitle()}}" alt="{{$product->producerTitle()}}">
        <span itemprop="brand" style="display: none;">{{$product->producerTitle()}}</span>@endif
				<p>@if(isset($type[0])){{$type[0]->name}}@endif</p>
        <h4><span itemprop="name">{{$product->name}}</span></h4>
         @if($product->discount>0)
        <div class="sale-image">
          <img src="{{url('img/promo-07.png')}}" alt="Промо" title="Промо - Intermatrak">
          <p> -{{$product->discount}}<span class="discount-percent">%</span>
          </p>
        </div>
        @endif
        @if(isset($product->gift) and $product->gift)
	        <div class="product-desc-gifts">
	          <div class="gift-name">
	            <p>ПОДАРЪК</p>
	          </div>
	          <div class="product-gift-type"><p>{{$product->gift}}</p></div>
	        </div>
	    @endif
      <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
		</div>

      <div class="clearfix"></div>

      <div class="col-md-12 characteristics-list">
      @if(isset($charsInfo))
	      @foreach ($charsInfo as $charInfo)
	        <img class="product-desc-circle-img" src="{{url($charInfo->image)}}" alt="{{$charInfo->name}}" title="{{$charInfo->name}} - Intermatrak">
	      @endforeach
	  @endif
      </div>

      <div class="clearfix"></div>
      <div class="col-md-12">
        <div class="col-md-7 action-buttons">
          <a href="#" class="description-link active">ОПИСАНИЕ<span class="caret caret-product-info"></span></a><a href="#" class="contacts-link">ВРЪЗКА С НАС<span class="caret caret-product-info"></span></a>
        </div>
        <div class="col-md-5 image-buttons">

        </div>


		</div>

    <div class="col-md-11 product-long-description" id="product-description">
        
      <span itemprop="description">{!!$product->description!!}</span>
    </div>    
    <div class="col-md-11 product-long-description hidden" id="contact-description">
        {!!$contacts->info!!}
    </div>
    <!--
      <div class="col-md-8">
      @foreach ($linkedProducts as $prod)
        
      @endforeach

      </div>
-->
	</div>
  </div>

  <div class="fast-order col-md-5">
    <span class="fast-order-header"><img src="{{url('img/speed.png')}}"> Купи с един клик </span>
    <div class="fast-order-inputs"> 
      <div class="col-md-6"><input type="text" class="fast-order-phone" name="phone" placeholder="Телефон"></div>
      <div class="col-md-6"><input type="text" class="fast-order-name" name="name" placeholder="Име"></div>
    </div>
    <div class="fast-order-button col-md-12">
      <button class="view-button" onclick="SendOrder('{{$product->id}}','{{csrf_token()}}')">Купи</button>
    </div>
    <div class="fast-order-info col-md-12">
      Наш служител ще се свърже с вас, за да уточните детайлите по поръчката.<br>
      С натискането на бутона "Купи" декларирате, че сте съгласни с нашите <a href="{{url('obshti-usloviya')}}" target="_blank"> Общи условия.</a>
    </div>
  </div>
@if (!$product->ask)

	<div class="col-md-5 product-size-list">



	@foreach ($sizes as $number => $size)
    <div class="product-size">
      <div class="col-xs-@if($product->discount){{4}}@else{{8}}@endif product-size-info">
        <h3>{{$product->name}}</h3>
        <p>размер:<br>{{$size->size}}</p>
      </div>
      <?php $old_price = $size->price ?>
      @if($product->discount)
      <?php $old_price= $size->old_price ? $size->old_price : round(($size->price*(100-$product->discount)/100)-0.01) ?>
      <div class="col-xs-2 product-size-old-price no-padding">
        <p>стара цена: <br><span class="price-line-through"> <span class="color-initial" >{{$size->price}} лв.</span></span></p>
      </div>

      <div class="col-xs-2 product-size-discount no-padding-left">
        <p>-{{$product->discount}}%</p>
      </div>
      @endif
      <div class="col-xs-2 product-size-price no-padding" @if ($number ==0) itemprop="offers" itemscope itemtype="http://schema.org/Offer" @endif>
        <p> Цена:</p>
        <p class="price"> <span @if ($number ==0) itemprop="price" @endif>{{$old_price}}</span>лв.@if ($number == 0) <meta itemprop="priceCurrency" content="BGN" /> @endif</p>
      </div>

      <div class="col-xs-2 product-size-options">
        <a href="javascript:void(0)" class="view-button" onclick="SaveToCart({{$size->id}},{{$product->id}},'{{$product->name}}','@if(isset($type[0])){{$type[0]->name}}@endif','{{$size->size}}','{{$product->delivery}}',{{$old_price}},{{$size->price}},'{{ csrf_token() }}')">Купи</a>
        @if($old_price>200)<a href="javascript:void(0)" onclick="showCreditModal({{$size->id}})" class="credit-button">Кредитен калкулатор</a>@endif
      </div>
      <div class="clearfix"></div>
    </div>
@endforeach
	</div>
  @else

  <div class="col-md-5 product-size-list">
  @foreach ($sizes as $size)
    <div class="product-size">
      <div class="col-xs-6 product-size-info">
        <h3>{{$product->name}}</h3>
        <p>размер:<br>{{$size->size}}</p>
      </div>
      <?php $old_price = $size->price ?>
      
      <div class="col-xs-2 product-size-price no-padding">
        <p> Цена:</p>
      </div>
      <div class="col-xs-2 product-size-price no-padding">
        <p class="price"> По запитване</p>
      </div>

      <div class="col-xs-2 product-size-options">
        <a href="#" class="view-button" onclick="">Купи</a>
      </div>
      <div class="clearfix"></div>
    </div>
@endforeach
  </div>
  @endif
</span>
</div>

  <div class="modal fade" role="dialog" id="creditTypes">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <button class="close-modal" onclick="closeModal()">x</button>
        <div class="col-md-offset-1">
        <h1>КАЛКУЛИРАЙТЕ ВАШАТА ВНОСКА</h1>
        </div>
        <div class="col-md-offset-2 col-md-8 pay-types">
            <div class="col-md-4">
            <img src="{{url('/img/BNP-07.png')}}" onclick="ShowCreditTable('pariba')" style="cursor: pointer;">
            </div>
            <div class="col-md-4">
            <img src="{{url('/img/TBI-07.png')}}" onclick="ShowCreditTable('tbi')" style="cursor: pointer;">
            </div>
            <div class="col-md-4">
            <img src="{{url('/img/uni_credit-07.png')}}" onclick="ShowCreditTable('unicredit')" style="cursor: pointer;">
            </div>
        </div>
        <input type="hidden" id="size_id">

        <div class="col-md-offset-1 col-md-10 pay-types">

          <div class="col-md-12">

          <table cellspacing="0" cellpadding="0" border="0" class="schemes_table hidden"  id="schemes_table">
            <tr>
              <th>Брой месеци</th>
              <th>Вноска на месец</th>
              <th>Първоначална вноска</th>
              <th>Крайна цена</th>
            </tr>
            
            
            
          </table>

          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  </div>

	<script type="text/javascript">
		
	$('.description-link').click(function(e) {
		$('#product-description').removeClass('hidden');
		$('#contact-description').addClass('hidden');
		$('.description-link').addClass('active');
		$('.contacts-link').removeClass('active');
		e.preventDefault();
	});
	$('.contacts-link').click(function(e) {
		$('#product-description').addClass('hidden');
		$('#contact-description').removeClass('hidden');
		$('.contacts-link').addClass('active');
		$('.description-link').removeClass('active');
		e.preventDefault();
	});

  function closeModal() {


    $('#schemes_table').removeClass('hidden');
    $('#creditTypes').removeClass('in');
    $('#creditTypes').hide();
  }

  function showCreditModal(id) {

    $('#schemes_table').addClass('hidden');
    $('#size_id').val(id);
    $('#creditTypes').addClass('in');
    $('#creditTypes').show();


  }

  function ShowCreditTable(type) {
    token = '{{ csrf_token() }}';

    $('#schemes_table').show();
    $.post( "{{url('/getcreditinfo')}}",{ 'creditType':type,'id':$('#size_id').val(),'_token':token  }).done(function( data ) {
      
      $('.bonusTR').remove();
      $('#schemes_table').removeClass('hidden');
      var parsed = JSON.parse(data);
      if(type != 'pariba') {
        for(var obj in parsed) {
          var value = 0;
          var text =parsed[obj]['months'] + ' месеца';
          var downpayment = '0.00';
          if (parsed[obj]['is_special']>0) {
            downpayment = parsed[obj]['downpayment'] === undefined ? '0.00' : parsed[obj]['downpayment'];
            text += ' 0% лихва';
          }
          if (parsed[obj]['insurance'] == 1) text += ' + Застраховка';

          if (parsed[obj]['is_special']) value = parseInt(parsed[obj]['months'])+2000;
          else if (parsed[obj]['insurance']) value = parseInt(parsed[obj]['months'])+1000;
          else value = parseInt(parsed[obj]['months']);     
          var tr ='<tr id="months" class="bonusTR"><td style="text-align:left;"><label><input type="radio" name="months" value="'+value+'"/>'+text+'</td><td>'+parsed[obj]["per_month"]+' лв.</td><td> '+downpayment+' лв</td><td>'+parsed[obj]["total"]+' лв.</td></tr>';
          $('#schemes_table').append(tr);
        }
      }
      else {
        for(var obj in parsed) {
          var value = 0;
          var text =obj + ' месеца';
          var downpayment = parsed[obj]['CorrectDownPaymentAmount'];

          value = parseInt(obj);     
          var tr ='<tr id="months" class="bonusTR"><td style="text-align:left;"><label><input type="radio" name="months" value="'+value+'"/>'+text+'</td><td>'+parsed[obj]["InstallmentAmount"]+' лв.</td><td> '+downpayment+' лв</td><td>'+parsed[obj]["TotalRepaymentAmount"]+' лв.</td></tr>';
          $('#schemes_table').append(tr);
        }
      }

    });

  }
  function SaveToCart(size_id,product_id,name,type,size,delivery,old_price,price,token) {
    $.post( "{{url('/addtocart')}}",{ size_id: size_id, product_id: product_id,delivery: delivery,name: name,type: type,size: size,old_price: old_price,price: price,'_token':token  }).done(function( data ) {
      
      if(data) window.location='{{url("/shopping-cart")}}';
    });
  }


  function SendOrder(product,token) {
    var phone = $('#phone').val();
    var name = $('#name').val();

    //verification
    if(phone != '' && name != '')
      $.post( "{{url('/quickorder')}}",{ product:product,phone:phone,name:name,'_token':token  }).done(function( data ) {
          console.log(1);
      });
  }
	</script>
<script type="text/javascript">
	       
 jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 3000,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });


</script>
@endsection
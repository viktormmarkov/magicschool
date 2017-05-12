@extends('admin/app')

@section('content')
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-shopping-cart"></i>
				<h3>Добавяне/Редактиране на продукт</h3>
			</div>
			<div class="widget-content">
				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form method='post' enctype="multipart/form-data" action="{{url('/admin/products/add-product')}}">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="title">Име</label>
										<div class="controls">
											<input type="text" class="span6" name="name" value='{{$product->name or '' }}'>
										</div>
									</div>
									<div class="control-group">											
											<label class="control-label" for="title">Title</label>
											<div class="controls">
												<input type="text" class="span6" name="title" value="{{ $product->title or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
									<div class="control-group">
										<label class="control-label" for="title">Описание</label>
										<div class="controls">
											<textarea class="ckeditor" rows="6" name="description"> {{$product->description or '' }} </textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Отстъпка</label>
										<div class="controls">
											<input type="text" class="span6" name="discount" value='{{$product->discount or '' }}' >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Доставка</label>
										<div class="controls">
											<input type="text" class="span6" name="delivery" value='{{$product->delivery or '' }}' >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Изберете производител</label>
										<div class="controls">
											<select name="producer">
												<option value="0">-</option>
												@foreach($producers as $producer)
													<option value='{{ $producer->id }}' @if(isset($product->producer_id) and $producer->id == $product->producer_id) selected @endif> {{ $producer->name }} </option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Изберете категория</label>
										<div class="controls">
											<select name="category_id">
												<option value="0">-</option>
												@foreach($categories as $category)
													<option value='{{ $category->id }}' @if(isset($product->cat_id) and $category->id == $product->cat_id) selected @endif> {{ $category->name }} </option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="title">Подарък</label>
										<div class="controls">
											<input type="text" class="span6" name="gift" value='{{$product->gift or '' }}' >
										</div>
									</div>
									@if(isset($product->image))
									<label class="control-label" for="title">Текущи снимки</label>
									<?php $images = explode(",",$product->image); ?>
										@foreach($images as $image)
											<div class="image-div">
												<div class="controls span2">
													<button class='btn-danger deleteImage' style="display:none;position:absolute;"><i class="btn-icon-only icon-remove"> </i></button>
													<input type='hidden' name='currentimages[]' value="{{$image}}">
													<img src="{{ url($image) }}" style="width:100%;">									
												</div> <!-- /controls -->			
											</div>
										@endforeach
										<div class="clearfix"></div> <!-- /control-group -->	
									@endif
									<div class="control-group">										
										<div class="controls">
										<table id='image_table' class="table" style="width:60%">
											<thead>
												<th>Снимки</th>
												<th class="td-actions"><a class="btn btn-small btn-success" onclick="$('#image_model').clone().css('display', '').appendTo('#image_table');"><i class="btn-icon-only icon-plus"> </i></a></th>
											</thead>
											<tbody>
												<tr id='image_model' style='display:none'>
												<td><input type="file" class="span6" name="image[]"></td>
												<td><a class="btn btn-small btn-danger" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="btn-icon-only icon-remove"> </i> </a></td>
												</tr>
												<tr>
												<td><input type="file" class="span6" name="image[]"></td>
												<td><a class="btn btn-small btn-danger" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="btn-icon-only icon-remove"> </i> </a></td>
												</tr>
											</tbody>
										</table>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->

									<div class="control-group">
										<label class="control-label" style="float:left;margin-right: 10px;" for="title">По запитване </label><input type="checkbox" name="ask" value="1" @if(isset($product)) @if($product->ask) checked @endif @endif>
									</div>

									<div class="control-group">
										<label class="control-label" style="float:left;margin-right: 10px;" for="title">Забрани 0% лихва </label><input type="checkbox" name="allowzerop" value="1" @if(isset($product)) @if($product->allowzerop) checked @endif @endif>
									</div>

									<div class="control-group">
										<label class="control-label" style="float:left;margin-right: 10px;" for="title">0% лихва </label><input type="checkbox" name="zerop" value="1" @if(isset($product)) @if($product->zerop) checked @endif @endif>
									</div>
									<div class="control-group">
										<div class="controls">
											<table id="sizes_table" class="table table-striped table-bordered">
												<thead>
													<th>Размер</th>
													<th>Цена</th>
													<th>Нова Цена</th>
													<th class="td-actions"><a class="btn btn-small btn-success" onclick="$('#model').clone().css('display', '').appendTo('#sizes_table');"><i class="btn-icon-only icon-plus"> </i></a></th>
												</thead>
												<tbody>
													<tr id='model' style='display: none'>
														<td><input type='text' name='size[]'></td>
														<td><input type='text' name='price[]'></td>
														<td><input type='text' name='old_price[]'></td>
														<td><a class="btn btn-small btn-danger" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"><i class="btn-icon-only icon-remove"> </i> </a></td>
													</tr>
													@if(isset($sizes))
														@foreach($sizes as $size)
															<tr>
																<td><input type='text' name='size[]' value='{{ $size->size }}'></td>
																<td><input type='text' name='price[]' value='{{ $size->price }}'></td>
																<td><input type='text' name='old_price[]' value='{{ $size->old_price }}'></td>
																<td><a class="btn btn-small btn-danger" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"> <i class="btn-icon-only icon-remove"></i></a> </td>
															</tr>
														@endforeach
													@endif
														<tr>
															<td><input type='text' name='size[]'></td>
															<td><input type='text' name='price[]'></td>
															<td><input type='text' name='old_price[]'></td>
															<td><a class="btn btn-small btn-danger" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);"> <i class="btn-icon-only icon-remove"></i> </a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												@foreach($attr_types as $type)
													<h4>{{ $type->name }}</h4>
														@foreach($attributes as $attr)
															@if($type->id == $attr->attr_type_id)
															<div class="checkbox">
																<input type="checkbox" name="attributes[]" value="{{ $attr->id }}"
																 	@if(isset($product))
																		@foreach($product->Attributes as $pr_attr)
																			@if($attr->id == $pr_attr->pivot->attr_id) checked @endif
																		@endforeach 
																	@endif 
																> {{ $attr->name }}
															</div>					
															@endif
														@endforeach
												@endforeach
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<h3>Характеристики</h3>
												@foreach($characteristics as $char)
													<div class="checkbox">
														<input type="checkbox" name="characteristics[]" value="{{ $char->id }}"
															@if(isset($product))
																@foreach($product->Characteristics as $pr_chars)
																	@if($char->id == $pr_chars->pivot->char_id) checked @endif
																@endforeach 
															@endif 
														> {{ $char->name }}
													</div>		
												@endforeach
											</div>
										</div>
										<div class="form-actions">
											<input type='hidden' name='cat_id' value='{{ $cat_id }}'>
											<input type='hidden' name='id' value='{{ $product->id or '' }}'>	
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type='submit' class="btn btn-primary" value='Запази'>
										</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function () {
    $(document).on('mouseenter', '.image-div', function () {
        $(this).find(".deleteImage").show();
    }).on('mouseleave', '.image-div', function () {
        $(this).find(".deleteImage").hide();
    }).on('click', '.deleteImage', function() {
    	$(this).parent().remove();
	});
});
</script>
@endsection
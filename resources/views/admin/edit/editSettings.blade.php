@extends('admin/app')
@section('content')
	
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-cog"></i>
				<h3>{{ $settings->name }} настройки</h3>
			</div>
			<div class="widget-content">
				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form method="post" action="{{ url('admin/settings/save') }}" enctype="multipart/form-data">
								<fieldset>
									@if($settings->type == '0')
										<div class="control-group">
											<label class="control-label" for="title">Текуща снимка</label>
											<div class="controls span2">	
												<img src="{{ url($settings->value) }}" style="width:100%;">
											</div>
										</div>
									@endif
								@if($settings->type == '0')
									<div class="control-group">
										<label class="control-label" for="title">Снимка</label>
										<div class="controls">	
											<input type="file" class="span6" name="value">
										</div>
									</div>
								@elseif($settings->type =='1')
									<div class="control-group">
										<div class="controls">
											<input type="text" class="span6" name="value" value="{{$settings->value or ''}}">	
										</div>
									</div>
								@elseif($settings->type == '2')
									<div class="control-group">
										<div class="controls">	
											<textarea name="value" class="form-control" rows="5"> {{ $settings->value or ''}} </textarea>
										</div>
									</div>	
								@else
									<div class="control-group">
										<div class="controls">	
											<textarea name="value" rows="5" class="ckeditor"> {{ $settings->value }} </textarea>
										</div>
									</div>
								@endif
									<div class="form-actions">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="id" value="{{ $settings->id }}">
										<input type="hidden" name="type" value="{{ $settings->type }}">
									    <input type='submit' class="btn btn-primary" value="Запази">
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
@endsection 
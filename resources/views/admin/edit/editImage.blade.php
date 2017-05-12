@extends('admin/app')

@section('content')
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-picture"></i>
				<h3>Добавяне/Редактиране на снимка</h3>
			</div>
			<div class="widget-content">
				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form id="edit-profile" method="post" action="{{ url('admin/header-images/add-image') }}" enctype="multipart/form-data">
								<fieldset>
									@if (isset($image))
										<div class="control-group">
											<label class="control-label" for="title">Текуща снимка</label>
											<div class="controls span2">	
												<img src="{{ url($image->url) }}" style="width:100%;">
											</div>
										</div>
									@endif
									<div class="control-group">
										<label class="control-label" for="title">Заглавие</label>
										<div class="controls">	
											<input type="text" class="span6" name="title" value="{{ $image->title or ''}}">
										</div>
									</div>
									<div class="control-group">
											<label class="control-label" for="title">Снимка</label>
											<div class="controls">
												<input type="file" class="span6" name="image">
											</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									<div class="form-actions">
	        							<input type='hidden' value="{{ $image->id or ''}}" name="id" id="id">
	        							<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        							<input type='submit' class="btn btn-primary" value='Запази'>
									</div> <!-- /form-actions -->
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
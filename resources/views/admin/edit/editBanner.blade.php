@extends('admin/app')

@section('content')


<div class="row">  	
	      	<div class="span12"> 
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-bookmark"></i>
	      				<h3>Добавяне/Редактиране на банер</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<div class="tabbable">
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{ url('admin/banners/add-banner') }}" enctype="multipart/form-data">
									<fieldset>
									@if(isset($banner->image))
										<div class="control-group">											
											<label class="control-label" for="title">Текуща снимка</label>
											<div class="controls span2">
												<img src="{{ url($banner->image) }}" style="width:100%;">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
									@endif
										<div class="control-group">											
											<label class="control-label" for="title">Име</label>
											<div class="controls">
												<input type="text" class="span6" name="title" value="{{ $banner->title or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
										<div class="control-group">											
											<label class="control-label" for="title">Връзка</label>
											<div class="controls">
												<input type="text" class="span6" name="url" value="{{ $banner->url or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="title">Снимка</label>
											<div class="controls">
												<input type="file" class="span6" name="image">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="form-actions">
	        								<input type='hidden' value="{{ $banner->id or ''}}" name="id" id="id">
	        								<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        								<input type='submit' class="btn btn-primary" value='Запази'>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								</div>
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span8 -->
	      </div>
@endsection 
@extends('admin/app')

@section('content')


<div class="row">  	
	      	<div class="span12"> 
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-pushpin"></i>
	      				<h3>Добавяне/Редактиране на характеристика</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<div class="tabbable">
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{ url('admin/characteristics/add') }}" enctype="multipart/form-data">
									<fieldset>
									@if(isset($characteristic->image))
										<div class="control-group">											
											<label class="control-label" for="image">Текуща снимка</label>
											<div class="controls span2">
												<img src="{{ url($characteristic->image) }}" style="width:100%;">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
									@endif
										<div class="control-group">											
											<label class="control-label" for="name">Име</label>
											<div class="controls">
												<input type="text" class="span6" name="name" value="{{ $characteristic->name or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">
											<label class="control-label" for="title">Снимка</label>
											<div class="controls">
												<input type="file" class="span6" name="image">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="form-actions">
	        								<input type='hidden' value="{{ $characteristic->id or ''}}" name="id" id="id">
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
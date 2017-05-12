@extends('admin/app')
@section('content')
<div class="row">
	      	<div class="span12"> 
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-list-alt"></i>
	      				<h3>Добавяне/Редактиране на тип атрибут</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<div class="tabbable">
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{ url('admin/attribute-types/add-attribute_type') }}" enctype="multipart/form-data">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="name">Име</label>
											<div class="controls">
												<input type="text" class="span6" value="{{ $attr_type->name or '' }}" name='name' id='name'>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="form-actions">
	        								<input type='hidden' value="{{ $attr_type->id or ''}}" name="id" id="id">
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
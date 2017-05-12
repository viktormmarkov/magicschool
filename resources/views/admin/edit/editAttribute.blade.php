@extends('admin/app')
@section('content')

<div class="row">	      	
	      	<div class="span12">      			      		
	      		<div class="widget ">	      			
	      			<div class="widget-header">
	      				<i class="icon-list-alt"></i>
	      				<h3>Добавяне/Редактиране на атрибут</h3>
	  				</div> <!-- /widget-header -->					
					<div class="widget-content">					
						<div class="tabbable">						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{ url('admin/attribute-types/'.$attr_type->id.'/add-attribute') }}" enctype="multipart/form-data">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="username">Име</label>
											<div class="controls">
												<input type="text" class="span6" name="name" value="{{ $attribute->name or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->						
										<div class="form-actions">
	        								<input type='hidden' value="{{ $attribute->id or ''}}" name="id" id="id">
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
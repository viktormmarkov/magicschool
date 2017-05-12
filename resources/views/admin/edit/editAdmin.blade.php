@extends('admin/app')

@section('content')

<div class="row">
	      	<div class="span12">      		
	      		<div class="widget ">      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Добавяне/Редактиране на админ</h3>
	  				</div> <!-- /widget-header -->					
					<div class="widget-content">					
						<div class="tabbable">						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{url('admin/administrator/add')}}">
									<fieldset>
									{{ csrf_field() }}
								<div class="control-group">											
											<label class="control-label" for="name">Име</label>
											<div class="controls">
												<input type="text" class="span6" value="{{ $admin['name'] or old('name')}}" name='name' id='name'>
											</div> <!-- /controls -->	
											@if ($errors->has('name'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('name') }}</strong>
			                                    </span>
			                                @endif			
										</div> <!-- /control-group -->	
										<div class="control-group">											
											<label class="control-label" for="password">Парола</label>
											<div class="controls">
												<input type="text" class="span6" value="" name='password' id='password'>
											</div> <!-- /controls -->
											@if ($errors->has('password'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('password') }}</strong>
			                                    </span>
			                                @endif						
										</div> <!-- /control-group -->
										<div class="form-actions">
	        								<input type='hidden' value="{{ $admin['id'] or ''}}" name="id" id="id">
	        								<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
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
@endsection 
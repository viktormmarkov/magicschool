@extends('admin/app')

@section('content')

<div class="row">
	      	<div class="span12">      	
	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-list-alt"></i>
	      				<h3>Добавяне/Редактиране на категория</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<div class="tabbable">
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post"  action="{{url('admin/categories/add-category')}}">
									<fieldset><div class="control-group">											
											<label class="control-label" for="parent_id">Под категория на</label>
											<div class="controls">
												<select name="parent_id">
													<option value='0'> - </option>
													@foreach($categories as $cat)
														<option value='{{ $cat->id}}' @if(isset($pid) and $cat->id == $pid) selected @endif> {{$cat->name}}</option>
													@endforeach
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
										<div class="control-group">											
											<label class="control-label" for="name">Име</label>
											<div class="controls">
												<input type="text" class="span6" name="name" value="{{ $category->name or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="title">Title</label>
											<div class="controls">
												<input type="text" class="span6" name="title" value="{{ $category->title or ''}}">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->		
										<div class="form-actions">
	        								<input type='hidden' value="{{ $category->id or ''}}" name="id" id="id">
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
@extends('admin/app')

@section('content')
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-globe"></i>
				<h3>Добавяне/Редактиране на новина</h3>
			</div>
			<div class="widget-content">
				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form method='post' enctype="multipart/form-data" action="{{url('admin/news/add-news')}}">
								<fieldset>
								@if(isset($news->image))
										<div class="control-group">											
											<label class="control-label" for="title">Текуща снимка</label>
											<div class="controls span2">
												<img src="{{ url($news->image) }}" style="width:100%;">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
									@endif
									<div class="control-group">
										<label class="control-label" for="title">Title</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $news->title or '' }}" name='title' id='title'>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Meta Title</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $news->meta_title or '' }}" name='meta_title' id='meta_title'>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Meta Description</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $news->meta_description or '' }}" name='meta_description' id='meta_description'>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Short Description</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $news->short_description or '' }}" name='short_description' id='short_description'>
										</div>
									</div>

									<div class="control-group">											
											<label class="control-label" for="title">Снимка</label>
											<div class="controls">
												<input type="file" class="span6" name="image">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
									<div class="control-group">
										<label class="control-label" for="title">Съдържание</label>
										<div class="controls">
											<textarea name="info" class="ckeditor" rows="6" id="info">{{ $news->info or ''}}</textarea>
										</div>
									</div>
										<div class="form-actions">
								        	<input type='hidden' value="{{ $news->id or '' }}" name="id">
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
@endsection 
@extends('admin/app')

@section('content')
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-file"></i>
				<h3>Добавяне/Редактиране на страница</h3>
			</div>
			<div class="widget-content">
				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form method='post' action="{{url('admin/pages/add-page')}}">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="title">Title:</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $page->title or ''}}" name='title' id='title'>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Име:</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $page->name or '' }}" name="name" id="name">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Описание:</label>
										<div class="controls">
											<input type='text' class="span6" value="{{ $page->description or '' }}" name='description' id='description'>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Съдържание:</label>
										<div class="controls">
											<textarea name="info" class="ckeditor" rows="6" id="info">{{ $page->info or '' }}</textarea>
										</div>
									</div>
									<div class="form-actions">
										<input type='hidden' value="{{ $page->id or '' }}" name="id">
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
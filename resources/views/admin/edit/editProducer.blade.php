@extends('admin/app')

@section('content')
<div class="row">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-tags"></i>
				<h3>Добавяне/Редактиране на производител {{ $producer->name or ''}}</h3>
			</div>
			<div class="widget-content">
				@if(isset($producer) and $producer->image != '')
					<div class="control-group" style="float:left">											
						<label class="control-label" for="title">Текуща снимка</label>
						<div class="controls span2">
							<img src="{{ url($producer->image) }}" style="width:100%;">
						</div> <!-- /controls -->				
					</div>
				@endif

				@if(isset($producer) and $producer->indeximage != '')
					<div class="control-group" style="float:left">											
						<label class="control-label" for="title">Текуща index снимка</label>
						<div class="controls span2">
							<img src="{{ url($producer->indeximage) }}" style="width:100%;">
						</div> <!-- /controls -->				
					</div>
				@endif

				<div class="tabbable">
					<div class="tab-content">
						<div class="tab-pane active" id="formcontrols">
							<form method="post" action="{{ url('admin/producers/add-producer') }}" enctype="multipart/form-data">
								<fieldset style="float:left">									
									<div class="control-group">
										<label class="control-label" for="title">Име</label>
										<div class="controls">
											<input type="text" class="span6" name="name" value="{{ $producer->name or ''}}">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Title</label>
										<div class="controls">
											<input type="text" class="span6" name="title" value="{{ $producer->title or '' }}">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Снимка</label>
										<div class="controls">
											<input type="file" name="image">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="title">Index Снимка</label>
										<div class="controls">
											<input type="file" name="indeximage">
										</div>
									</div>
									<div class="form-actions">
										<input type="hidden" name="id" value="{{ $producer->id or ''}}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
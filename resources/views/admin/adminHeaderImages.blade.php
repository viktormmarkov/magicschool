@extends('admin/app')

@section('content')

<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък на снимки</h3>
	  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/header-images/add')}}">Добави нова снимка</a>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Снимка</th>
      			<th>Активна</th>
      			<th>Позиция</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
		@foreach ($images as $image)
			@if (isset($image))
			<tr>
				<td><img src="{{ url($image->url) }}" style="width:10%;height:10%"></td>
				@if($image->active == 0)
						<td><a style='text-decoration: none' href="{{url('admin/header-images/activate/'.$image->id)}}">Активирай </a> </td>
					@else
						<td><a style='text-decoration: none' href="{{url('admin/header-images/activate/'.$image->id)}}">Деактивирай </a> </td>
					@endif
				<td>{{ $image->order }}</td>
				<td><a class="btn btn-small btn-success" href="{{url('/admin/header-images/edit/'.$image->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избраната снимка ?")) window.location ="{{url('/admin/header-images/delete/'.$image->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
			</tr>
			@endif
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>


@endsection 
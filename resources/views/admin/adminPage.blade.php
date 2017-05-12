
@extends('admin/app')

@section('content')


<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък страници</h3>
	  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{ url('/admin/pages/add') }}">Добави нова страница </a>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
			<th>Страница</th>
			<th>Статус</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
		@foreach($pages as $page)
			<tr>
				<td>{{$page->name}}</td>
				@if($page->active == 0)
					<td><a style='text-decoration: none' href="{{url('admin/pages/activate/'.$page->id)}}">Активирай </a> </td>
				@else
					<td><a style='text-decoration: none' href="{{url('admin/pages/activate/'.$page->id)}}">Деактивирай </a> </td>
				@endif
				<td><a class="btn btn-small btn-success" href="{{url('/admin/pages/edit/'.$page->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избраната страница ?")) window.location ="{{url('/admin/pages/delete/'.$page->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
			</tr>
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>

@endsection 
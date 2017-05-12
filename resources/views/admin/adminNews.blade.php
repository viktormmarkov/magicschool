@extends('admin/app')

@section('content')


<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък новини</h3>
	  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{ url('/admin/news/add') }}">Добави нова новина </a>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
			<th>Новина</th>
			<th>Статус</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
		@foreach($news as $n)
			<tr>
				<td>{{$n->title}}</td>
				@if($n->active == 0)
					<td><a style='text-decoration: none' href="{{url('admin/news/activate/'.$n->id)}}">Активирай </a> </td>
				@else
					<td><a style='text-decoration: none' href="{{url('admin/news/activate/'.$n->id)}}">Деактивирай </a> </td>
				@endif		

				<td><a class="btn btn-small btn-success" href="{{url('/admin/news/edit/'.$n->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избраната новина ?")) window.location ="{{url('/admin/news/delete/'.$n->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
			</tr>
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>

@endsection 
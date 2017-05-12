@extends('admin/app')

@section('content')


<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Списък банери</h3>
			  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/banners/add')}}">Добави нов банер</a>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Връзка</th>
					<th>Статус</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
				@foreach ($banners as $banner)
					@if (isset($banner))
					<tr>
						<td>{{ $banner->url }}</td>
						@if($banner->active == 0)
							<td><a style='text-decoration: none' href="{{url('admin/banners/activate/'.$banner->id)}}">Активирай </a> </td>
						@else
							<td><a style='text-decoration: none' href="{{url('admin/banners/activate/'.$banner->id)}}">Деактивирай </a> </td>
						@endif
						<td>
						<a class="btn btn-small btn-success" href="{{url('/admin/banners/edit/'.$banner->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания банер?")) window.location ="{{url('/admin/banners/delete/'.$banner->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
					</tr>
					@endif
				@endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
@endsection 
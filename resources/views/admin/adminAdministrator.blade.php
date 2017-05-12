@extends('admin/app')

@section('content')
<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Списък aдминистратори</h3>
			  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('admin/administrators/add')}}">Добави нов администратор</a>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Име</th>
					<th>Статус</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($admin as $ad)
				<tr>
						<td>{{$ad->name}}</td>
						@if($ad->active == 0)
							<td><a style='text-decoration: none' href="{{url('admin/administrators/activate/'.$ad->id)}}">Активирай </a> </td>
						@else
							<td><a style='text-decoration: none' href="{{url('admin/administrators/activate/'.$ad->id)}}">Деактивирай </a> </td>
						@endif
						<td><a class="btn btn-small btn-success" href="{{url('admin/administrators/edit/'.$ad->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания администратор ?")) window.location ="{{url('/admin/administrators/delete/'.$ad->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
					</tr>
				@endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
@endsection 
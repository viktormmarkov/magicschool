@extends('admin/app')

@section('content')

<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Списък типове атрибути</h3>
			  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/attribute-types/add')}}">Добави нов тип</a>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Име</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
				@foreach($attr_types as $type)
					@if(isset($type))
					<tr>
						<td>{{$type->name}}</td>
						<td><a class="btn btn-small btn-warning" href="{{url('/admin/attribute-types/'.$type->id.'/attributes')}}"><i class="btn-icon-only icon-list"> </i> </a>
						<a class="btn btn-small btn-success" href="{{url('/admin/attribute-types/edit/'.$type->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания тип?")) window.location ="{{url('/admin/attribute-types/delete/'.$type->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
					</tr>
					@endif
				@endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>

@endsection 
@extends('admin/app')

@section('content')
<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Списък атрибути</h3>
			  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/attribute-types/'.$attr_type->id.'/add')}}">Добави нов атрибут</a>
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
				@foreach($attributes as $attr)
				<tr>
						<td>{{$attr->name}}</td>
						<td><a class="btn btn-small btn-success" href="{{url('/admin/attribute-types/'.$attr_type->id.'/edit/'.$attr->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания атрибут ?")) window.location ="{{url('/admin/attribute-types/'.$attr_type->id.'/delete/'.$attr->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
					</tr>
				@endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>

@endsection 
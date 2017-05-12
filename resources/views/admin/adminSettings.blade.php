@extends('admin/app')

@section('content')
<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Настройки</h3>
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
		@foreach($settings as $setting)
			<tr>
				<td>{{$setting->name}}</td>
				<td><a class="btn btn-small btn-success" href="{{url('admin/settings/edit/'.$setting->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a></td>
			</tr>
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>


@endsection 
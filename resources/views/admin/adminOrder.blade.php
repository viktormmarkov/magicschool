@extends('admin/app')

@section('content')

<form action="{{ url('/admin/orders/search') }}" method="POST">
  <div class="control-group">
  
      <input type="text" class="span11" name="search" placeholder="Име на клиент" style="float:left;margin-right: 12px" 
      value="{{$search or ''}}">
  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-default" name="submit" value="Търси" style="width: 88px">
    
  </div>
</form>

<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък поръчки</h3>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
			<th>ID</th>
			<th>Дата</th>
			<th>Име</th>
			<th>Email</th>
      <th>Начин на плащане</th>
      <th>Статус</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
		@foreach($orders as $order)
		<tr>
			<td>{{$order->id}}</td>
			<td>{{$order->created_at}}</td>
			<td>{{$order->name}} {{$order->family}}</td>
			<td>{{$order->email}}</td>
      <td>{{$order->payment_type}}</td>
      <td>@if ($order->activate) Платена @elseif ($order->cancel) Неуспешна @else Обработва се @endif</td>

			<td><a class="btn btn-small btn-success" href="{{url('/admin/orders/view-order/'.$order->id)}}"><i class="btn-icon-only icon-search"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избраната поръчка ?")) window.location ="{{url('/admin/orders/delete/'.$order->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
			</tr>
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>

@endsection 
@extends('admin/app')

@section('content')


<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък производители</h3>
	  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{ url('/admin/producers/add') }}">Добави нов производител </a>
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
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		@foreach ($producers as $producer)
		@if (isset($producer))
		<tr id="{{ $producer->id }}">
			<td>{{ $producer->name }}</td>
			@if($producer->active == 0)
				<td><a style='text-decoration: none' href="{{url('admin/producers/activate/'.$producer->id)}}">Активирай </a> </td>
			@else
				<td><a style='text-decoration: none' href="{{url('admin/producers/activate/'.$producer->id)}}">Деактивирай </a> </td>
			@endif
				<td><a class="btn btn-small btn-success" href="{{url('/admin/producers/edit/'.$producer->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания производител ?")) window.location ="{{url('/admin/producers/delete/'.$producer->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
			</tr>
			@endif
		@endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>
<span></span>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
 <!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">-->
  <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">-->
<script type="text/javascript">
 // $('tbody').sortable();
$(document).ready(function () {
    $('tbody').sortable({
        axis: 'y',
        stop: function (event, ui) {
          saveOrder('tbody','tr','{{ csrf_token() }}');
        }
    });
    $("tbody").disableSelection();
});

function saveOrder(obj , what , token ){
  var ids='';
       obj=$(obj);
       obj=$(obj).find(what);
       var i=0; var id;
       while (obj[i]) {
          id=obj[i]["id"];
          ids+=id+',';
          i++;
        }
  ids = ids.substring(0,ids.length - 1); 
  $.post( "{{url('/admin/producers/save-order')}}",{ids : ids,'_token':token}).done(function( data ) {
      window.location='{{url("/admin/producers/")}}';
    });
  }

</script>
 @endsection 
@extends('admin/app')

@section('content')

<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък категории</h3>
	  <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/categories/'.$parent_id.'/add')}}">Добави нова категория</a>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
			<th>Име</th>
			<th>Родител в менюто</th> 
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		@foreach ($categories as $cat)
		<tr id="{{ $cat->id }}">
			<td>{{ $cat->name }}</td>
			<td>{{ $parent_cat->name or '-'}}</td> 
			<td>
        <a class="btn btn-small btn-info" href="{{url('/admin/categories/'.$cat->id.'/products/')}}"><i class="btn-icon-only icon-shopping-cart"> </i> </a> 
        <a class="btn btn-small btn-warning" href="{{url('/admin/categories/'.$cat->id.'/subcategories/')}}"><i class="btn-icon-only icon-list"> </i> </a> 
        <a class="btn btn-small btn-success" href="{{url('/admin/categories/'.$parent_id.'/edit/'.$cat->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> 
        <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избраната категория ?")) window.location ="{{url('/admin/categories/'.$cat->id.'/delete/')}}";'><i class="btn-icon-only icon-remove"> </i> </a>
      </td>
			</tr>
		@endforeach
        
        </tbody>
      </table>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<script>
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
  $.post( "{{url('/admin/categories/save-order')}}",{ids : ids,'_token':token}).done(function( data ) {
      window.location.reload();
    });
  }

</script>
@endsection 
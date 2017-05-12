@extends('admin/app')

@section('content')

<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък продукти</h3>
	    <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/categories/'.$cat_id.'/products/add')}}">Добави нов продукт</a>
    </div>
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
			<th>Име</th>
			<th>Производител</th> 
      <th>Статус</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
        <input type="hidden" id="cat_id" value="{{ $cat_id }}">
		@foreach ($products as $product)
		<tr id="{{ $product->id }}">
			<td>{{ $product->name }}</td>
			<td>{{ $producer->name or ''}}</td>
      
        @if($product->active == 0)
          <td><a style='text-decoration: none' href="{{url('/admin/categories/'.$cat_id.'/products/activate/'.$product->id)}}">Активирай </a> </td>
        @else
          <td><a style='text-decoration: none' href="{{url('/admin/categories/'.$cat_id.'/products/activate/'.$product->id)}}">Деактивирай </a> </td>
        @endif
      
			<td>
        <a class="btn btn-small btn-success" href="{{url('/admin/categories/'.$cat_id.'/products/'.$product->id.'/edit')}}"><i class="btn-icon-only icon-pencil"> </i> </a> 
        <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрания продукт ?")) window.location ="{{url('/admin/categories/'.$cat_id.'/products/'.$product->id.'/delete')}}";'><i class="btn-icon-only icon-remove"> </i> </a>
      </td>
			</tr>
		@endforeach
        
        </tbody>
      </table>

    </div>

</div>

<div style="text-align:center"> 
  {{ $products->links() }}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<script>
$(document).ready(function () {
    $('tbody').sortable({
        axis: 'y',
        stop: function (event, ui) {
          saveOrder('tbody','tr',$('#cat_id').val(),'{{ csrf_token() }}');
        }
    });
    $("tbody").disableSelection();
});

function saveOrder(obj , what , cat_id ,token ){
  debugger;
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
  var url = 'asdf';
  $.post( "{{url('/admin/products/save-order')}}",{ids : ids, cat_id: cat_id ,'_token':token}).done(function( data ) {
      window.location.reload();
    });
  }

</script>

@endsection 
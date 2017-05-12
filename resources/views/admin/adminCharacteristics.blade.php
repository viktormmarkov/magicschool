@extends('admin/app')

@section('content')

<div class="widget widget-table action-table">
    <div class="widget-header"> <i class="icon-th-list"></i>
      <h3>Списък на характеристики</h3>
    <a style='text-decoration: none; float: right; padding-right: 10px;' href="{{url('/admin/characteristics/add')}}">Добави нова характеристика</a>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Снимка</th>
            <th>Име</th>
            <th class="td-actions"> </th>
          </tr>
        </thead>
        <tbody>
    @foreach ($characteristics as $char)
      @if (isset($char))
      <tr>
        <td>{{ $char->name }}</td>
        <td><img src="@if (isset($char->image)) {{ url($char->image)}} @endif" style="width:10%;"></td>
        <td><a class="btn btn-small btn-success" href="{{url('/admin/characteristics/edit/'.$char->id)}}"><i class="btn-icon-only icon-pencil"> </i> </a> <a class="btn btn-small btn-danger" onclick='if(confirm("Сигурни ли сте че искате да изтриете избрата характеристика ?")) window.location ="{{url('/admin/characteristics/delete/'.$char->id)}}"; '><i class="btn-icon-only icon-remove"> </i> </a></td>
      </tr>
      @endif
    @endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /widget-content --> 
  </div>


@endsection 
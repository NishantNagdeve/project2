@extends('layout')

@section('content')
<div>
    <p><h3 class="heading">Vehicle List</h3></p>
    <p style="float: right;"><a type="button" href="vehicleadd" class="btn btn-success btn-sm">Add Vehicle</a></p>
    <!-- {{print_r($data)}} -->
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div >
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Model No.</th>
      <th scope="col">Chasis No.</th>
      <th scope="col">Variant</th>
      <th scope="col">Color</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <td>{{$item->model_no}}</td>
      <td>{{$item->chasis_no}}</td>
      <td>{{$item->variant}}</td>
      <td>{{$item->color}}</td>
      <td>
      <img src="{{ Storage::url($item->img) }}" alt="Image-Error" width=70px height=40px>
      </td>
      <td>{{$item->price}}</td>
      <td>
      <a href="editvehicle/{{$item->id}}">Edit<i class="fa fa-edit"></a>
      <a href="deletevehicle/{{$item->id}}">Delete<i class="fa fa-trash"></a>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>
</div>
<div>
  {{$data->links()}}
</div>

<style>
  .page-item{
    display: inline-block;
    padding: 10px;
  }
</style>
@Stop
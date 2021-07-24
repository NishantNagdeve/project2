@extends('layout')

@section('content')
<div>
    <p><h3 class="heading">Customer List</h3></p>
    <p style="float: right;"><a type="button" href="customeradd" class="btn btn-success btn-sm">Add Customer</a></p>
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
      <th scope="col">Custmer Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <td>{{$item->customer_name}}</td>
      <td>{{$item->ph_no}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->gender}}</td>
      <td>{{ date('d-m-Y', strtotime($item->dob)) }}</td>
      <td>{{$item->address}}</td>
      <td>
      <a href="editcustomer/{{$item->id}}">Edit<i class="fa fa-edit"></a>
      <a href="deletecustomer/{{$item->id}}">Delete<i class="fa fa-trash"></a>
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
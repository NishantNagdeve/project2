@extends('layout')

@section('content')
<div>
    <div class="col-sm-6 offset-3">
    <h3 class="heading">Add Vehicle</h3>
    <form method="post" action="editvehicle" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data->id}}">
    @csrf
    <div class="form-group">
        <label>Model No.</label>
        <input type="text" name="model_no" required class="form-control" value="{{$data->model_no}}">
    </div>
    <div class="form-group">
        <label>Chasis No.</label>
        <input type="text" name="chasis_no" required class="form-control" value="{{$data->chasis_no}}">
    </div>
    <div class="form-group">
        <label>Variant</label>
        <input type="text" name="variant" class="form-control" value="{{$data->variant}}">
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control" value="{{$data->color}}">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="img" class="form-control" value="{{$data->img}}">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" required class="form-control" value="{{$data->price}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@Stop
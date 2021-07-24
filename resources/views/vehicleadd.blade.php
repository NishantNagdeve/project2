@extends('layout')

@section('content')
<div>
    <div class="col-sm-6 offset-3">
    <h3 class="heading">Add Vehicle</h3>
    <form method="post" action="vehicleadd" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Model No.</label>
        <input type="text" name="model_no" class="form-control" placeholder="Enter Model No.">
        @error('model_no')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Chasis No.</label>
        <input type="text" name="chasis_no" class="form-control" placeholder="Enter Chasis No.">
        @error('chasis_no')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Variant</label>
        <input type="text" name="variant" class="form-control" placeholder="Enter Variant">
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control" placeholder="Enter Color">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="img" class="form-control">
        @error('img')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" placeholder="Enter Price">
        @error('price')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@Stop
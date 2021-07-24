@extends('layout')

@section('content')
<div>
    <div class="col-sm-6 offset-3">
    <h3 class="heading">Add Customer</h3>
    <form method="post" action="editcustomer" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data->id}}">
    @csrf
    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" name="customer_name" class="form-control" placeholder="Enter Name" value="{{$data->customer_name}}">
    </div>
    <!-- <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Name" value="{{$data->email}}">
    </div> -->
    <div class="form-group">
        <label>Contact</label>
        <input type="text" name="ph_no" class="form-control" placeholder="Enter Contact" value="{{$data->ph_no}}">
    </div>
    <div class="form-group">
        <label>Gender</label>&nbsp;&nbsp;
        <select name="gender" class="form-control">
            <option value="">Select Gender</option>
            <option value="Male" @if($data->gender == 'Male') selected @endif>Male</option>
            <option value="Female" @if($data->gender == 'Female') selected @endif>Female</option>
        </select>
    </div>
    <div class="form-group">
        <label>DOB</label>
        <input type="date" name="dob" class="form-control" placeholder="Enter Contact" value="{{$data->dob}}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{$data->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@Stop
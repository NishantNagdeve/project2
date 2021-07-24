@extends('layout')

@section('content')
    <h3 class="heading">Dashboard</h3>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body" style="background:#B6B6B4;">
                    <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-c-yellow" style="background:#F9B7FF;">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5" style="color:#FFF;">Total Customeer</p>
                                        <h4 class="m-b-0" style="color:#0F1FBF;">{{$customer}}</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-user f-50 text-c-blue"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-c-yellow" style="background:#1ECE59;">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="m-b-5" style="color:#FFF;">Total Vehicle</p>
                                        <h4 class="m-b-0" style="color:#0F1FBF;">{{$vehicle}}</h4>
                                    </div>
                                    <div class="col col-auto text-right">
                                        <i class="feather icon-user f-50 text-c-blue"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@Stop
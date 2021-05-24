@extends('layouts.admin.mains')
@section('title','Edit Setting')
@section('page','Edit Setting')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Setting form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                  <label for="">Logo*</label>
                  <input type="file" class="form-control" name="logo">
                </div>

                <div class="form-group">
                  <label for="">Logo text*</label>
                  <input type="text" class="form-control" name="logotext" placeholder="logotext">
                </div>

                <div class="form-group">
                  <label for="">Email*</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group">
                  <label for="">Hotline*</label>
                  <input type="text" class="form-control" name="hotline" placeholder="Enter Hotline">
                </div>

                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" name="Address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                  <label for="">Map</label>
                  <textarea name="map" id="" rows="3" class="form-control"></textarea>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.setting')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection
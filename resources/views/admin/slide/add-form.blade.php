@extends('layouts.admin.mains')
@section('title','Add Slide')
@section('page','Add Slide')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Slide form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('add.slide')}}"  method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="">Title*</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}">
                  @if($errors->first('title'))
                    <span class="text-danger"> {{$errors->first('title')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                  @if($errors->first('image'))
                    <span class="text-danger"> {{$errors->first('image')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Order_num*</label>
                  <input type="text" class="form-control" name="order_num" value="{{old('order_num')}}">
                  @if($errors->first('order_num'))
                    <span class="text-danger"> {{$errors->first('order_num')}} </span>
                  @endif
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.slide')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection
@extends('layouts.admin.mains')
@section('title','Add User')
@section('page','Add User')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('add.user')}}"  method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                  @if($errors->first('name'))
                    <span class="text-danger"> {{$errors->first('name')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Email*</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                  @if($errors->first('email'))
                    <span class="text-danger"> {{$errors->first('email')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Password*</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                  @if($errors->first('password'))
                    <span class="text-danger"> {{$errors->first('password')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Avatar</label>
                  <input type="file" class="form-control" name="avatar">
                  @if($errors->first('avatar'))
                    <span class="text-danger"> {{$errors->first('avatar')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                  <label for="">Number*</label>
                  <input type="text" class="form-control" name="number" placeholder="Enter Number" value="{{old('number')}}">
                  @if($errors->first('number'))
                    <span class="text-danger"> {{$errors->first('number')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Role</label>
                  <select name="role" id="" class="form-control">
                        <option value=""></option>
                        <option value="1">Menber</option>
                        <option value="500">Admin</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.user')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection
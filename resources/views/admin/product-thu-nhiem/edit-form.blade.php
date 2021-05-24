@extends('layouts.admin.mains')
@section('title','Add Product')
@section('page','Add Product')
@section('content')
<div class="row">
    <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('edit.pro',['id'=>$model->id])}}"  method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name',$model->name)}}">
                  @if($errors->first('name'))
                    <span class="text-danger"> {{$errors->first('name')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Price*:</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{old('price',$model->price)}}">
                  @if($errors->first('price'))
                    <span class="text-danger"> {{$errors->first('price')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="">Exist*:</label>
                  <input type="text" class="form-control" name="exist" placeholder="Enter price" value="{{old('exist',$model->exist)}}">
                  @if($errors->first('exist'))
                    <span class="text-danger"> {{$errors->first('exist')}} </span>
                  @endif
                </div>

                <div class="form-group">
                  <label class="form-label" for="prodcut_color">Type*:</label>

                  <div class="productType"> 
                      <!-- $type la tham so cho co' --> 
                      @foreach($model->type['name'] as $key => $type)
                      <div class="row">
                        <div class="col-md-3">Type Name : <input type="text" class="form-control" name="type[name][]"
                            value="{{old('type.name.$key',$model->type['name'][$key])}}"></div>
                        <div class="col-md-3">Type Price : <input type="text" class="form-control" name="type[price][]"
                            value="{{old('type.price.$key',$model->type['price'][$key])}}"></div>
                        <div class="col-md-3">Type Image : <input type="file" class="form-control" name="type[file][]"></div>
                      
                        <div class="col-md-3">Image: <img class="form-control" style="width: 60px;height: 45px;"
                                                  src="{{asset('images/types/'.$model->type['file'][$key])}}" alt="empty image"></div>
                      </div>
                      @endforeach                
                  </div>
                    <!-- lap validate form--> 
                  <div class="validateType">
                  <!-- $type la tham so cho co' --> 
                    @foreach($model->type['name'] as $key => $type)
                    <div class="row">
                        @if($errors->has('type.name.'.$key))
                          <span class="text-danger col-md-3"> {{$errors->first('type.name.'.$key)}} </span>
                        @endif
                        @if($errors->has('type.price.'.$key))
                          <span class="text-danger col-md-3"> {{$errors->first('type.price.'.$key)}} </span>
                        @endif
                        @if($errors->has('type.file.'.$key))
                          <span class="text-danger col-md-3"> {{$errors->first('type.file.'.$key)}} </span>
                        @endif
                      </div>
                      @endforeach
                  </div>

                  <br>
                  <button type="button" onclick="themelement('productType','Type Name ','Type Price ', 'type', 0, 0)">Add row type</button>
                  <!-- <span>Nut remove dang bi loi (Chua xoa dc anh o type['file'] nen loi)</span> -->
                  <button class="btnRemove" type="button" onclick="xoaelement('productType', 0)">Remove row type</button>
                </div>
                
                <div class="form-group">
                  <label class="form-label" for="prodcut_color">Size*:</label>

                  <div class="productSize">
                    <!-- $size la tham so cho co' -->
                    
                    @foreach($model->size['name'] as $key => $size)
                    <div class="row">
                      <div class="col-md-3">Size Name: <input type="text" class="form-control" name="size[name][]"  value="{{old('size.name.$key', $model->size['name'][$key])}}"></div>
                      <div class="col-md-3">Size Price: <input type="text" class="form-control" name="size[price][]"  value="{{old('size.price.$key',$model->size['price'][$key])}}"></div>
                    </div>
                    @endforeach
                  </div>
                    <!-- lap validate form--> 
                  <div class="validateSize">
                    <!-- $size la tham so cho co' -->

                    @foreach($model->size['name'] as $key => $size)
                      <div class="row">
                          @if($errors->has('size.name.'.$key))
                            <span class="text-danger col-md-3"> {{$errors->first('size.name.'.$key)}} </span>
                          @endif
                          @if($errors->has('size.price.'.$key))
                            <span class="text-danger col-md-3"> {{$errors->first('size.price.'.$key)}} </span>
                          @endif
                      </div>
                    @endforeach
                  </div>

                  <br>
                  <button type="button" onclick="themelement('productSize','Size Name ','Size Price ', 'size', 1, 1)">Add row size</button>
                  <button class="btnRemove" type="button"  @if(empty($model)) disabled @endif onclick="xoaelement('productSize', 1)">Remove row size</button>
                </div>

                <div class="form-group">
                  <label for="">Category*</label>
                  <select name="category_id" id="" class="form-control">
                        @foreach($cates as $cate)
                        <option value="{{$cate->id}}" @if($model->category_id == $cate->id) selected @endif >{{$cate->name}}</option>
                        @endforeach
                  </select>
                </div>


                <div class="form-group">
                  <label for="">Detail</label>
                  <textarea name="detail" rows="3"  class="form-control">{{$model->detail}}</textarea>
                </div>

                <div class="form-group">
                  <label class="form-label" for="">Image*</label>
                  <div class="productImage">
                    <div class="row">

                        @foreach($model->image as $key => $image)
                        <div class="col-md-3">
                          <input type="file" class="form-control" name="image[]" />
                        </div>
                        <div class="col-md-1" ><img class="" style="width: 60px;height: 35px;" src="{{asset('images/types/'.$model->image[$key])}}" alt=""></div>
                        @endforeach
                    </div>
                    @if($errors->first('image.0'))
                      <span class="text-danger"> {{$errors->first('image.0')}} </span>
                    @endif
                    <br>
                    <button type="button" onclick="themimage(2)">Add Image</button>
                    <!-- <span>Nut remove dang bi loi (Chua xoa dc anh o image[] nen loi)</span> -->
                    <button class="btnRemove" type="button"  onclick="xoaimage(2)">Remove Image</button>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.pro')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



       </div>
</div>
@endsection
<script>

    function themelement(divclassmain, text, text2, name, statusimg, position){
      var producttype = document.getElementsByClassName(divclassmain);
      var row = document.createElement("DIV");
      row.setAttribute('class','row');
      producttype[0].appendChild(row);

      var rowtype = document.createElement("DIV");
      rowtype.setAttribute('class','col-md-3');
      rowtype.innerHTML = text + " :";
      row.appendChild(rowtype);

      var rowinputtext = document.createElement("input");
      rowinputtext.setAttribute('type','text');
      rowinputtext.setAttribute('class','form-control');
      rowinputtext.setAttribute('name', name+'[name][]');
      rowtype.appendChild(rowinputtext);
      
      var rowtypeprice = document.createElement("DIV");
      rowtypeprice.setAttribute('class','col-md-3');
      rowtypeprice.innerHTML = text2 + " :";
      row.appendChild(rowtypeprice);

      var rowinputprice = document.createElement("input");
      rowinputprice.setAttribute('type','text');
      rowinputprice.setAttribute('class','form-control');
      rowinputprice.setAttribute('name', name+'[price][]');
      rowtypeprice.appendChild(rowinputprice);

      if(statusimg == 0){
        var rowtypepfile = document.createElement("DIV");
        rowtypepfile.setAttribute('class','col-md-3');
        rowtypepfile.innerHTML = "Type Image :";
        row.appendChild(rowtypepfile);

        var rowinputfile = document.createElement("input");
        rowinputfile.setAttribute('type','file');
        rowinputfile.setAttribute('class','form-control');
        rowinputfile.setAttribute('name','type[file][]');
        rowtypepfile.appendChild(rowinputfile);

      }

      document.getElementsByClassName('btnRemove')[position].disabled = false;
    }

    function xoaelement(divclassmain, position){
      var producttype = document.getElementsByClassName(divclassmain);
      var row = producttype[0].getElementsByClassName('row');

      if(row.length > 0){
          row[row.length-1].remove();

          if(row.length == 1){
            document.getElementsByClassName('btnRemove')[position].disabled = true;

            return false;
          }
      }
    }

    // New function

    

    function themimage(position){
      var productimage = document.getElementsByClassName('productImage');
      var row = productimage[0].getElementsByClassName('row');
      var productimage = document.createElement("DIV");
      productimage.setAttribute('class','col-md-3');
      row[0].appendChild(productimage);

      var image = document.createElement("input");
      image.setAttribute('type','file');
      image.setAttribute('class','form-control');
      image.setAttribute('name','image[]');
      productimage.appendChild(image);

      var showtimage = document.createElement("DIV");
      showtimage.setAttribute('class','col-md-1');
      row[0].appendChild(showtimage);

      document.getElementsByClassName('btnRemove')[position].disabled = false;
    }



    function xoaimage(position){
      var productimage = document.getElementsByClassName('productImage');
      var row = productimage[0].getElementsByClassName('row');
      var productimage = row[0].getElementsByClassName('col-md-3');
      var showimage = row[0].getElementsByClassName('col-md-1');



      if(productimage.length > 0 && showimage.length > 0){
        productimage[productimage.length-1].remove();
        showimage[showimage.length-1].remove();


         if(productimage.length == 1){
            document.getElementsByClassName('btnRemove')[position].disabled = true;
            return false;
          }
      }

    }

    // End new function

</script>

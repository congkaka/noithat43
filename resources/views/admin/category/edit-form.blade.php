@extends('layouts.admin.mains')
@section('title','Edit Category')
@section('page','Edit Category')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="{{route('edit.cate',['id'=>$model->id])}}"  method="post" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()" name="name"  placeholder="Enter name" value="{{old('name',$model->name)}}">
                  @if($errors->first('name'))
                    <span class="text-danger"> {{$errors->first('name')}} </span>
                  @endif
                </div>
               
                <div class="form-group">
                  <label for="">Slug*</label>
                  <input type="text" class="form-control" id="convert_slug" name="slug"  placeholder="Enter slug" value="{{old('slug',$model->slug)}}">
                  @if($errors->first('slug'))
                    <span class="text-danger"> {{$errors->first('slug')}} </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="">Detail</label>
                  <textarea name="detail" rows="3"  class="form-control">{{$model->detail}}</textarea>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.cate')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>

@endsection
<script type="text/javascript">
 
 function ChangeToSlug()
     {
         var slug;
      
         //L???y text t??? th??? input title 
         slug = document.getElementById("slug").value;
         slug = slug.toLowerCase();
         //?????i k?? t??? c?? d???u th??nh kh??ng d???u
             slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
             slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
             slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
             slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
             slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
             slug = slug.replace(/??|???|???|???|???/gi, 'y');
             slug = slug.replace(/??/gi, 'd');
             //X??a c??c k?? t??? ?????t bi???t
             slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
             //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
             slug = slug.replace(/ /gi, "-");
             //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
             //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
             slug = slug.replace(/\-\-\-\-\-/gi, '-');
             slug = slug.replace(/\-\-\-\-/gi, '-');
             slug = slug.replace(/\-\-\-/gi, '-');
             slug = slug.replace(/\-\-/gi, '-');
             //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
             slug = '@' + slug + '@';
             slug = slug.replace(/\@\-|\-\@|\@/gi, '');
             //In slug ra textbox c?? id ???slug???
         document.getElementById('convert_slug').value = slug;
     }
      



</script>
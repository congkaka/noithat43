<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.admin._layouts.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.admin._layouts.header')   
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.admin._layouts.slidebar')  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('page')
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">@yield('page')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        @yield('content')
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin._layouts.footer') 
<!-- ./wrapper -->

  @include('layouts.admin._layouts.js') 
  @yield('js')
  <script type="text/javascript">
     $(document).ready(function(){
   
          // Confirm Delete
          $('#confirm-delete').on('show.bs.modal', function(e) {
              $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
          });
     });
</script>
</body>
</html>

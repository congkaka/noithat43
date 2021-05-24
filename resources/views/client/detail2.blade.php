<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('client/js/owl/dist/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('client/fonts/fontawesome/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('client/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('client/btn.css') !!}">
    <link rel="stylesheet" href="{!! asset('client/css.css') !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/favicon.ico') !!}">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <script src="{!! asset('client/js/owl/jquery.min.js') !!}"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <style>

        
    
    </style>

</head>

<body>

    <pre>
    @foreach($models as $key => $model)
        {{$model->name}}
        {{$model->image[$key]}}
    @endforeach
    </pre>
    {{dd($models)}}


</body>

</html>
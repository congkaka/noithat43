@extends('layouts.admin.mains')
@section('title','Confirm order')
@section('page','Confirm order')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="Titlebox">Order ID: {{$order->id}}</h3>
              <h3 class="Titlebox">Address: {{$order->address}}</h3>
            </div>

            <form>
              <div class="box-body">
                <div class="form-group">
                  <label for="From">Diem bat dau:</label>
                  <input type="text" class="form-control" id="from" placeholder="Nhap diem bat dau" value="">
                </div>
                <div class="form-group">
                  <label for="to">Diem toi:</label>
                  <input type="text" class="form-control" id="to" placeholder="Nhap diem toi" value="">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary" type="button" onclick="calcRoute()"><i class="fa fa-long-arrow-right"></i></button>
              </div>
            </form>
            <div id="googleMap">

            </div>
            <div id="output">

            </div>
            <div class="note">
                <div class="titlenote">
                    <h4></h4>
                </div>
            </div>

            <form action="{{route('edit.order',['id' => $order->id])}}" method="post">
           
              <div class="form-group">
                @csrf
                <label for="">Phi ship theo 1 km:</label>
                <input type="text" name="" id="pship" value="1000" onkeyup="okey1()" style="width:80px;">

                <label for="">Quang duong van chuyen:</label>
                <input type="text" name="" id="dship" value="0" disabled onkeyup="okey1()" style="width:80px;">

                <label for="">Chi phi van chuyen:</label>
                <input type="text" name="" id="totalship" disabled value="0" class="tship">

                <label for="">Tong so tien hoa don:</label>
                <input type="hidden" name="total_price" value="{{$order->total_price}}" id="otship" >
                <input type="hidden" class="tship" value="{{$order->total_price}}">
                <input type="text" id="otshipshow"  disabled value="{{$order->total_price}}">

              </div>
              <button type="submit" class="btn btn-primary">Cap nhat</button>
              <a href="{{route('list.order')}}" class="btn btn-danger">Back</a>
            </form>
        
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwjfCtvKRncfKvacTIMaawjUeBfdYz1tI&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script>
      // function okey1(){
      //   var x = document.getElementById('pship').value;
      //   var y = document.getElementById('dship').value;
      //   document.getElementById('totalship').value = x * y;
      //   var tship = document.getElementsByClassName('tship');
      //   var tong = 0;
      //   for (let i = 0; i < tship.length; i++) {
      //     var so = Number(tship[i].value);
      //     tong += so;
      //     // console.log(tong += so);
      //     document.getElementById('otship').value = tong;
      //     document.getElementById('otshipshow').value = tong;
      //   }

      // }


      var myLatLng = {lat: 21, lng: 105};
      var mapOptions = {
        center : myLatLng,
        zoom : 7,
        mapTypeId: 'roadmap'
      };

      var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

      var directionsService = new google.maps.DirectionsService();

      //create a DirectionsRenderer object which we will use to display the route
      var directionsDisplay = new google.maps.DirectionsRenderer();

      //bind the DirectionsRenderer to the map
      directionsDisplay.setMap(map);


      //define calcRoute function
      function calcRoute() {
          //create request
          var request = {
              origin: document.getElementById("from").value,
              destination: document.getElementById("to").value,
              travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
              unitSystem: google.maps.UnitSystem.metric
          }

          //pass the request to the route method
          directionsService.route(request, function (result, status) {
              if (status == google.maps.DirectionsStatus.OK) {

                  //Get distance and time
                  const output = document.getElementById("output");
                  output.innerHTML = "<div class='alert-info'>From: " + document.getElementById("from").value + ".<br />To: " + document.getElementById("to").value + ".<br /> Driving distance : " + result.routes[0].legs[0].distance.text + ".<br /></div>";

                  //display route
                  directionsDisplay.setDirections(result);


                  //custom add
                  var x = document.getElementById('pship').value;
                  var y = document.getElementById('dship').value;
                  document.getElementById('dship').value = result.routes[0].legs[0].distance.text;
                  y = result.routes[0].legs[0].distance.text;
                  y = y.replace(/,/g,"");
                  y = y.replace("km","");

                  document.getElementById('totalship').value = x * y;
                  var tship = document.getElementsByClassName('tship');
                  var tong = 0;
                  for (let i = 0; i < tship.length; i++) {
                    var so = Number(tship[i].value);
                    tong += so;
                    // console.log(tong += so);
                    document.getElementById('otship').value = tong;
                    document.getElementById('otshipshow').value = tong;
                  }


              } else {
                  //delete route from map
                  directionsDisplay.setDirections({ routes: [] });
                  //center map in London
                  map.setCenter(myLatLng);

                  //show error message
                  output.innerHTML = "<div class='alert-danger'> Could not retrieve driving distance.</div>";
              }
          });

      }



      //create autocomplete objects for all inputs
      var options = {
          types: ['(cities)']
      }

      var input1 = document.getElementById("from");
      var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

      var input2 = document.getElementById("to");
      var autocomplete2 = new google.maps.places.Autocomplete(input2, options);




  
  </script>
@endsection
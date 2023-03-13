
<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ URL::asset('public/track/css/bootstrap.min.css')}}">

<!-- jQuery library -->
<script src="{{ URL::asset('public/track/js/jquery.min.js')}}"></script>

<!-- Popper JS -->
<script src="{{ URL::asset('public/track/js/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{ URL::asset('public/track/js/bootstrap.min.js')}}"></script>
<style>
/* Firefox old*/
@-moz-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 

@-webkit-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* IE */
@-ms-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
/* Opera and prob css3 final iteration */
@keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
.blink-image {
    -moz-animation: blink normal 2s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 2s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 2s infinite ease-in-out; /* IE */
    animation: blink normal 2s infinite ease-in-out; /* Opera and prob css3 final iteration */
}
</style>
</head>
<body style="background-color:#EFEFEF">    
 <br><br>
<div class="container" style="background-color:white">
    <br><br>
    
     <p align="center" style="color:red">
         <img src="{{ URL::asset('public/track/img/sm.png')}}"><br>
         Your parcel is safe.</p>
    <h3 align="center"><strong>TRACKING DETAILS</strong></h3><hr><br>
    <div class="row">
        <div class="col-lg-4" align="center">
    <img src="{{ URL::asset('public/track/img/0F02B20F-D516-4A3D-8072-CBDC84008FEB.jpg')}}" class="img-responsive" style="border-radius:5px" width="200px" height="200px">
</div>
<div class="col-lg-4">
    <div style="background-color:#0099FF; padding-top:5px; padding-bottom:2px; padding-left:2px; color:white">
<h4 class="text-uppercase">Sender's Details</h4>
</div>
  <table class="table table-sm">
    <thead>
      <tr>
        <th>Name:</th>
        <td>{{$tracks->sender_name}}</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Email:</th>
        <td>{{$tracks->sender_email}}</td>
      </tr>

      <tr>
        <th>Address</th>
        <td>{{$tracks->sender_address}}</td>
      </tr>
      <tr>
        <th>Phone:</th>
        <td>{{$tracks->sender_phone}}</td>
        </tr>
     
    </tbody>
</table>
</div>


<div class="col-lg-4">
        <div style="background-color:#0099FF; padding-top:5px; padding-bottom:2px; padding-left:2px; color:white">
<h4 class="text-uppercase">receivers detail's</h4>
</div>
  <table class="table table-sm">
    <thead>
      <tr>
        <th>Name:</th>
        <td>{{$tracks->receiver_name}}</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Email:</th>
        <td>{{$tracks->receiver_email}}</td>
      </tr>
      <tr>
        <th>Address:</th>
        <td>{{$tracks->receiver_address}}</td>
      </tr>
      <tr>
        <th>Phone:</th>
        <td>{{$tracks->receiver_phone}}</td>
      </tr>
    </tbody>
</table>
</div>
</div>
<br>
 <p style="background-color:#323680; color:#FFF;">
     <marquee scrollamount="3" onMouseOver="stop">Reference code number {{$tracks->ref_code}}, Serial Number {{$tracks->serial_number}}, Deposit Number {{$tracks->deposit_number}}.</marquee>
     </p>
     <br>
     <div class="card">
  <div class="card-header"><h4>Package Infomation.</h4></div>
  <div class="card-body">
      <table class="table table-bordered table-sm" style="background-color:#333333; color:white">
    <thead>
      <tr>
        <td>Serial Number:</td>
        <td>{{$tracks->serial_number}}</td>
    </tr>
    
    <tr>
        <td>Item Name:</td>
        <td>{{$tracks->item_name}}</td>
        </tr>
        
        
        <tr>
        <td>Weight:</td>
        <td>{{$tracks->shipping_weight}}</td>
        </tr>
        
        <tr>
        <td>Order type:</td>
        <td><h5> <span class="badge badge-warning">{{$tracks->order_type}}</span></h5></td>
        </tr>
        
        <tr>
        <td>Shipping From:</td>
        <td>{{$tracks->shipping_from}}</td>
        </tr>
        
        <tr>
        <td>To:</td>
        <td>{{$tracks->shipping_to}}</td>
        </tr>
        
    </thead>
  </table>
  </div>
  
</div>
     
<div class="row">
    <div class="col-lg-4">
</div>
    
    <div class="col-lg-4" align="center">
    <h4 class="text-uppercase">Tracking information:</h4>
    <div class="progress">
  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" style="width:{{$tracks->delivery_percentage}}%"></div>
</div>
<span><i>Delivery pecentage {{$tracks->delivery_percentage}}%</i></span>
        <hr>
        <!-- <img width="200px" src="#"> -->
        <p><strong>Tracking Number</strong><br>
        <span style="color:blue">
        {{$tracks->tracking_id}}        </span>
        </p>
        
        <p>
                <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment1}}<br><strong>{{$tracks->package_detail1}} </strong><br>{{$tracks->date1}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment2}}<br><strong>{{$tracks->package_detail2}} </strong><br>{{$tracks->date2}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment3}}<br><strong>{{$tracks->package_detail3}} </strong><br>{{$tracks->date3}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment4}}<br><strong>{{$tracks->package_detail4}} </strong><br>{{$tracks->date4}}  <br>
      

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment5}}<br><strong>{{$tracks->package_detail5}} </strong><br>{{$tracks->date5}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment6}}<br><strong>{{$tracks->package_detail6}} </strong><br>{{$tracks->date6}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment7}}<br><strong>{{$tracks->package_detail7}} </strong><br>{{$tracks->date7}}  <br>

    <img src="{{ URL::asset('public/track/img/dash2.png')}}" width="5px"><br>
    <img src="{{ URL::asset('public/track/img/dot.png')}}" class="blink-image" width="10px"> {{$tracks->comment8}}<br><strong>{{$tracks->package_detail8}} </strong><br>{{$tracks->date8}}  <br>
       
    </p>
    </div>
    
    <div class="col-lg-4">
</div>

</div>

<br><br><br><br><br>


</body>

</html>
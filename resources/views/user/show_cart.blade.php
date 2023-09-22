<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Hexashop</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/lightbox.css')}}">
 </head>

  <body>
         <!-- ***** Preloader Start ***** -->
             <!-- ***** Preloader Start ***** -->
             <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    @include("user.header");
 <br><br><br><br><br><br><br>
 <div class="container">

   @if(session()->has('message'))
                                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  {{session()->get('message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                      
                                   </button>
                                 
                                 </div>
                                 @endif
 </div>
<div class="container">
  <?php $totalprice= 0;?>
@foreach($cart as $cart)
  <div class="row">
    <div class="col-md-3">
      <img src="{{ url('uploads/employees/'.$cart->image) }}" style="border-radius:50%;" width="150" height="150" alt="">
      
    </div>
    <div class="col-md-2" style="margin-top:2%">
      <h2>{{$cart->product_title}}</h2>
    </div>
    <div class="col-md-2" style="margin-top:4%">
      <h4> Price: ${{$cart->price}}</h4>
    </div>
    <div class="col-md-2" style="margin-top:4%">
      <h5>Quantity :{{$cart->quantity}}</h5>
    </div>
    <div class="col-md-2" style="margin-top:4%">
      <a href="{{route('delete_cart',$cart->id)}}" class="btn btn-dark">Delete</a>
    </div>
    <br><br>
  </div>
  <?php  $totalprice=$totalprice + $cart->price?>
  @endforeach
  <div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">

      <h1> Total : ${{$totalprice}}</h1>
    </div>
  </div>
</div>
<div class="container">

  <div class="row">
    <div class="col-md-4">
      <h4>
        Proceed To Checkout
      </h4>
    </div>
    <div class="col-md-2" >
      <a href="{{route('cash')}}" class="btn btn-dark">Cash Payment</a>
  </div>
  <div class="col-md-2" >
      <a href="{{route('stripe',$totalprice)}}" class="btn btn-dark">Card Payment</a>
  </div>
</div>

</div>
<br><br>
    @include("user.footer");
    <!-- jQuery -->
    <script src="{{asset('user/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('user/assets/js/popper.js')}}"></script>
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>



    <!-- Plugins -->
    <script src="{{asset('user/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('user/assets/js/accordions.js')}}"></script>
    <script src="{{asset('user/assets/js/datepicker.js')}}"></script>
    <script src="{{asset('user/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('user/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('user/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('user/assets/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('user/assets/js/slick.js')}}"></script> 
    <script src="{{asset('user/assets/js/lightbox.js')}}"></script> 
    <script src="{{asset('user/assets/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('user/assets/js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>



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

  <body style="overflow-x:hidden;">
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
<?php $totalprice=0; ?>
<br><br><br><br>
<br><br>
    <div>
        <center><h1>Proceed To Checkout</h1></center>
        <br>
        <div class="container" style=" overflow-x:hidden;overflow-y:hidden;">
  <?php $totalprice= 0;?>

  <div class="row">
    <div class="col-md-3">
    <h5>Name:</h5>Nimra
          
    </div>
    <div class="col-md-2" >
    <h5>Price:</h5>$23
    </div>
    <div class="col-md-2" >
    <form action="#" method="Post">
        @csrf
        <textarea name="address" id="" cols="60" rows="3">address:</textarea>
   
    </div>
    <br>
</div>
    <div class="row">
        
    <div class="col-md-2" >
    <h5>Product Summary:</h5>black shirt
    </div>
<div class="col-md-2">
  <h5>  Shipping Method:</h5>
</div>
<div class="col-md-2">
    <input type="radio" name="cash" id="">Cash On delivery
</div>
<div class="col-md-2">
    <input type="radio" name="card" id="">Paypal
</div>
</div>
</form>
  <div class="row">
    <div class="col-md-8">

    </div>
    <div class="col-md-4">

      <h1> Total : </h1>
    </div>
  </div>
</div>
<div class="row" style=" overflow-x:hidden;overflow-y:hidden;">
  <div class="col-md-8"></div>
  <div class="col-md-4" style="margin-top:1%;">
  <a href="{{route('checkout')}}" class="btn btn-dark">Checkout</a>
  </div>
</div>

  
  
       <div style="overflow-x:hidden;">
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


</div>
</body>
</html>
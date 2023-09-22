<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/lightbox.css')}}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
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
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Product Details</h2>
            
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                @if($product_detail->image != '' && file_exists(public_path().'/uploads/employees/'.$product_detail->image))
                                                     <img src="{{ url('uploads/employees/'.$product_detail->image) }}" alt="" width="100" height="540" >
                                                         @else
                                                     <img src="{{ url('assets/images/no-image.png') }}" alt="" width="240" height="540" >
                                                    @endif
            </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$product_detail->title}}</h4>
                    <span class="price">${{$product_detail->price}}</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>{{$product_detail->description}}</span>
                   
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: $210.00</h4>
                        <div class="main-border-button">
                        <li><form action="{{route('add_cart',$product_detail->id)}}" method="post">
                                        @csrf
                                        <input type="number" name="quantity" value="1" min="1">
                                         <button type="submit" style="border:none ; color:#FFFAFA"><a><i class="fa fa-shopping-cart"></i></a></button>
                                         </form>
                                     </li>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
  
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
    <script src="{{asset('user/assets/js/quantity.js')}}"></script>
    
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
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
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    @include("user.header");
    

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            @foreach($product as $products)
            @if($products->category=="clothingWomen")
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{route('product_details',$products->id)}}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><form action="{{route('add_cart',$products->id)}}" method="post">
                                        @csrf
                                        <input type="number" name="quantity" value="1" min="1">
                                         <button type="submit" style="border:none ; color:#FFFAFA"><a><i class="fa fa-shopping-cart"></i></a></button>
                                         </form>
                                     </li>
                                </ul>
                            </div>  @if($products->image != '' && file_exists(public_path().'/uploads/employees/'.$products->image))
                                                     <img src="{{ url('uploads/employees/'.$products->image) }}" alt="" width="385" height="330" >
                                                         @else
                                                     <img src="{{ url('assets/images/no-image.png') }}" alt="" width="385" height="330" >
                                                    @endif
                        </div>
                        <div class="down-content">
                            <h4>{{$products->title}}</h4>
                            @if($products->discount_price=="")
                            <span style="font-size:30px">{{$products->price}}</span>
                            @elseif($products->discount_price!=null)
                                <div class="row">
                               <div class="col-md-9">
                               <span style="  text-decoration: line-through;">{{$products->price}}</span>
                              
                               </div>
                               <div class="col-md-3">

                                   <span style="color:red;font-size:30px">{{$products->discount_price}}</span>
                                </div>     
                                </div>
                        
               
                            @endif
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
   
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
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

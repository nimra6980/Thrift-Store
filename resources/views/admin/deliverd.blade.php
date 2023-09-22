<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tabib-v2.inaikas.com/all-patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexashop Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/logo.png')}}">
    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/style.css')}}">
</head>

<body>
    <div id="main-wrapper" class="show">
        @include("admin.sidepanel");
        @include("admin.logo_component");
        @include("admin.header");

                <!-- start section content -->
                <div class="content-body">
            <div class="warper container-fluid">
                <div class="all-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">New Deliverd Order</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="#">New Deliverd Order</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header fix-card">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="card-title"> All Deliverd Orders </h4>
                                        </div>
                                        <div class="col-4 float-end">
                                            <a href="#" class="btn btn-primary float-end">New
                                                Deliverd Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Phone</th>
                                                    <th>Product ID</th>
                                                    <th>User ID</th>
                                                    <th>Payment Method</th>
                                                    <th>Delivery Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($deliverd as $deliverd)
                                                <tr>
                                                    <td>{{$deliverd->id}}</td>
                                                    <td>
                                                      @if($deliverd->image != '' && file_exists(public_path().'/uploads/employees/'.$deliverd->image))
                                                     <img src="{{ url('uploads/employees/'.$deliverd->image) }}" alt="" width="120" height="120" class="rounded-circle">
                                                         @else
                                                     <img src="{{ url('assets/images/no-image.png') }}" alt="" width="120" height="120" class="rounded-circle">
                                                    @endif
                                                     </td>
                                                    <td>{{$deliverd->product_title}}</td>
                                                    <td>{{$deliverd->quantity}}</td>
                                                
                                                    <td>{{$deliverd->price}}</td>
                                                    <td>{{$deliverd->name}}</td>
                                                    <td>{{$deliverd->emai}}</td>
                                                    <td>{{$deliverd->phone}}</td>
                                                    <td>{{$deliverd->product_id}}</td>
                                                    <td>{{$deliverd->user_id}}</td>
                                                    <td>{{$deliverd->payment_status}}</td>
                                                    <td>{{$deliverd->delivery_status}}</td>
                                                    <td class="text-start">
                                                   <a href="{{route('delete_deliverd',$deliverd->id)}}" class="btn btn-primary">Delete</a>
                                                      
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section content -->

        
 
    <!-- End Show data patient -->


        @include("admin.footer");




    </div>
   
    <!-- JQuery v3.5.1 -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- popper js -->
    <script src="{{asset('admin/assets/plugins/popper/popper.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Moment -->
    <script src="{{asset('admin/assets/plugins/moment/moment.min.js')}}"></script>

    <!-- Date Range Picker -->
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/init-tdatatable.js')}}"></script>

    <!-- Main Custom JQuery -->
    <script src="{{asset('admin/assets/js/toggleFullScreen.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script src="{{asset('admin/assets/js/option-themes.js')}}"></script>

</body>


<!-- Mirrored from tabib-v2.inaikas.com/all-patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:59 GMT -->
</html>
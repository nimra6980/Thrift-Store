<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from tabib-v2.inaikas.com/new-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:01 GMT -->
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
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">New Product</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('view_product')}}">New Product</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{route('insert_product')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="form-group row widget-3">
                                                        <div class="col-lg-12">
                                                            <div class="form-input">
                                                                <label class="labeltest" for="file-ip-1">
                                                                    <span> Drop image here or click to upload. </span>
                                                                </label>
                                                                <input type="file" id="file-ip-1" accept="image/*"
                                                                    onchange="showPreview(event);" name="image">
                                                                <div class="preview">
                                                                    <img id="file-ip-1-preview" src="#" alt="img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Title" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" name="price" class="form-control" placeholder="Price">
                                                    </div>
                                                 
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Discount Price" name="discount_price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control form-select" name="category">
                                                            @foreach($category as $category)
                                                            <option value="{{$category->category_name}}{{$category->category_type}}">{{$category->category_name}}-{{$category->category_type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            <div class="row">
                                          <div class="col-xl-4"></div>
                                                <div class="col-xl-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Description" name="description"
                                                            rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button type="submit"
                                                            class="btn btn-primary float-end">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End section content -->
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


<!-- Mirrored from tabib-v2.inaikas.com/new-Product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:36 GMT -->
</html>
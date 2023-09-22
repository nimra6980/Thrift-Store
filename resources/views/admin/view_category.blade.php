<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tabib-v2.inaikas.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tabib Apps web | Admin Dashboard Template'}}">
    <title>Hexashop Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/logo.png')}}">
    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div id="main-wrapper" class="show">
    @include("admin.sidepanel");
    @include("admin.logo_component");
    @include("admin.header");

    
        <!-- start section content -->
        
        <div class="content-body">
        @if(session()->has('message'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{session()->get('message')}}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    
                                 </button>
                               
                               </div>
                               @endif
            <div class="warper container-fluid">
                <div class="new_appointment main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                             
                                <h4 class="text-primary">Add Category</h4>
                                <p class="mb-0">Add New Category</p>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active"><a href="add-test.html">Add Category</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header fix-card">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="card-title">All Category</h4>
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-primary float-end"
                                                data-bs-toggle="modal" data-bs-target="#addCategory"> Add Category</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category Name</th>
                                                    <th>Category Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $data)
                                                <tr>
                                                    <td>{{$data->id}}</td>
                                                    <td>{{$data->category_name}}</td>
                                                    <td>{{$data->category_type}}</td>
                                                    <td class="text-start">
                                                        <a data-bs-toggle='modal' data-bs-target='#addCategory'
                                                            class='mr-4'>
                                                            <span class='fas fa-pencil-alt tbl-edit'></span>
                                                        </a>
                                                        <a class='mr-4 delet'href="{{route ('delete_category',$data->id)}}"><span class='fas fa-trash-alt tbl-delet'></span></a>
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
                </div>
            </div>
        </div>
        <!-- End section content -->


                <!-- change date and time patient -->
     <div class="modal fade selectRefresh" id="addCategory" tabindex="-1" role="dialog"
            aria-labelledby="modal-title-addDrug-modal">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title-addDrug-modal"> Add Category </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form class="row align-items-start" action="{{route ('add_category')}}" method="POST">
                            @csrf
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input class="form-control" name="category_name"></input>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Type</label>
                                    <select class="form-control form-select" name="category_type">
                                        <option></option>
                                        <option value="Women">Women</option>
                                        <option value="Men">Men</option>
                                        <option value="Kids">Kids</option>
                                        <option value="Universal">Universal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="Save" class="btn btn-primary">
                    </div>
                            
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- change date and time patient -->
    
    @include("admin.footer");
</div>

<!-- JQuery v3.5.1 -->
<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('admin/assets/plugins/popper/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Moment -->
    <script src="{{asset('admin/assets/plugins/moment/moment.min.js')}}"></script>
    <!-- Date Range Picker -->
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.min.j')}}"></script>
    <!-- Datatable -->
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/init-tdatatable.js')}}"></script>
    <!-- Chart js -->
    <script src="{{asset('admin/assets/plugins/chart/chart/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/charts-custom.js')}}"></script>
    <!-- Main Custom JQuery -->
    <script src="{{asset('admin/assets/js/toggleFullScreen.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script src="{{asset('admin/assets/js/option-themes.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from tabib-v2.inaikas.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:49 GMT -->
</html>
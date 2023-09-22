
        <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-lg-12 p-md-0">
                        <h4 class="text-primary">Welcome 
                        @if (Route::has('login'))
                                        @auth
                             <span class="names" style="text-transform:capitalize">{{ Auth::user()->name }}</span>
                             @endauth
                            @endif</h4>
                       
                    </div>
                </div>
                <div class="new-patients main_container">
             
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow widget1">
                                <div class="card-header">
                                    <h4 class="card-title">Activity</h4>
                                    <span class="subtitle">TODAY 24, JAN 2019</span>
                                </div>
                                <div class="card-body">
                                    <canvas id="chart1" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow widget-2">
                                <div class="card-header">
                                    <h4 class="card-title">New Customer</h4>
                                </div>
                                <div class="card-body">
                                    <div class="panel-body widget-media main-scroll nicescroll-box">
                                        <ul class="list-group list-unstyled">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center media">
                                                <div class="d-flex">
                                                    <div class="img-patient">
                                                        <img src="{{asset('admin/assets/images/patients/user1.jpg')}}"
                                                            class="rounded-circle" alt="people">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="mb-0">Airi Satou</h4>
                                                        <span>Maried, Rabat</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="ms-btn-icon btn-success" name="button">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center media">
                                                <div class="d-flex">
                                                    <div class="img-patient">
                                                        <img src="{{asset('admin/assets/images/patients/user2.jpg')}}"
                                                            class="rounded-circle" alt="people">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="mb-0">Airi Satou</h4>
                                                        <span>Maried, Rabat</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="ms-btn-icon btn-success" name="button">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center media">
                                                <div class="d-flex">
                                                    <div class="img-patient">
                                                        <img src="{{asset('admin/assets/images/patients/user3.jpg')}}"
                                                            class="rounded-circle" alt="people">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="mb-0">Airi Satou</h4>
                                                        <span>Maried, Rabat</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="ms-btn-icon btn-success" name="button">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center media">
                                                <div class="d-flex">
                                                    <div class="img-patient">
                                                        <img src="{{asset('admin/assets/images/patients/user4.jpg')}}"
                                                            class="rounded-circle" alt="people">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="mb-0">Airi Satou</h4>
                                                        <span>Maried, Rabat</span>
                                                    </div>
                                                </div>
                                                <button type="button" class="ms-btn-icon btn-success" name="button">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow widget1">
                                <div class="card-header">
                                    <h4 class="card-title">Top Orders</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <canvas id="chart3" width="100%" height="220"></canvas>
                                        </div>
                                        <div class="col-lg-10">
                                            <ul class="d-flex justify-content-between m-t-30">
                                                <li class="content-widget text-center">
                                                    <p class="mb-0 fs-14 text-muted">Stroke</p>
                                                    <h4 class="mb-0 fs-20 text-dark-gray">8952</h4>
                                                </li>
                                                <li class="content-widget text-center">
                                                    <p class="mb-0 fs-14 text-muted">Diabetes</p>
                                                    <h4 class="mb-0 fs-20 text-dark-gray">7458</h4>
                                                </li>
                                                <li class="content-widget text-center">
                                                    <p class="mb-0 fs-14 text-muted">Cirrhosis</p>
                                                    <h4 class="mb-0 fs-20 text-dark-gray">3254</h4>
                                                </li>
                                                <li class="content-widget text-center">
                                                    <p class="mb-0 fs-14 text-muted">Tuberculosis</p>
                                                    <h4 class="mb-0 fs-20 text-dark-gray">3254</h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow widget1">
                                <div class="card-header">
                                    <h4 class="card-title">Total Orders Per Day</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="chart2" width="100%" height="299"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Order List | 04 Aug 2022</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Date</th>
                                                    <th>Patient</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        07:00
                                                    </td>
                                                    <td>01 Jun 2022</td>
                                                    <td> Michael R Sheets </td>
                                                    <td> 1468 Selah Way - Rabat</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start">
                                                        <span class="badge badge-primary">Start appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        07:30
                                                    </td>
                                                    <td>02 Jun 2022</td>
                                                    <td> Eric J Lane</td>
                                                    <td>1468 Selah Way - Agadir</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        08:00
                                                    </td>
                                                    <td>03 Jun 2022</td>
                                                    <td> Pamela R Matheney </td>
                                                    <td>1468 Selah Way - Casablanca</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        08:30
                                                    </td>
                                                    <td>04 Jun 2022</td>
                                                    <td> Chelsea S Coy
                                                    </td>
                                                    <td>1468 Selah Way - Fes </td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span
                                                            class="badge btn-danger">Canclled</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        09:00
                                                    </td>
                                                    <td>05 Jun 2022</td>
                                                    <td> Michael R Sheets
                                                    </td>
                                                    <td> 1468 Selah Way - Oujda</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        09:30
                                                    </td>
                                                    <td>06 Jun 2022</td>
                                                    <td>Eric J Lane</td>
                                                    <td>1468 Selah Way - Marakesh</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 10:00 </td>
                                                    <td>07 Jun 2022</td>
                                                    <td> Pamela R Matheney </td>
                                                    <td>1468 Selah Way - Lexington</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 10:30 </td>
                                                    <td>08 Jun 2022</td>
                                                    <td> Chelsea S Coy </td>
                                                    <td>1468 Selah Way - Bakersfield </td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span
                                                            class="badge btn-danger">Canclled</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 11:00 </td>
                                                    <td>09 Jun 2022</td>
                                                    <td> Michael R Sheets </td>
                                                    <td> 1468 Selah Way - Brattleboro</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 11:30 </td>
                                                    <td>10 Jun 2022</td>
                                                    <td> Eric J Lane</td>
                                                    <td>1468 Selah Way - Laayoune</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 09:00 </td>
                                                    <td>11 Jun 2022</td>
                                                    <td> Pamela R Matheney </td>
                                                    <td>2320 May Street - Lexington</td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span class="badge badge-primary">Start
                                                            appt</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 09:00 </td>
                                                    <td>12 Jun 2022</td>
                                                    <td> Chelsea S Coy </td>
                                                    <td>3342 Lowndes Hill - Berrechid </td>
                                                    <td>833 - 844 - 0100</td>
                                                    <td class="text-start"> <span
                                                            class="badge btn-danger">Canclled</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()" class='mr-4 check'> <span
                                                                class='fas fa-check'></span></a>
                                                        <a href="javascript:void()" class='delet'> <span
                                                                class='fas fa-trash-alt tbl-delet'></span> </a>
                                                    </td>
                                                </tr>
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
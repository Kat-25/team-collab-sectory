
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     <!-- Sidebar -->
     
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- top bar -->
              <?php
                include './Resident/header.php';
             ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <!-- Content Row -->
                    <div class="row">

                      

                        <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                </a>

                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                       <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"><a target="_blank"
                            href=""></a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Description</th>
                                            <th></th>
                                            <th>Date</th>
                                            <th>View Announcements</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td></td>
                                            <td>Edinburgh</td>
                                            <th></th>
                                            <td>2011/04/25</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                            <td></td>
                                            <td>Edinburgh</td>
                                            <th></th>
                                            <td>2011/04/25</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                            <td></td>
                                            <td>Edinburgh</td>
                                            <th></th>
                                            <td>2011/04/25</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td class="d-flex justify-content-center"><a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">View</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-primary btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="../Barangaystaff/viewannouncementstaff.php" class="btn btn-danger btn-icon-split ml-3">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Archive</span>
                                            </a>
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
                include './Resident/footer.php';
             ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
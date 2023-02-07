<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php 
        include '../Resident/sectoryheader.php';
    ?>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include '../Resident/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                    include '../Resident/header.php';
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Transaction Logs</h1>
                    </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

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
                                    <thead class="text-center">
                                         <tr>
                                            <th>Log ID</th>
                                            <th>Resident ID</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction Type</th>
                                            <th>Issued By</th>
                                            <th>View Logs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                            <td>123</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>2</td>
                                            <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>3</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>4</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
                                        </tr>
                                        <tr>
                                        <td>Tiger Nixon</td>
                                        <td>312</td>
                                            <td>02/03/2022</td>
                                            <th></th>
                                            <td>Admin</td>
                                            <td class="d-flex justify-content-center"><a href="../Residentpages/viewannouncement.php" class="btn btn-success btn-icon-split">
                                                </span>
                                                <span class="text">View</span>
                                            </a></td>
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
            </div>
            <!-- End of Main Content -->
                 <!-- Footer -->
            <?php
                include '../Resident/footer.php';
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

    <!-- Logout Modal-->
    <?php include '../Resident/logout.php'; ?>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
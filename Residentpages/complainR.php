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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
            include '../Resident/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include '../Resident/header.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>
                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Complaints</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">:</div>
                                            <a class="dropdown-item" href="#">CANCEL</a>
                                            <a class="dropdown-item" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                <div class="form-group">
                                <div class="form-row">
                                        <div class="form-group col-md-3 col-lg-3">
                                        <label for="inputEmail4">Complainant</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-3 col-lg-3">
                                        <label for="inputEmail4">Time Of Incident</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-3 col-lg-3">
                                        <label for="inputEmail4">Date Of Incident</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-3">
                                        <label for="inputState">Type:</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>high</option>
                                            <option>mid</option>
                                            <option>low</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3 col-lg-3">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" id="">
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <label for="exampleFormControlTextarea1">Type your complain/s.</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                            <div class="row ml-5">
                                                    <div class="col mt-5">
                                                    <h2 class="fs-title">Upload Evidence</h2>
                                                        <div class="radio-group">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleFormControlFile1">File input</label>
                                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                            </div> 
                                                    </div>
                                                    <div class="col-3">
                                                    </div>
                                                </div>
                                    </div>
                                </div>

                            

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
            <!-- Footer -->
         <?php
                include '../Resident/footer.php';
            ?>
            <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
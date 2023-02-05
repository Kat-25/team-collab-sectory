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
               <?php  include '../Resident/header.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                    <div class="col-sm-10"><h1>User name</h1></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"><!--left col-->
               
                        

                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div></hr><br>
                    
                    </div><!--/col-3-->
                    <div class="col-sm-9">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        </ul>

                        
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>First name</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Last name</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Phone</h4></label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4>Mobile</h4></label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="email"><h4>Location</h4></label>
                                        <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="password"><h4>Password</h4></label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        <label for="password2"><h4>Verify</h4></label>
                                        <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit"><i class=""></i> Save</button>
                                            <button class="btn btn-lg btn-success" type="submit"><i class=""></i> Edit</button>
                                            <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                </div>
                            </form>
                        
                        <hr>
              
             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
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
    <?php
        include '../Resident/logout.php';
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>sign app </title>
  </head>

  <body class="login-body"  >
    
    <!--Login Wrapper-->
    <?php include_once  'registercode.php'  ?>
    <div class="container-fluid login-wrapper" style="background-image: url('assets/img/hero-bg.png'); background-size: cover; " >
        <div class="login-box" style="border: none;"  >
            <h1 class="text-center mb-5" style="color: #4154f1;" ><i class="fa fa-cogs text-primary"  style="color: #4154f1 ;" ></i> ROBEapp</h1>    
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 login-box-info" style="background-color: #4154f1; border-radius: 1%; " >
                    <h3 class="mb-4">Sign in</h3>
                    <p class="mb-4"> have you account?<br><br> sign in  here.<br> </p>
                    <p class="text-center"><a href="./login.html" class="btn btn-light"  style="width: 50%;">login</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 login-box-form p-4" style="border: 0.1px solid #4154f1 ; border-radius: 1% " >
                    <h3 class="mb-2" style="color: #4154f1;" >sign up</h3>
                    <small class="text-muted bc-description">Sign up with your credentials</small>
                    <form action="registercode.php" method="POST" class="mt-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control mt-0" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control "  name="email" id="exampleInputEmail1" placeholder="johndoe@gmail.com" aria-label="email" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control mt-0" placeholder="555-098-444" name="phone" aria-label="phone" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3"  >
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control mt-0" placeholder="Password" name="pass" aria-label="Password" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-theme btn-block p-2 mb-1"  style="background-color : #4154f1 ; color:white" >
                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer id="footer"   class="footer" style="margin-left: 35%;" >

  

            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span style="color: #4154f1;">RobeApp</span></strong>. All Rights Reserved
              </div>
      
    </div>      

    <!--Login Wrapper-->
    

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
  </body>
</html>
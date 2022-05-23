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
    <!--paper bootstrap wizard-->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/paper-bootstrap-wizard.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="assets/js/calendar/bootstrap_calendar.css">
    <!--Switchery CSS-->
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Sleek Admin</title>
  </head>
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->

    <!--Page Wrapper-->

    <div class="container-fluid">

   

        <!--Main Content-->

        <div class="row main-content">
  
          <?php include_once "createacccode.php" ?>
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0" style="margin-left: 13%;" >
               
                <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> form wizard</span>
                
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Form wizard-->
                        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                            
                            
                            
                            <div class="wizard-container">
                                <div class="card wizard-card" data-color="theme" id="wizardProfile">
                                    <form action="createacccode.php" method="POST">
                                    <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
            
                                        <div class="wizard-header text-center">
                                            <h3 class="wizard-title">Create your profile</h3>
                                            <p class="category">This information will let us know more about you.</p>
                                        </div>
            
                                        <div class="wizard-navigation">
                                            <div class="progress-with-circle">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="2" style="width: 21%;"></div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#about" data-toggle="tab">
                                                        <div class="icon-circle">
                                                            <i class="ti-user"></i>
                                                        </div>
                                                        About
                                                    </a>
                                                </li>
                                          
                                                <li>
                                                    <a href="#address" data-toggle="tab">
                                                        <div class="icon-circle">
                                                            <i class="ti-map"></i>
                                                        </div>
                                                        Address
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="about">
                                                <div class="row">
                                                    <div class="col-sm-10 offset-sm-1">
                                                        <h6 class="info-text text-center"> Please tell us more about yourself.</h6>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="picture-container">
                                                                    <div class="picture">
                                                                        <img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                                                        <input type="file" name="photo" id="wizard-picture">
                                                                    </div>
                                                                    <h6>Choose Picture</h6>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <label>First Name <small>(required)</small></label>
                                                                    <input name="firstname" type="text"  class="form-control" placeholder="Ahmed...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Last Name <small>(required)</small></label>
                                                                    <input name="lastname" type="text" class="form-control" placeholder="Mohamed...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                               
                                                </div>
                                            </div>
                                           
                                                <div class="tab-pane" id="address">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5 class="info-text"> Are you living in a nice area? </h5>
                                                        </div>
                                                        <div class="col-sm-7 col-sm-offset-1">
                                                            <div class="form-group">
                                                                <label>Street Name</label>
                                                                <input type="text" name="streetname" class="form-control" placeholder="5h Avenue">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Street Number</label>
                                                                <input type="text" name="streetnumber" class="form-control" placeholder="242">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5 col-sm-offset-1">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" name="city" class="form-control" placeholder="Tunis...">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label>Country</label><br>
                                                                <select name="country" class="form-control">
                                                                    <option value="Tunisia"> Tunisia </option>
                                                                    <option value="Algeria"> Algeria </option>
                                                                    <option value="USA"> USA </option>
                                                                    <option value="Saudie Arabia"> Saudie Arabia </option>
                                                                    <option value="tchad"> tchad </option>
                                                                    <option value="Anrgentina"> Anrgentina </option>
                                                                    <option value="UK"> UK </option>
                                                                    <option value="...">...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizard-footer">
                                                <div class="pull-right">
                                                    <input type='button' class='btn btn-next btn-fill btn-theme btn-wd' name='next' value='Next' />
                                                    <input type='submit' class='btn btn-finish btn-fill btn-theme btn-wd' name='finish' value='Finish' />
                                                </div>
            
                                                <div class="pull-left">
                                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- wizard container -->
                            
                        </div>
                        <!--/Form wizard-->
                    </div>
                </div>

     

            </div>
        </div>

        <!--Main Content-->

    </div>
    <footer id="footer" class="footer" style="margin-left: 35%;" >

  

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span style="color: #4154f1;">RobeApp</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        
          </div>
        </div>
      </footer><!-- End Footer -->

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="assets/js/sweetalert.js"></script>
    <!--Progressbar JS-->
    <script src="assets/js/progressbar.min.js"></script>
    <!--Charts-->
    <!--Canvas JS-->
    <script src="assets/js/charts/canvas.min.js"></script>
    <!--Bootstrap Calendar JS-->
    <script src="assets/js/calendar/bootstrap_calendar.js"></script>
    <script src="assets/js/calendar/demo.js"></script>
    <!--Bootstrap Calendar-->

    <!--Paper bootstrap wizard-->
    <script src="assets/js/jquery.bootstrap.wizard.js"></script>
    <script src="assets/js/paper-bootstrap-wizard.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
  </body>
</html>
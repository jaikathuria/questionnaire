<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Skyer Questionnaire</title>

        <meta name="description" content="Skyer Questionnaire">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/bootstrap.css">
    </head>
    <body>
        <!-- Login Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Login Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                           
                            <h3 class="block-title">Login</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            <h1 class="h2 font-w600 push-30-t push-5 text-left">Skyer QUESTIONNAIRE</h1>
                            <p>Welcome, please login.</p>
                            <form class="js-validation-login form-horizontal push-30-t push-50" action="process.php" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="login-username" name="login-username">
                                            <label for="login-username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="login-password" name="login-password">
                                            <label for="login-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                        </label>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <button  id="altButton"class="btn btn-block btn-primary pull-left" type="submit">Sign In</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-5">
                                        <a id="altButton" class="btn btn-block btn-primary pull-right" href="register.php"> Register</a>
                                    </div>
                                </div>
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"> &copy; Skyer QUESTIONNAIRE v1.0</small>
        </div>
        <!--modals-->
     <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
                <div class="modal-content">
                        <div class="bg-primary">
                          <div class="col-xs-12 padding">
                              <h3> Registration Successfull</h3>
                              <br>
                              <h5> Login to Continue</h5>
                          </div>
                          <div class="col-xs-8"></div>
                         <button class="btn btn-default" data-dismiss="modal"id="modalButton" type="button">Close</button>
                        </div>
                 </div>
            </div>
        </div>
        <div class="modal fade" id="invalidCombination" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                            <div class="bg-warning">
                              <div class="col-xs-12 padding">
                                  <h3> Invalid Combination</h3>
                                  <br>
                                  <h5> Please try again</h5>
                              </div>
                              <div class="col-xs-8"></div>
                             <button class="btn btn-default" data-dismiss="modal"id="modalButton" type="button">Close</button>
                          </div>
                    </div>
            </div>
        </div>
        <!--modals end-->
        

           <script src="assets/js/jquery.min.js"></script>
           <script src="assets/js/bootstrap.min.js"></script>
           <script src="assets/js/jquery.scrollLock.min.js"></script>
           <script src="assets/js/jquery.placeholder.min.js"></script>
           <script src="assets/js/app.js"></script>
           <script src="assets/js/jquery.validate.min.js"></script>
           
           <?php
                           if(isset($_GET['msg']))
                             {
                                 if($_GET['msg']=='dnm')
                                { 
           ?>
                <script>
                    $("#invalidCombination").modal('show');
                </script>
           <?php		         }
                               else if($_GET['msg']=='success'){ 
           ?>
                <script>
                    $("#successModal").modal('show');
                </script>
           <?php		         }
                                 }
           ?>
            <script src="assets/js/login.js"></script>

            
    </body>
</html>
<?php
session_start();
if(!($_SESSION['token']=='yes')){
    header("Location:login.php");
}
elseif($_SESSION['type']=='student'){
    header("Location:homepage.php");
}
elseif($_SESSION['type']=='admin'){
    $name=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Skyer Questionnaire</title>

        <meta name="description" content="Skyer Questionnaire">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:200,300,400,400italic,600,700">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/panel.css">
    </head>
    <body>
        <form class="form" method="post" action="qsubmit.php">
        <div class="container-fluid remove-padding">
            <div class="row remove-margin">
               <div class="panel-head">
                    <div class="col-lg-push-10 col-lg-2 col-md-push-10 col-md-2 col-sm-push-8 col-sm-4 col-xs-push-5 col-xs-7">
                        <ul class="nav nav-style">
                            <li><a href="logout.php">LOGOUT</a></li>
                            <li class="active"><a><?php echo $name; ?></a></li>
                        </ul>
                    </div>
               </div>
            </div>
        </div>
        <div class="content bg-gray-lighter">
           <div class="row items-push">
               <div class="col-sm-7 hidden-xs">
                   <h1 class="page-heading">
                    <small>SKYER</small> QUESTIONNAIRE
                   </h1>
               </div>
               <div class="col-sm-5 text-right">
                   <ol class="breadcrumb push-10-t">
                        <h1><li>C<a class="link-effect">Panel</a></li></h1>
                   </ol>
               </div>
           </div>
      </div>
     <div id="writeCallCard" class="container animated zoomIn">
        <div  class="row">
          <div  class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 mainImageContainer">
            <div class="hidden-xs hidden-sm hidden-md mainImage-lg shadow">
              <span >
                <img   src="assets/images/mainImage-lg.jpg" alt="main" />
              </span>
            </div>
            <div class="hidden-xs hidden-sm hidden-lg mainImage-md shadow">
              <span>
                <img src="assets/images/mainImage-md.jpg" alt="main" />
              </span>
            </div>
            <div class="hidden-xs hidden-md hidden-lg mainImage-sm shadow">
              <span>
                <img src="assets/images/mainImage-sm.jpg" alt="main" />
              </span>
            </div>
            <div class="hidden-sm hidden-md hidden-lg mainImage-xs shadow">
              <span>
                <img src="assets/images/mainImage-xs.jpg" alt="main" />
              </span>
            </div>
                  <div class="mainText animated fadeIn">
                      <h2>SKYER</h2>
                      <h2>QUESTIONNAIRE</h2>
                      <button class="btn mainButton" id="writeCall" type="button" >WRITE A TEST</button>
                  </div>
          </div>
        </div>
      </div>
      <div class="container">
                
                   <div class="row contentSheet hide bg-white shadow animated fadeInDown">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 ">
                            <div class=" col-xs-12 col-sm-push-3 col-sm-6 col-md-push-3 col-md-6 col-lg-push-3 col-lg-6">
                              <div class="headingCard animated bounceInLeft">
                                   <h1 class=" font-w600 text-center animated fadeInDown headingMargin">Lets get started</h1>
                               </div>
                                    <div class="testTitle">
                                        <input id="title" name="title" type="text" autocomplete="off" placeholder="Enter the title of the test.">
                                        <input id="time" name="time" type="number" autocomplete="off" placeholder="Time duration (minutes)">
                                    </div>
                           </div>
                            <button type="button" type="button" id="b1" class="roundButton"><i class="fa fa-arrow-right"></i></button>
                       </div>
                      
                   </div>
                   <div class="row contentSheet1 hide bg-white shadow animated fadeInDown">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 ">
                            <div class="col-xs-push-1 col-xs-11 col-sm-push-3 col-sm-6 col-md-push-4 col-md-4 col-lg-push-4 col-lg-4">
                               <div class="noQCard animated bounceInLeft">
                               <button id="increaseQuestion" class="btn btn-default floatLeft push-50-t" type="button"><i class="fa fa-chevron-circle-up fa-2x"></i></button>
                                <a class="block block-rounded block-link-hover3 text-center floatLeft remove-padding" href="javascript:void(0)">
                                    <div class="block-content block-content-full bg-info">
                                        <div id="questions" class="h1 font-w700 text-white padding">10</div>
                                   
                                        <input  id="noQ" name="noQ" type="hidden" value="10">
                                        <div class="h5 text-white-op text-uppercase push-5-t">No of questions</div>
                                    </div>
                                </a>
                                <button id="decreaseQuestion" class="btn btn-default floatLeft push-50-t" type="button"><i class="fa fa-chevron-circle-down fa-2x"></i></button>
                                </div>
                                
                           </div>
                            <button id="b2" type="button" class="roundButton bg-info"><i class="fa fa-arrow-right"></i></button>

                       </div>
                   </div>
                   <div id="questionSheet" class="row contentSheet2 hide bg-white shadow animated fadeInDown">
                      
                   </div>
          
                         
               </div>
               
    <div class="push-10-t text-center animated fadeInUp  push-20-t">
    <big class="text-muted font-w600"> &copy; Skyer QUESTIONNAIRE v1.0</big>
    </div>
          </form>
           <script src="assets/js/jquery.min.js"></script>
           <script src="assets/js/bootstrap.min.js"></script>
           <script src="assets/js/jquery.slimscroll.min.js"></script>
           <script src="assets/js/jquery.scrollLock.min.js"></script>
           <script src="assets/js/jquery.placeholder.min.js"></script>
           <script src="assets/js/app.js"></script>
           <script src="assets/js/jquery.validate.min.js"></script>
           <script src="assets/js/panel.js"></script>
    </body>
</html>
<?php
}
?>

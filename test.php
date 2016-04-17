<?php
session_start();
include_once "connection.php";
if(!($_SESSION['token']=='yes')){
    header("Location:login.php");
}
elseif($_SESSION['type']=='admin'){
    header("Location:panel.php");
}
elseif($_SESSION['type']=='student'){
    $name=$_SESSION['user'];
    $uniqid=$_SESSION['uniqid'];
   if(!isset($_GET['id'])){
     header("Location:homepage.php");  
   }
   $testKey=$_GET['id'];
   $query="SELECT * FROM testtable WHERE testKey=".$testKey;
    $result=mysqli_query($con,$query);
    if(!$result){
        header("Location:homepage.php"); 
    }
    $i=1;
    $tempvar="q".$i;
    $row=mysqli_fetch_object($result);
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
                        <h1><li>T<a class="link-effect">ests</a></li></h1>
                   </ol>
               </div>
           </div>
      </div>
         <div class="container timer">
             <div class="row">
                 <div class="col-xs-12 col-sm-push-3 col-sm-6 col-lg-6">
                            <div class="block shadow">
                                <table class="block-table text-center">
                                    <tbody>
                                        <tr>
                                            <td class="bg-primary" style="width: 50%;">
                                                <div class="push-30 push-30-t">
                                                    <i class="fa fa-clock-o fa-5x text-white-op"></i>
                                                </div>
                                            </td>
                                            <td style="width: 50%;">
                                                <div class="h1 font-w700 countdown"><span class="h2 text-muted clock"></span> </div>
                                                <div class="h5 text-muted text-uppercase push-5-t">Left</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
             </div>
         </div>
          <div class="container">
                         <div id="questionSheet" class="row contentSheet2 bg-white shadow animated fadeInDown">

              <div id="question1" class="col-xs-12 col-sm-12 col-md-12 col-xs-12 ">
                <div class=" col-xs-12 col-sm-push-3 col-sm-6 col-md-push-3 col-md-6 col-lg-push-3 col-lg-6">
                <form id="Form" method="post" action="result.php">
                <input type="hidden" name="noq" value="<?php echo $row->noq; ?>">
                <input type="hidden" name="testKey" value="<?php echo $testKey; ?>">
                 
                 <?php
                  
                    for($i=1;$i<=$row->noq;$i++){
                      $tempvar="q".$i;
                      $expvar=explode("¿",$row->$tempvar);
                ?>
                 
                 
                 
                 
                  <div class="questionInput">
                      <p><?php echo $expvar[0] ?></p>
                    <div class="answer">
                     <label class="css-input css-radio css-radio-lg css-radio-default col-xs-push-2 col-sm-push-4">
                         <input type="radio" name="<?php echo $tempvar ?>" value="a" ><span></span> <?php echo $expvar[1] ?> &nbsp;</label>
                        <br>
                    <label class="css-input css-radio css-radio-lg css-radio-default col-xs-push-2 col-sm-push-4">
                         <input type="radio" name="<?php echo $tempvar ?>" value="b"><span></span> <?php echo $expvar[2] ?> &nbsp;</label>
                        <br>
                    <label class="css-input css-radio css-radio-lg css-radio-default col-xs-push-2 col-sm-push-4">
                         <input type="radio" name="<?php echo $tempvar ?>" value="c"><span></span> <?php echo $expvar[3] ?> &nbsp;</label>
                        <br>
                    <label class="css-input css-radio css-radio-lg css-radio-default col-xs-push-2 col-sm-push-4">
                         <input type="radio" name="<?php echo $tempvar ?>" value="d"><span></span> <?php echo $expvar[4] ?> &nbsp;</label> 
                    </div>
                  </div>
                <?php
                  }
                    ?>
                    </form>
                </div>
              </div>
             
              <button id="bq" class="roundButton questionButton"><i class="fa fa-arrow-right"></i></button>
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
           <script src="assets/js/jquery.countdown.js"></script>
    </body>
    <script>
        $("#bq").on('click', function(){
        $("#Form").submit();
        });
        
    
        
        function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            document.getElementById("Form").submit();
                }
            };
            // we don't want to wait a full second before the timer starts
            timer();
            setInterval(timer, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * <?php echo $row->time; ?>,
                display = document.querySelector('.clock');
            startTimer(fiveMinutes, display);
        };

    </script>
        <script language="javascript">
    document.onmousedown=disableclick;
    status="Right Click Disabled";
    function disableclick(event)
    {
      if(event.button==2)
       {
         alert(status);
         return false;    
       }
    }
    </script>
</html>
<?php
}
?>

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
    if(($uniqid==NULL)||($uniqid=="")){
        $uniqid=uniqid('user_');
        $createTable = "CREATE TABLE ".$uniqid." ( testid INT(200) NOT NULL, correctq INT(5) NOT NULL,  totalq INT(200)  NOT NULL,   answers VARCHAR(50) NOT NULL)";
        $editQuery = "UPDATE users SET uniqid='$uniqid' WHERE name='$name';";
        $combQuery=$editQuery.$createTable;
        mysqli_multi_query($con,$combQuery);
        $_SESSION['uniqid']=$uniqid;
        header("Refresh:0");
    }
    else{
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
       <div class="content container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Default Table -->
                            <div class="block">
                                <div class="block-header">
                                    
                                    <h3 class="block-title">Tests</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px;">#</th>
                                                <th>Title</th>
                                                <th class="hidden-xs" style="width: 15%;">Action</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $query1="SELECT testKey, title FROM testtable";
                                            $result1=mysqli_query($con,$query1);
                                            $i=1;
                                            
                                            while($row=mysqli_fetch_object($result1)){
                                               ?> 
                                            <tr>
                                                <td class="text-center"><?php echo $i;$i++;?></td>
                                                <td><?php echo $row->title; ?></td>
                                                <td>
                                                   <a <?php echo "href='test.php?id=".$row->testKey."'"; ?>class="label label-primary">Take Test</a>
                                                </td>
                                                
                                            </tr>
                                                
                                                
                                            <?php        
                                            }
                                            
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Default Table -->
                        </div>
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
}
?>

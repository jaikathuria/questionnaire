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
    $file = 'count.txt';
    $uniq = file_get_contents($file);
    $id = $uniq + 1 ;
    file_put_contents($file, $id);
    if(!isset($_REQUEST['noq'])){
        header("Location:homepage.php");
    }
    
    $noq=$_REQUEST['noq'];
    $testKey=$_REQUEST['testKey'];
    $query="SELECT * FROM testtable WHERE testKey='$testKey'";
    $result=mysqli_query($con,$query);
    $correct=0;
    $incorrect=0;
    $notattempted=0;
    $answers="";
    $title1="";
    $total=0;
    $marks;
    while($row=mysqli_fetch_object($result)){
    $expvar;
        $title1=$row->title;
    
    for($i=1;$i<=$noq;$i++){
        $temp="q".$i;
        if(isset($_REQUEST[$temp])){
        $$temp=$_REQUEST[$temp];
        
            
        $expvar=explode("¿",$row->$temp);
        
        }
        else{
          $$temp="";  
        }
        $answers=$answers."¿".$$temp;
        if(($$temp==NULL)||($$temp==""))
        {
            $notattempted+=1;
        }
        elseif($$temp==end($expvar)){
            $correct+=1;
        }
        else{
            $incorrect+=1;
        }
    }
    }
    $marks=($correct*4)-($incorrect);
    $total=$noq*4;
    $percent=(($marks*100)/$total);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Skyer Questionnaire</title>

        <meta name="description" content="Skyer Questionnaire">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:200,300,400,400italic,600,700">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/panel.css">
    </head>
    <body oncontextmenu="return false">
    <div class="container-fluid remove-padding hidden-print">
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
        <div class="content bg-gray-lighter hidden-print">
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
      
          
                <div class="content content-boxed">
                   
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" onclick="App.initHelper('print-page');"><i class="fa fa-print"></i> Print Result</button>
                                   
                                </li>
                                <li>
                                     <button> <a href="homepage.php"><i class="fa fa-times"> Close</i></a></button>
                                </li>
                            </ul>
                            <h3 class="block-title">#<?php echo "Res".$id;?></h3>
                        </div>
                        <div class="block-content block-content-narrow">
                       <div class="h1 text-center push-30-t push-30 hidden-print">RESULT</div>
                       
                            
                            <div class="table-responsive push-50">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th class="text-center">Test Title</th>
                                            <th class="text-right" style="width: 100px;">Correct</th>
                                            <th class="text-right" style="width: 120px;">Incorrect</th>
                                            <th class="text-right" style="width: 120px;">Unattempted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                
                                            <td>
                                                <p class="font-w600 push-10 text-left"><?php echo $title1; ?></p>
                                            </td>
                                            <td class="text-center"><span class="badge badge-success"><?php echo $correct; ?></span></td>
                                            <td class="text-center"><span class="badge badge-danger"><?php echo $incorrect; ?></span></td>
                                            <td class="text-center"><span class="badge badge-primary"><?php echo $notattempted; ?></span></td>
                                        </tr>
                            
                                       <tr>
                                            <td colspan="3" class="font-w700 text-uppercase text-right">Total Marks</td>
                                            <td class="font-w700 text-right"><?php echo $total; ?></td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="3" class="font-w700 text-uppercase text-right">Your Marks</td>
                                            <td class="font-w700 text-right"><?php echo $marks; ?></td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="3" class="font-w700 text-uppercase text-right">Your %age</td>
                                            <td class="font-w700 text-right"><?php echo $percent." %"; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                          
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
           
    </body>
</html>
<?php
    $query="INSERT INTO ".$uniqid." (testid, correctq, totalq, answers) VALUES (".$testKey.",".$correct.",".$noq.",'$answers')";
    $doit=mysqli_query($con,$query);
}
?>
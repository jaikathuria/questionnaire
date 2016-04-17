<?php
$username = $_REQUEST['login-username'];
$pass = $_REQUEST['login-password'];
include_once "connection.php";
if($username[0]==1){
   $query = "SELECT * FROM admin_users"; 
    $type='admin';
}
else{
   $query = "SELECT * FROM users"; 
    $type='student';
}

$result = mysqli_query($con,$query);

while($row = mysqli_fetch_object($result)){
    $flag=0;
    if(($row->username==$username) && ($row->password==$pass)){
    $flag=1;
    break;
    }

}
$name= $row->name;
$uniqid=$row->uniqid;

if($flag==0){
    header("Location:login.php?msg=dnm");
    }
else{
    if($type=='admin'){
        session_start();
     $_SESSION['token']='yes';
     $_SESSION['user']=$name;
     $_SESSION['type']=$type;
    header("Location:panel.php");
    }
    else if($type=='student'){
         session_start();
     $_SESSION['token']='yes';
     $_SESSION['user']=$name;
     $_SESSION['type']=$type;
     $_SESSION['uniqid']=$uniqid;
        
    header("Location:homepage.php");
    }
}

?>
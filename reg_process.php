<?php
 $username=$_REQUEST['register-username'];
 $name=$_REQUEST['register-name'];
 $pass=$_REQUEST['register-password'];
 include_once "connection.php";
 $query = "SELECT * FROM users";
 $result = mysqli_query($con,$query);
while($row = mysqli_fetch_object($result)){
    $flag=0;
    if($row->username==$username){
    $flag=1;
    break;
    }
}
if($flag){
    
     header("Location:register.php?error=uae");
}
else{
     $query1 = "INSERT INTO users (username, name, password) VALUES ('$username','$name','$pass')";
     $result1 = mysqli_query($con,$query1);
     if($result1>0){ 
         header("Location:login.php?msg=success");
     }
     else{
         header("Location:register.php?error=unsuccess");
     }
}
?>
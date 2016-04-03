<?php
 $title=$_REQUEST['title'];
 $noQ=$_REQUEST['questions'];
 $time=$_REQUEST['time'];
 include_once "connection.php";
 $fields= "(title, time)";
 $fieldData = "('$title','$time')";
 for($i=0;$i<$noQ;$i++){
     
 }
 
 $query = "INSERT INTO test ".$fields." VALUES ".$fieldData;
 $result = mysqli_query($con,$query);

     if($result>0){ 
         header("Location:panel.php?msg=success");
     }
     else{
         header("Location:panel.php?error=unsuccess");
     }

?>
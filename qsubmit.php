<?php 
$title = $_REQUEST['title'];
$time = $_REQUEST['time'];
$noq = $_REQUEST['noQ'];
$vs='q';
include_once "connection.php";
$fields= "(title, time, noq";
$fieldData = "('$title','$time','$noq'";
for($i=1;$i<=$noq;$i++){
    $tv = $vs.$i; 
    $tva= $tv."a";
    $tvb= $tv."b";
    $tvc= $tv."c";
    $tvd= $tv."d";
    $tvans= $tv."ans";
    $$tv= $_REQUEST[$tv];
    $$tv= $$tv."¿".$_REQUEST[$tva]."¿".$_REQUEST[$tvb]."¿".$_REQUEST[$tvc]."¿".$_REQUEST[$tvd]."¿".$_REQUEST[$tvans];
    $fields= $fields.", ".$tv;
    $fieldData= $fieldData.",'".$$tv."'";
}
$fields= $fields.")";
$fieldData= $fieldData.")";
$query = "INSERT INTO testtable ".$fields." VALUES ".$fieldData;
 $result = mysqli_query($con,$query);

     if($result>0){ 
         header("Location:panel.php?msg=success");
     }
     else{
         header("Location:panel.php?error=unsuccess");
     }
?>




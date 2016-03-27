<?php
session_start();
if(!$_SESSION['type']=='student'){
    header("location:index.php");
}
elseif($_SESSION['type']=='student'){
    ?>

    

<?php
}
?>
<?php
session_start()
if(!$_SESSION['type']=='admin'){
    header("location:index.php")
}
elseif($_SESSION['type']=='student'){
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
    </head>
    <body>
        <button id="new_test" onclick="display_form()">
            <form method="post" action="<?php echo $_SERVER['$PHP_SELF'];?>">
                TITLE<input type="text" name="title" required><br>
                Number of Questions<input type="number" name="questions" required>  
            </form>
            
        
        </button>
        <script>
        
        </script>
    </body>
</html>
    
<?php    
}
?>
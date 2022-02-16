<?php
    $con = new mysqli('localhost', 'root', '' , 'crud_operation');

    if($con) {
        //  echo "connection successfull";
        //die(mysqli_error($con));
    }
    else {
        die(mysqli_error($con));
    };
?>


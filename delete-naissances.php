<?php

session_start();

include ("init.php");
                                     
if (isset($_GET['code_naiss']))
{
    $rno=$_GET['code_naiss'];
    $deleteQuery="DELETE FROM naissances where code_naiss=$rno"; 
    mysqli_query($conn, $deleteQuery);

    echo "<script>window.location = 'vue_naissances.php';</script>";
} else {
    echo "ERR!";
}

?>
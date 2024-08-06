<?php

session_start();

include ("init.php");
                                     
if (isset($_GET['code_deces']))
{
    $rno=$_GET['code_deces'];
    $deleteQuery="DELETE FROM deces where code_deces=$rno"; 
    mysqli_query($conn, $deleteQuery);

    echo "<script>window.location = 'vue_deces.php';</script>";
} else {
    echo "ERR!";
}

?>
<?php

session_start();

include ("init.php");
                                     
if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $deleteQuery="DELETE FROM municipalite where id=$id"; 
    mysqli_query($conn, $deleteQuery);

    echo "<script>window.location = 'vue_municipalite.php';</script>";
} else {
    echo "ERR!";
}
?> 
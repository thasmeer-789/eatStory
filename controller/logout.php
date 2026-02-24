<?php

include '../config.php';
// $admin=new Admin();

session_destroy();

//  echo"<script>alert(Are you sure want to logout???);window.location='../index.php'</script>";
echo "<script>
    if (confirm('Are you sure you want to logout???')) {
        window.location = '../index.php';
    }
</script>";

?>
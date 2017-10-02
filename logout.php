<?php

session_start();

session_destroy();

echo "<script>window.open('mainlogin.php','_self')</script>";

?>
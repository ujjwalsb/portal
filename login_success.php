<?php
session_start();
if(!session_is_registered(username))
{
header("location:mainlogin.php");
}
?>
<html>
<body>
LOG in SUCCESSFULL
</body>
</html>

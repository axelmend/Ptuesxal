<?php

session_start();
session_destroy();
header("Location: loginP.php");
exit();
?>
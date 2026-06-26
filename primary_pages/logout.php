<?php

session_start();
session_unset();
session_destroy();
header("Location: ../primary_pages/index.php"); 
exit;
?>

<?php
session_start();
unset($_SESSION["scholar_name"]);
session_destroy();
header("Location:index.php");

?>
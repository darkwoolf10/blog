<?php
	require_once("header.php");
  if($_GET["key"] != md5("admin")){
    header("Location: login.php");
    exit;
  }
  echo "admin panel";
	require_once("footer.php");
?>

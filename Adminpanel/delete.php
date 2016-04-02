<?php
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/London');
include("include/config.php");

$Delete_Query = mysql_query("DELETE FROM `".$_REQUEST['tbl']."` WHERE `".$_REQUEST['field']."`= ".$_REQUEST['id']);
header("Location:index.php?action".$_REQUEST['page']);
?>
<?php
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/London');

require("include/config.php");
include("include/paginator.class.php");

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] =='login')
{
    if(isset($_REQUEST['action']) && $_REQUEST['action']!='')
    {
        include("include/header.php");
        include("include/leftmenu.php");
        $PageName=$_REQUEST['action'].".php";
        include($PageName);
        include("include/footer.php");
    }
    else
    {
        header("location: index.php?action=dashboard");
    }
}
else
{
    include("login.php");
}
?>
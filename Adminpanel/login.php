<?php
require("include/config.php");
session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] =='login')
{
    header("location: index.php?action=dashboard");
}

if(isset($_REQUEST['btnSubmit']))
{
    $ErrorMsg = 0;
    $txtUsername = $_REQUEST['txtUsername'];
    $txtPassword = $_REQUEST['txtPassword'];
    
    if($txtUsername == '' || $txtPassword == '')
		$ErrorMsg = '<span class="error"><strong>ERROR :  </strong>Please enter the valid username and password.</span><br />';
		
	if($txtUsername == '' && $txtPassword == '')
		$ErrorMsg = '<span class="error"><strong>ERROR :  </strong>Please enter the valid username and password.</span><br />';
		
	if($ErrorMsg == '')
	{
		echo "SELECT * FROM `tbl_admin` WHERE admin_name = '".$txtUsername."' AND admin_password = '".$txtPassword."' ";
		$SQL = mysql_query("SELECT * FROM `tbl_admin` WHERE admin_name = '".$txtUsername."' AND admin_password = '".$txtPassword."' ");
		
		if(mysql_num_rows($SQL) > 0)
		{
			$USER_DATA = mysql_fetch_array($SQL);
			/*if($USER_DATA['u_activeStatus']==1)
			{ */                               
				$_SESSION['is_logged_in'] = 'login';
				$_SESSION['userid']=$USER_DATA['aid'];
				$_SESSION['username'] = $txtUsername;				
				header('location: index.php?action=dashboard');
			/*}
			else
			{
				$ErrorMsg = '<span class="error"><strong>ERROR :  </strong>User account is not activated.</span><br />';
			}*/
		}
		else
			$ErrorMsg = '<span class="error"><strong>ERROR :  </strong>Please enter the valid username and password.</span><br />';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ventcamp Administration : Login</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/css/main.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
        .error{
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size:12px;
            color:#FF0000;
        }
    </style>

  </head>

  <body class="">     
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="#"><span class="first">Ventcamp</span> <span class="second">Administration</span></a>
        </div>
    </div>
    
      <div style="height: 60px; text-align: center;">
          <?php
          if(isset($ErrorMsg) && $ErrorMsg != '')
              echo $ErrorMsg;
          ?>
      </div>
    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Sign In</p>
            <div class="block-body">
                <form name="frmLogin" method="post" action="">
                    <label>Username</label>
                    <input type="text" name="txtUsername" class="span12">
                    <label>Password</label>
                    <input type="password" name="txtPassword" class="span12">
                    <!--<a href="#" class="btn btn-primary pull-right">Sign In</a>-->
                    <input type="submit" name="btnSubmit" value="Sign In" class="btn btn-primary pull-right" />
                    <label class="remember-me"><input type="checkbox"> Remember me</label>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right" style=""></p>
       <!-- <p><a href="reset-password.php">Forgot your password?</a></p>-->
    </div>
</div>


    


    <script src="lib/js/main.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>



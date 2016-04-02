<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IISA  Administration</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <link rel="stylesheet" type="text/css" href="lib/css/main.css">
    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/jquery-ui.css" />
	<link type="text/css" href="stylesheets/calpopup.css" rel="stylesheet" />
	<script type="text/javascript" src="js/calpopup.js"></script>
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui.js"></script>
	
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	  });
	  
	   $(function() {
		$( "#datepicker1" ).datepicker();
	  });
  </script>

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
		
    </style>
	
	<script>
		setTimeout(function() {
		$('#showmesg').fadeOut('fast');
		}, 4000);
	</script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>

<script type="text/javascript">
var editor = '' , html = 'ok';

function createEditor()
{
if ( editor )
{
alert('I am alredy on');
}
var editor = CKEDITOR.replace( 'content',
{

enterMode:Number(2),
toolbar :
[
['Source','Save','NewPage','Preview','Print','Templates'],
['Cut','Copy','Paste','PasteFromWord','Undo','Redo'],
['Find','Replace','SelectAll','CheckSpelling','SpellCheckAsYouType'],
['Form','Checkbox','RadioButton','TextField','SelectionField','Button','ImageButton','HiddenField'],
['FontSize', 'Bold', 'Italic','Underline','Subscript','Superscript','RemoveFormat'],
["NumberedList","BulletedList","Outdent","Indent","Blockquote","CreateDiv","JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock","BidiLtr","BidiRtl"],
["Link",
"Unlink",
"Anchor",
],

["CreatePlaceholder",
"Image",
"Flash",
"Table",
"HorizontalRule",
"Smiley",
"SpecialChar",
"PageBreak",
"Iframe",
"InsertPre"
],
["Styles","Format","Font","FontSize","TextColor","BGColor"],
["About"],
['Video']

]

});
CKFinder.setupCKEditor( editor, 'ckfinder/' );
}

function removeEditor()
{
if ( !editor )
return;
delete CKEDITOR.instances[ 'page_content' ];
}
</script>

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!--<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>-->
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $_SESSION['username']; ?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">IISA</span> <span class="second">Administration</span></a>
        </div>
    </div>

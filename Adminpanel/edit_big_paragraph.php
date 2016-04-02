<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	//$err_p_title='';
	$err_p_desc='';
	
	//$p_title =$_REQUEST['p_title'];
	$p_desc =$_REQUEST['p_desc'];
	
	/*if($p_title=='')
	{
		$error = 1;
		$err_p_title = '<span class="errorMsg">Please enter title.</span>';
	}*/
	if($p_desc=='')
	{
		$error = 1;
		$err_p_desc = '<span class="errorMsg">Please enter Description.</span>';
	}
	
	if($error == 0)
    {
		//mysql_query("UPDATE `tbl_big_paragraph` SET p_title ='".$_REQUEST['p_title']."', p_desc ='".mysql_real_escape_string($_REQUEST['p_desc'])."' WHERE `id`='".$_REQUEST['id']."'");	
		mysql_query("UPDATE `tbl_big_paragraph` SET  p_desc ='".mysql_real_escape_string($_REQUEST['p_desc'])."' WHERE `id`='".$_REQUEST['id']."'");	
		header("Location:index.php?action=ManageBigParagraph&u=1");
	}
    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_big_paragraph` Where `id`='".$_REQUEST['id']."'"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Big Paragraph</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageBigParagraph">Manage Big Paragraph</a> <span class="divider">/</span></li>
  <li class="active">Edit Big Paragraph</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
       <!-- <label>Big Paragraph Title</label>
        <input type="text" name="p_title"  value="<?=$GET_ROW['p_title'];?>"  class="input-xlarge" /> 
         &nbsp;&nbsp;&nbsp;<?php if(isset($err_p_title)){ echo $err_p_title; } ?>-->
      
        
		<label>Big Paragraph Description</label>
        <textarea name="p_desc" id="content"><?=$GET_ROW['p_desc'];?></textarea>
 		&nbsp;&nbsp;&nbsp;<?php if(isset($err_p_desc)){ echo $err_p_desc; } ?>
        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
createEditor();
</script>

<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	 mysql_query("UPDATE `tbl_home_text` SET date_text ='".$_REQUEST['date']."',location ='".$_REQUEST['location']."',heading ='".$_REQUEST['heading']."' ");	
		 header("Location:index.php?action=manageHomeText&u=1");
    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_home_text`"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Text</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Text</a> <span class="divider">/</span></li>
  <li class="active">Edit Text</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Date</label>
        <input type="text" name="date" value="<?=$GET_ROW['date_text'];?>"  class="input-xlarge" />      
		<label>Location</label>
        <input type="text" name="location" value="<?=$GET_ROW['location'];?>" class="input-xlarge" />      
		<label>Heading</label>
        <input type="text" name="heading" value="<?=$GET_ROW['heading'];?>" class="input-xlarge" />      

        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>

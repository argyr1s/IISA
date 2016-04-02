<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	 mysql_query("UPDATE `tbl_map` SET lat ='".$_REQUEST['lat']."',`long` ='".$_REQUEST['long']."'");	
		 header("Location:index.php?action=manageMap&u=1");
    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_map`"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Map</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Map</a> <span class="divider">/</span></li>
  <li class="active">Edit Map</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Latitude</label>
        <input type="text" name="lat" value="<?=$GET_ROW['lat'];?>"  class="input-xlarge" />      
		<label>Longitude</label>
        <input type="text" name="long" value="<?=$GET_ROW['long'];?>" class="input-xlarge" />      

        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manageMap" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>

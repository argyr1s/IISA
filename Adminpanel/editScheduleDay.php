<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;

	 mysql_query("UPDATE `tbl_schedule_day` SET date ='".$_REQUEST['date']."' WHERE `id`='".$_REQUEST['id']."'");	
		 header("Location:index.php?action=manageScheduleDay&u=1");
    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_schedule_day` Where `id`='".$_REQUEST['id']."'"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Topic Content</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Schedule Day</a> <span class="divider">/</span></li>
  <li class="active">Edit Schedule Day</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Day</label>
        <input type="text" name="" disabled value="<?=$GET_ROW['day'];?>"  class="input-xlarge" /> 
        <input type="hidden" id="id" name="id" value="<?=$_REQUEST['id'];?>">     
        <input type="hidden" name="day" value="<?=$GET_ROW['day'];?>"  class="input-xlarge" />      
		<label>Date</label>
        <input type="text" name="date" value="<?=$GET_ROW['date'];?>"  class="input-xlarge" />  		
        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>
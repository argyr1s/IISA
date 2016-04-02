<?php
if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
    $err_txtAuditorium = "";
    
	$txtAuditorium= $_REQUEST['auditorium'];
    
    if($txtAuditorium == "")
    {
        $error = 1;
        $err_txtAuditorium = '<span class="errorMsg">Please enter Auditorium.</span>';
    }
	
	
    if($error == 0)
    {
		 mysql_query("INSERT INTO `tbl_auditorium`(`shedule_id`, `auditorium`) VALUES ('".$_REQUEST['day']."', '".$_REQUEST['auditorium']."')");
		 
        header("location: index.php?action=manageAuditorium&a");
    }
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Auditorium </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">IISA Modify Schedule</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageVideoCategoryList">Video Auditorium</a> <span class="divider">/</span></li>
  <li class="active">Add Auditorium </li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Auditorium Information</a></li>
    <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="">
        <label>Day *</label>
        
        <select name="day" id="day" >
        
        <?
		$query=mysql_query("SELECT * FROM `tbl_schedule_day`");
		while($getDay=mysql_fetch_array($query))
		{
			?>
			<option value="<?=$getDay['id'];?>"><?=$getDay['day'];?> (<?=$getDay['date'];?>)</option>
		<?
		}
		?>
		</select>
        
		<label>Auditorium *</label>
        
        <input type="text" name="auditorium" class="input-xlarge">
&nbsp;&nbsp;&nbsp;
 <?php if(isset($err_txtAuditorium)){ echo $err_txtAuditorium; } ?>
       
        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=page_list" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
createEditor();
</script>

<?php
if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
    $err_txtAuditorium = "";
    
	$txtAuditorium= $_REQUEST['auditorium'];
    
    
	
	
    if($error == 0)
    {
		 mysql_query("UPDATE `tbl_records` SET `day`='".$_REQUEST['day']."', `auditorium_id`='".$_REQUEST['auditorium']."', `time`='".$_REQUEST['time']."',`title`='".$_REQUEST['title']."',`desc`='".mysql_real_escape_string($_REQUEST['description'])."',`created_by`='".$_REQUEST['added_by']."' WHERE `id`='".$_REQUEST['id']."'");
		 
        header("location: index.php?action=manageRecords&u=1");
    }
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Record </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageVideoCategoryList">Record</a> <span class="divider">/</span></li>
  <li class="active">Add Record </li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Record Information</a></li>
    <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <script type="text/javascript">
		function loadAuditorium()
		{
			var dayId=document.getElementById('day').value;
			var url = "loadAudotorium.php?dayId="+dayId;
			//alert(url);
			var ajaxRequest;
			try
			{
			// Opera 8.0+, Firefox, Safari
			ajaxRequest = new XMLHttpRequest();
			}
			catch (e)
			{
			// Internet Explorer Browsers
			try
			{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e)
			{
			try
			{
			ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{
			// Something went wrong
			alert("Your browser broke!");
			return false;
			}
			}
			}
			ajaxRequest.open("POST", url, true);
			ajaxRequest.send(null);
			// Create a function that will receive data sent from the server
			ajaxRequest.onreadystatechange = function()
			{
			if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
			{
			//loadLeftMenuPage('includes/left-menu.php');
			document.getElementById('div_auditorium').innerHTML=ajaxRequest.response;
			//loadLeftMenuPage('left-menu.php');

			
			}
			}

		}
	  </script>
      <? $getRecord=mysql_fetch_array(mysql_query("SELECT * FROM `tbl_records` WHERE `id`='".$_REQUEST['id']."'")); 

	  ?>
      <form id="tab" name="frmAdd" method="post" action="">
        <label>Day *</label>
        
        <select name="day" id="day" onChange="loadAuditorium()" >
        
        <?
		$query=mysql_query("SELECT * FROM `tbl_schedule_day`");
		while($getDay=mysql_fetch_array($query))
		{
			?>
			<option value="<?=$getDay['id'];?>" <? if($getRecord['day']==$getDay['id']){ ?> selected <? } ?>><?=$getDay['day'];?> (<?=$getDay['date'];?>)</option>
		<?
		}
		?>
		</select>
        
        <div id="div_auditorium">
		<label>Auditorium </label>
        
        <select name="auditorium" class="input-xlarge">
        	<? $getAudororium=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`='1'");
			   while($row=mysql_fetch_array($getAudororium))
			   {
			?>
            <option value="<?=$row['id'];?>" <? if($getRecord['auditorium_id']==$row['id']){ ?> selected <? } ?>><?=$row['auditorium'];?></option>
            <?
			   }
			   ?>
        </select>
		</div>
       <label>Time </label>
       <input type="text" name="time" value="<?=$getRecord['time'];?>" class="input-xlarge">
       
       <label>Title </label>
       <input type="text" name="title" value="<?=$getRecord['title'];?>" class="input-xlarge">
       
       <label>Description </label>
       <textarea name="description" cols="55" rows="4">
        <?=$getRecord['desc'];?>
       </textarea>
       
       <label>Added by</label>
       <input type="text" name="added_by" value="<?=$getRecord['created_by'];?>" class="input-xlarge">
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

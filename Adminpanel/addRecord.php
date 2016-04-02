<?php
if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
    $err_txtAuditorium = "";
    
	$txtAuditorium= $_REQUEST['auditorium'];
    
    
	
	
    if($error == 0)
    {
		 mysql_query("INSERT INTO `tbl_records`(`day`, `auditorium_id`, `time`,`title`,`desc`,`created_by`) VALUES ('".$_REQUEST['day']."', '".$_REQUEST['auditorium']."', '".$_REQUEST['time']."', '".$_REQUEST['title']."', '".mysql_real_escape_string($_REQUEST['description'])."', '".$_REQUEST['added_by']."')");
		 
        header("location: index.php?action=manageRecords&a=1");
    }
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Records </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">IISA Add Records</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageVideoCategoryList">Record</a> <span class="divider">/</span></li>
  <li class="active">Add Records </li>
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
      <form id="tab" name="frmAdd" method="post" action="">
        <label>Day *</label>
        
        <select name="day" id="day" onChange="loadAuditorium()" >
        
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
        
        <div id="div_auditorium">
		<label>Auditorium </label>
        
        <select name="auditorium" class="input-xlarge">
        	<? $getAudororium=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`='1'");
			   while($row=mysql_fetch_array($getAudororium))
			   {
			?>
            <option value="<?=$row['id'];?>"><?=$row['auditorium'];?></option>
            <?
			   }
			   ?>
        </select>
		</div>
       <label>Time </label>
       <input type="text" name="time" class="input-xlarge">
       
       <label>Title </label>
       <input type="text" name="title" class="input-xlarge">
       
       <label>Description </label>
       <textarea name="description" cols="55" rows="4">
       </textarea>
       
       <label>Added by</label>
       <input type="text" name="added_by" class="input-xlarge">
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

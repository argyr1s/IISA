<?php
$Old_Data = mysql_fetch_assoc(mysql_query("SELECT * FROM `tbl_speakers_list` WHERE  `id`=".$_REQUEST['id']));
$s_name= $Old_Data['s_name'];
$s_designation= $Old_Data['s_designation'];
$s_text= $Old_Data['s_text'];
$s_status= $Old_Data['s_status'];
$s_photo= $Old_Data['s_photo'];

if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
	$err_s_name = "";
	$err_s_designation = "";
	$err_s_text = "";
	$err_s_photo = "";
	$err_s_status = "";
	
	$s_name= $_REQUEST['s_name'];
    $s_designation= $_REQUEST['s_designation'];
	$s_text= $_REQUEST['s_text'];
	$s_status= $_REQUEST['s_status'];
	$s_photo= $_REQUEST['s_photo'];
	
    if($s_name == "")
    {
        $error = 1;
        $err_s_name = '<span class="errorMsg">Please enter name.</span>';
    }
	if($s_designation == "")
    {
        $error = 1;
        $err_s_designation = '<span class="errorMsg">Please enter designation.</span>';
    }
	if($s_text == "")
    {
        $error = 1;
        $err_s_text = '<span class="errorMsg">Please enter Description.</span>';
    }
	if($_FILES['s_photo']['name']!="")
	{
		$s_photo = date('Ymdhis')."_".$_FILES['s_photo']['name'];
		move_uploaded_file($_FILES['s_photo']['tmp_name'],"../upload/speakers-images/".$s_photo );	
		$Filename="../upload/speakers-images/".$s_photo;
	}
	
	if($s_status == "")
    {
        $error = 1;
        $err_s_status = '<span class="errorMsg">Please select Status.</span>';
    }
    if($error == 0)
    {
		if($_FILES['s_photo']['name']!="")
		{
			mysql_query("Update  `tbl_speakers_list` SET  `s_name` = '".$s_name."', `s_photo` ='".$s_photo."' , `s_designation`= '".$s_designation."', `s_text`= '".$s_text."', `s_status`= '".$s_status."' where id= ".$_REQUEST['id']);
		}
		else
		{
			mysql_query("Update  `tbl_speakers_list` SET  `s_name` = '".$s_name."',  `s_designation`= '".$s_designation."', `s_text`= '".$s_text."', `s_status`= '".$s_status."' where id= ".$_REQUEST['id']);
		}
		 
      header("location: index.php?action=ManageSpeakers&u");
    }
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Speakers </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageSpeakers">Video Speakers</a> <span class="divider">/</span></li>
  <li class="active">Add Speakers </li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Speakers Information</a></li>
    <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Speakers Name*</label>
       <input type="text" name="s_name" class="input-xlarge" value="<? echo $s_name;?>">
        &nbsp;&nbsp;&nbsp;<?php if(isset($err_s_name)){ echo $err_s_name; } ?>
        
        
        <label>Speakers Designation *</label>
        <input type="text" name="s_designation" class="input-xlarge" value="<? echo $s_designation;?>">
        &nbsp;&nbsp;&nbsp;<?php if(isset($err_s_designation)){ echo $err_ss_designation; } ?>
        
        
        <label>Speakers Description *</label>
        <textarea name="s_text"  id="content" class="input-xlarge" ><? echo $s_text;?></textarea>
        &nbsp;&nbsp;&nbsp;<img src="../upload/speakers-images/<?php echo $s_photo;?>"  width="100" height="100">&nbsp;&nbsp;&nbsp;
<?php if(isset($err_s_text)){ echo $err_s_text; } ?>
        
        
        <label>Speakers Photo *</label>
        <input type="file" name="s_photo" id="s_photo" class="input-xlarge">
      	<?php if(isset($err_s_photo)){ echo $err_s_photo; } ?>
        
        <label>Status *</label>
        <select name="s_status" id="s_status">
        	<option value=""></option>
            <option value="1" <? if($s_status==1){ echo "selected";}?>>Active</option>
            <option value="0" <? if($s_status==0){ echo "selected";}?>>Deactive</option>
            	
        </select>
       
        &nbsp;&nbsp;&nbsp;<?php if(isset($err_s_status)){ echo $err_s_status; } ?>
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


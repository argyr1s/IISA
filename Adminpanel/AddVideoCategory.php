<?php
if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
    $err_txtCatName = "";
    $err_Status = "";
    
	$txtCatName = $_REQUEST['txtCatName'];
	$Status = $_REQUEST['Status'];
    
    if($txtCatName == "")
    {
        $error = 1;
        $err_txtCatName = '<span class="errorMsg">Please enter Category.</span>';
    }
	
	if($Status == "")
    {
        $error = 1;
        $err_Status = '<span class="errorMsg">Please select Status.</span>';
    }
	
	    
    if($error == 0)
    {
		 mysql_query("INSERT INTO `tbl_video_category`(`cat_name`, `status`) VALUES ('".mysql_real_escape_string($txtCatName)."', '".mysql_real_escape_string($Status)."')");
		 
        header("location: index.php?action=ManageVideoCategoryList&a");
    }
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Video Category </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageVideoCategoryList">Video Category</a> <span class="divider">/</span></li>
  <li class="active">Add Video Category </li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Category Information</a></li>
    <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="">
        <label>Category Name *</label>
        <input type="text" name="txtCatName" value="<?php echo $txtCatName;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtCatName)){ echo $err_txtCatName; } ?>
        <label>Status *</label>
        <select name="Status" id="Status" >
			<option value="">select</option>
			<option value="1">Active</option>
			<option value="0">Deactive</option>
		</select>
		 &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_Status)){ echo $err_Status; } ?>
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

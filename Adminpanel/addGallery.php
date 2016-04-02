<?php
if(isset($_REQUEST['btnSubmit']))
{   
    $error = 0;
   
    
    if($_FILES['image']['name']!="")
	{
		$image = date('Ymdhis')."_".$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"../gallery/".$image );	

	
	
   
		 mysql_query("INSERT INTO `tbl_gallery`(`image`,`title`) VALUES ('".$image."','".$_REQUEST['title']."')");
		 
        header("location: index.php?action=manageGallery&a=1");
	}
}
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Add Gallery </h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">IISA Add Gallery</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageVideoCategoryList">Gallery</a> <span class="divider">/</span></li>
  <li class="active">Add Gallery </li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Sponsors Information</a></li>
    <!--<li><a href="#profile" data-toggle="tab">Password</a></li>-->
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Gallery Image *</label>
        <input type="file" name="image">
        <label>Image Title</label>
        <input type="text" name="title">
        <label></label>
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

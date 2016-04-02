<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	$err_txtFile= "";
	if($_FILES['banner']['name'] == "")
    {
       $error = 1;
        $err_txtFile = '<span class="errorMsg">Please select image.</span>';
    }	
	if($_FILES['banner']['name']!="")
	{
		$bannerImage = date('Ymdhis')."_".$_FILES['banner']['name'];
		move_uploaded_file($_FILES['banner']['tmp_name'],"../assets/img/".$bannerImage );	

	//	list($width, $height, $type, $attr) = getimagesize($Filename);

//		$LARGE_IMG = $Filename;

//		include('SimpleImage.php');

//		$image1 = new SimpleImage();

//		$image1->load($Filename);

//		$image1->resize(132,124);

//		$image1->save($LARGE_IMG);

	}         
    if($error == 0)
    {		

		 mysql_query("UPDATE `tbl_banner` SET banner ='".$bannerImage."' WHERE id = ".$_REQUEST['id']."");

		

		// $productId=mysql_insert_id();	

		 

		 header("Location:index.php?action=manageBanner&u=1");

	 

       // header("location: index.php?action=add_product_step_two&productId=".$productId);

    }

	

}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_banner` WHERE `id`='".$_REQUEST['id']."'"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Banner</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Banner</a> <span class="divider">/</span></li>
  <li class="active">Edit Banner</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Product Name*</label>
        <input type="file" name="banner"  class="input-xlarge" />&nbsp;&nbsp;<img src="../assets/img/<?=$GET_ROW['banner'];?>" width="100" height="100">
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtFile)){ echo $err_txtFile; } ?>
        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>

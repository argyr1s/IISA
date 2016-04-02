<?php
if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	if($_FILES['image']['name']!="")
	{
		$image = date('Ymdhis')."_".$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"../TopicsImages/".$image );	
	}
	 mysql_query("UPDATE `tbl_topic_content` SET topic_name ='".$_REQUEST['topic_name']."',image ='".$image."',content ='".$_REQUEST['content']."' WHERE `id`='".$_REQUEST['id']."'");	
		 header("Location:index.php?action=manageTopicContent&u=1");
    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_topic_content` Where `id`='".$_REQUEST['id']."'"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Topic Content</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Topic Content</a> <span class="divider">/</span></li>
  <li class="active">Edit Topic Content</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Topic</label>
        <input type="text" name="" disabled value="<?=$GET_ROW['topic_name'];?>"  class="input-xlarge" /> 
        <input type="hidden" id="id" name="id" value="<?=$_REQUEST['id'];?>">     
        <input type="hidden" name="topic_name" value="<?=$GET_ROW['topic_name'];?>"  class="input-xlarge" />      
		<label>Image</label>
        <input type="file" name="image"  class="input-xlarge" /> &nbsp;&nbsp;<img src="../TopicsImages/<?=$GET_ROW['image'];?>" width="100" height="100">     
		<label>Content</label>
        <textarea name="content" id="content"><?=$GET_ROW['content'];?></textarea>

        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
createEditor();
</script>

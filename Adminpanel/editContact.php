<?php
if(isset($_REQUEST['btnSubmit']))
{   	
	mysql_query("UPDATE `tbl_contact` SET  address ='".htmlentities($_REQUEST['address'])."'");	
	header("Location:index.php?action=manageContact&u=1");	    
}
$GET_ROW =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_contact`"));
?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Contact</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=ManageBigParagraph">Manage Contact</a> <span class="divider">/</span></li>
  <li class="active">Edit Contact</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
       <!-- <label>Big Paragraph Title</label>
        <input type="text" name="p_title"  value="<?=$GET_ROW['p_title'];?>"  class="input-xlarge" /> 
         &nbsp;&nbsp;&nbsp;<?php if(isset($err_p_title)){ echo $err_p_title; } ?>-->
      
        
		<label>Contact</label>
        <textarea name="address" id="content"><?=$GET_ROW['address'];?></textarea>
 		&nbsp;&nbsp;&nbsp;<?php if(isset($err_p_desc)){ echo $err_p_desc; } ?>
        <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manageContact" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
createEditor();
</script>

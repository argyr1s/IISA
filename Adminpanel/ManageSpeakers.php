<div class="content">
<div class="header">
  <h1 class="page-title">Speakers List</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li class="active">Speakers</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div align="left" id="showmesg">	

						<? if(isset($_REQUEST['a'])){ ?>

							<div class="sucess_message">Records Added successfully.</div>

						<? }			

						if(isset($_REQUEST['u'])){ 	?>

							<div class="sucess_message">Records Updated successfully.</div>

						    <?

						}

						if(isset($_REQUEST['d'])){ 	?>

							<div class="sucess_message">Records Deleted successfully.</div>

						<?

						}

						?>



					</div>
<div class="btn-toolbar"> <a href="index.php?action=AddSpeakers" class="btn btn-primary"><i class="icon-plus"></i> New Speaker</a>
  <!--<button class="btn">Import</button>

						<button class="btn">Export</button>-->
  <div class="btn-group"> </div>
</div>
<div class="well">
  <table class="table" width="100%">
    <thead>
      <tr>
        <th width="38">#</th>
         <th width="687">Speaker's Photo</th>
        <th width="687">Speaker's Name</th>
        <th width="687">Speaker's Designation</th>
        <th width="687">Speaker's Description</th>
        <th width="687">Speaker's Status</th>
        <th width="262" style="width: 26px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$SQL_AUSER = mysql_query("SELECT * FROM `tbl_speakers_list` WHERE 1 ORDER BY id DESC ");

		$total_rows = mysql_num_rows($SQL_AUSER);
		
		$pages = new Paginator;  
		
		$pages->items_total = $total_rows;  
		
		$pages->mid_range = 9;  
		
		$pages->paginate();  

							  

							  $SQL_AUSER1 = mysql_query("SELECT * FROM `tbl_speakers_list` WHERE 1 ORDER BY id DESC ".$pages->limit);

							//  echo "SELECT * FROM `tbl_product` ".$SERACH ."  ".$pages->limit;

							  if($total_rows > 0)

							  {

								  if(isset($_REQUEST['page']))

								  {

										$j = ($_REQUEST['page'] - 1) * 10;

								  }	

							  	  else

										$j = 0;

						

								  $i = $j + 1;

							  while($GET_ROW = mysql_fetch_assoc($SQL_AUSER1))

							  {

								  ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><img src="../upload/speakers-images/<?php echo $GET_ROW['s_photo'];?>" width="90" height="90"></td> 
        <td><?php echo $GET_ROW['s_name'];?></td>
        <td><?php echo $GET_ROW['s_designation'];?></td>
        <td><?php echo $GET_ROW['s_text'];?></td>
         <td><?php if($GET_ROW['s_status']==1)
		 {
			 echo "Active";
		 }
		 else
		 {
			 echo "Deactive";	 
		 }?></td>
        <td><a href="index.php?action=edit_speakers&id=<?php echo $GET_ROW['id'];?>" title="Edit"><i class="icon-pencil"></i></a> &nbsp;<a href="index.php?action=delete&tbl=tbl_speakers_list&field=id&page=ManageSpeakers&id=<?=$GET_ROW['id'];?>" onclick="return confirm('Do you want to delete this Records ?');" title="Delete"><i class="icon-remove" ></i></a> </td>
      </tr>
      <?php

								  $i = $i + 1;

								  }	

							  }

							  else

							  {

							  ?>
      <tr>
        <td colspan="8" align="center">No record found.</td>
      </tr>
      <?php

							  }

							  ?>
    </tbody>
  </table>
</div>
<div class="pagination">
  <ul>
    <?php echo $pages->display_pages(); ?>
  </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>

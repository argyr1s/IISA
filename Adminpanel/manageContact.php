<div class="content">
<div class="header">
  <h1 class="page-title">Manage Contact</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li class="active">Big Contact</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<!--<div align="left" id="showmesg">	

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



					</div>-->
<div class="btn-toolbar"> 
  <!--<button class="btn">Import</button>

						<button class="btn">Export</button>-->
  <div class="btn-group"> </div>
</div>
<div class="well">
  <table class="table" width="100%">
    <thead>
      <tr>
        <th width="73">#</th>
        <!--<th width="254">Big Paragraph Title</th>-->
        <th width="494">Contact</th>
        <th width="162" style="width: 26px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$SQL_AUSER = mysql_query("SELECT * FROM `tbl_contact`");

							  

							  $total_rows = mysql_num_rows($SQL_AUSER);

						  $pages = new Paginator;  

						  $pages->items_total = $total_rows;  

						  $pages->mid_range = 9;  

							  $pages->paginate();  

							  

							  $SQL_AUSER1 = mysql_query("SELECT * FROM `tbl_contact` ".$pages->limit);

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
        <!--<td><?=$GET_ROW['p_title'];?></td>--><td><? echo html_entity_decode($GET_ROW['address']);?></td>
        <td><a href="index.php?action=editContact&id=<?php echo $GET_ROW['id'];?>" title="Edit"><i class="icon-pencil"></i></a> &nbsp; </td>
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

<?php
$id = $_REQUEST['id'];
$SQL_DATA = mysql_fetch_assoc(mysql_query("SELECT * FROM `tbl_product` WHERE id=".$id));
	$txtProductName 		=$SQL_DATA['product_name'];
	$txtProductDose 		=$SQL_DATA['product_dose'];
	$txtProductDescription	=$SQL_DATA['product_details'];	
    $txtProductType 		= $SQL_DATA['product_type'];	
    $txtNormalPrice			=$SQL_DATA['p_price'];
	$txtNHSprice 			=$SQL_DATA['p_nhs_price'];
	$txtExtraPrice 			=$SQL_DATA['extra_ml_cost'];
    $txtDiscountVal 		= $SQL_DATA['Discount_Value'];
	$DiscountType 			= $SQL_DATA['Discount_Type'];
	$productImage			= $SQL_DATA['product_image'];
	$chInitialDose =  $SQL_DATA['p_dose_order'];
	$vat =  $SQL_DATA['vat'];
//-----------------------------------------------------------------------------

if(isset($_REQUEST['btnSubmit']))
{   
	$error = 0;
	$err_txtProductName= "";
	$err_txtProductDescription = "";
    $err_txtUsedFor = "";
	$err_txtProductType = "";
    $err_txtProductStatus = "";
	$err_txtNormalPrice = "";
	$err_txtNHSprice = "";
	$err_txtDiscountVal = "";
	$err_DiscountType = "";
    $err_vat = "";
	$err_txtExtraPrice = "";
	$vat = '';
	$txtProductName = $_REQUEST['txtProductName'];
	$txtProductDose = $_REQUEST['txtProductDose'];
	

	$txtProductDescription = $_REQUEST['txtProductDescription'];

	$txtUsedFor ="";

    $txtProductType = $_REQUEST['txtProductType'];

	

    $txtNormalPrice = $_REQUEST['txtNormalPrice'];

	$txtNHSprice = $_REQUEST['txtNHSprice'];

    $txtDiscountVal = '';

	$DiscountType = '';

	$chInitialDose =  $_REQUEST['chInitialDose'];

	

	$PStatus =  $_REQUEST['p_status'];
if($txtProductType == "liquid")
		$txtExtraPrice = $_REQUEST['txtExtraPrice'];
	else
		$txtExtraPrice = 0;	

	
	/* if($vat == "")
	
		{
	
			$error = 1;
	
			$err_vat = '<span class="errorMsg">Please enter VAT amount in percentage .</span>';
	
		}*/
	

    if($txtProductName == "")

    {

        $error = 1;

        $err_txtProductName = '<span class="errorMsg">Please enter product name.</span>';

    }

	elseif(strlen($txtProductName)>200)

	{

	 	$error = 1;

  		$err_txtProductName= '<span class="errorMsg">Length of Product name should be less than 200.</span>';

	}

	if($txtProductDescription == "")

    {

        $error = 1;

        $err_txtProductDescription = '<span class="errorMsg">Please enter product description.</span>';

    }

	/*---------------------------------------------------------------------------------------------------*/

	if($txtNormalPrice == "")

    {

        $error = 1;

        $err_txtNormalPrice = '<span class="errorMsg">Please enter normal price.</span>';

    }

		 elseif(is_numeric(trim($txtNormalPrice)) == false)

	 {

  		$error = 1;

        $err_txtNormalPrice = '<span class="errorMsg">Please enter numeric value.</span>';

	 }

	if($txtNHSprice == "")

    {

        $error = 1;

        $err_txtNHSprice = '<span class="errorMsg">Please enter NHS price.</span>';

    }

	 elseif(is_numeric(trim($txtNHSprice)) == false)

	 {

  		$error = 1;

        $err_txtNHSprice = '<span class="errorMsg">Please enter numeric value.</span>';

	 }

if($txtProductType == "liquid")
	 {
	 	if($txtExtraPrice == "")
    	{
			$error = 1;
			$err_txtExtraPrice = '<span class="errorMsg">Please enter extra ml price.</span>';
    	}
	 	elseif(is_numeric(trim($txtExtraPrice)) == false)
	 	{
			$error = 1;
			$err_txtExtraPrice = '<span class="errorMsg">Please enter numeric value.</span>';
	 	}
	 }



	  

    if($txtProductType == "")

    {

        $error = 1;

        $err_txtProductType = '<span class="errorMsg">Please select product type.</span>';

    }  

	

	if($_FILES['txtProductImage']['name']!="")

	{

		$productImage = date('Ymdhis')."_".$_FILES['txtProductImage']['name'];

		move_uploaded_file($_FILES['txtProductImage']['tmp_name'],"../uploads/product_image/".$productImage );	

		$Filename="../uploads/product_image/".$productImage;



	}         

    

    if($error == 0)

    {		

		 mysql_query("UPDATE `tbl_product` SET product_name ='".mysql_real_escape_string($txtProductName)."', product_details = '".mysql_real_escape_string($txtProductDescription)."', product_image = '".$productImage."', product_type = '".$txtProductType."', p_price = '".$txtNormalPrice."', p_nhs_price = '".$txtNHSprice."', extra_ml_cost = '".$txtExtraPrice."', p_dose_order = '".$chInitialDose."', p_dateAdded = now() ,product_dose = '".$txtProductDose."' WHERE id = ".$id."");

		

	

		 

		 header("Location:index.php?action=manage_products&u=1");

	 


    }

	else

	{

		echo "Test";

	}

}

?>

<div class="content">
<div class="header">
  <h1 class="page-title">Edit Product</h1>
</div>
<ul class="breadcrumb">
  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
  <li><a href="index.php?action=manage_products">Manage Products</a> <span class="divider">/</span></li>
  <li class="active">Edit Product</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
<div class="well">

  <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
      <div style="height: 30px; font-size: 11px; color: #999999;"> ( <span style="font-size: 15px;">*</span> indicates mandatory fields.) </div>
      <form id="tab" name="frmAdd" method="post" action="" enctype="multipart/form-data">
        <label>Product Name*</label>
        <input type="text" name="txtProductName" value="<?php echo $txtProductName;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtProductName)){ echo $err_txtProductName; } ?>
		
		 <label>Product Dose in ML* &nbsp;&nbsp;( <span class="style1">Please add only Numbers like 3.0 etc.</span>)</label>
        <input type="text" name="txtProductDose" value="<?php echo $txtProductDose;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtProductDose)){ echo $err_txtProductDose; } ?>
		
		
        <label>Product Description*</label>
        <textarea  name="txtProductDescription"  class="input-xlarge" ><?php echo $txtProductDescription;?></textarea>
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtProductDescription)){ echo $err_txtProductDescription; } ?>
        <label>
        <Input type = 'Checkbox' Name ='chInitialDose'  

		<?php if (isset($chInitialDose) && $chInitialDose=="1") echo " checked='checked'";?> value ="1" >
        Initial Dose</label>
        <label><img src="../uploads/product_image/<?=$productImage;?>" height = "120" width="100"></label>
        <label>Product Image*</label>
        <input type="file" name="txtProductImage" value="<?php echo $txtProductImage;?>" class="input-xlarge" />

        <label>Product Type.*</label>
        <select name="txtProductType" id="txtProductType" >
          <option value="">Select</option>
          <option value="capsules" <?php if (isset($txtProductType) && $txtProductType=="capsules")  echo " selected='selected'";?>

			>Capsules</option>
          <option value="liquid" <?php if (isset($txtProductType) && $txtProductType=="liquid")  echo " selected='selected'";?>

			>Liquid</option>
        </select>
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtProductType)){ echo $err_txtProductType; } ?>
        <label>Normal Price.*</label>
        <input type="text" name="txtNormalPrice" value="<?php echo $txtNormalPrice;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtNormalPrice)){ echo $err_txtNormalPrice; } ?>
        <label>NHS Price.*</label>
        <input type="text" name="txtNHSprice" value="<?php echo $txtNHSprice;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtNHSprice)){ echo $err_txtNHSprice; } ?>
		<label>Extra ml price<br />(Only for Liquid extra ml above 150)</label>
        <input type="text" name="txtExtraPrice" value="<?php echo $txtExtraPrice;?>" class="input-xlarge" />
        &nbsp;&nbsp;&nbsp;
        <?php if(isset($err_txtExtraPrice)){ echo $err_txtExtraPrice; } ?>
		
             <label></label>
        <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary"/>
        <a href="index.php?action=manage_products" class="btn">Cancel</a>
        <div class="btn-group"> </div>
      </form>
    </div>
  </div>
</div>

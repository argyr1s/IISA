<?
mysql_query("DELETE FROM `tbl_sponsors` WHERE id='".$_REQUEST['id']."'");
header("location:index.php?action=manageSponser");
?>
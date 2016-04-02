<?
$a=0;
if($a==1)
{
	$con=mysql_connect("","","");
	if(!$con)
	{
	echo "Error";
	}
	mysql_select_db("");
}
else
{
	$con=mysql_connect("localhost","root","root");
	if(!$con)
	{
	echo "Error";
	}
	mysql_select_db("iisa");

}
?>
<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("test_products",$link);
$sql = "SELECT * FROM dropdown ";
$aResult = mysql_query($sql);
if($_REQUEST['frm_action'] == 3)
{
if ($_REQUEST['product_id'] == 0)
{
$id = $_REQUEST['product_id'];
$sqlCustomer = "SELECT * FROM dropdown ";
}
else
{
$id = $_REQUEST['product_id'];
$sqlCustomer = "SELECT * FROM dropdown WHERE id ='$id'";
}
$aCustomer = mysql_query($sqlCustomer);
}
?>
<html>
<head>
<script type="text/javascript">
function changeproduct_name()
{
oForm       = eval(document.getElementById("frmForm"));
iCustomerId = document.getElementById("product_name").value;
url         = "showDetails1.php?frm_action=3&product_id=" +iCustomerId;
document.location = url;
}
</script>
</head>
<body>
<form name="frmForm" id="frmForm" >
<table border="0" cellspacing="2" cellpadding="2" width="40%">
<tr>
<td align="right" ><strong>product_name</strong></td>
<td align="left"><select name="product_name" id="product_name" onchange="javascript:changeproduct_name();">
<option value="">Select</option>
<option value="0">All</option> 
<?php
$sid1 = $_REQUEST['product_id'];
while($rows=mysql_fetch_array($aResult,MYSQL_ASSOC))
{
$id  = $rows['id'];
$product_name = $rows['product_name'];
if($product_name1 == $id)
{
$chkselect = 'selected';
}
else
{
$chkselect ='';
}
?>
<option value="<?php echo  $id;?>"<?php echo $chkselect;?>><?php echo $product_name;?></option>
<?php } ?>
</td>
</tr>
<?php if($_REQUEST['frm_action'] == 3) { ?>
<tr>
<td colspan="2">
<table  style="border:1px solid #003366;" cellspacing="2" cellpadding="2" width="100%" bgcolor="#003366">
<tr bgcolor="#EFEFEF">
<td><b><font color='Red'>cat_id</font></b></td>
<td><b><font color='Red'>product_name</font></b></td>

</tr>
<?php
while($row1 = @mysql_fetch_array($aCustomer,MYSQL_ASSOC))
{
$sid   = $row1['cat_id'];
$sname = $row1['product_name'];
?>
<tr bgcolor="#FFFFFF">
<td><b><font color='#663300'><?php echo $cat_id;?></font></b></td>
<td><b><font color='#663300'><?php echo $product_name;?></font></b></td>

</tr>
<?php } ?>
</table>
</td>
</tr>
<?php } ?>
</table>
</form>
</body>
</html>
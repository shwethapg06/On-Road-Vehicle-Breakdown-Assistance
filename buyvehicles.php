<?php
include("header.php");
include("sidebar.php");
include("dbconnection.php");
?>
<script type="text/javascript">
function validate() 
{
if(document.form1.purid.value=="")
{
	alert("Enter the Purchase ID");
	document.form1.purid.focus();
	return false;
}
if(document.form1.vehid.value=="")
{
	alert("Enter the Vehicle ID");
	document.form1.vehid.focus();
	return false;
}
if(document.form1.custid.value=="")
{
	alert("Enter the Customer ID");
	document.form1.custid.focus();
	return false;
}
if(document.form1.purdate.value=="")
{
	alert("Enter Purchase Date");
	document.form1.purdate.focus();
	return false;
}
if(document.form1.deldate.value=="")
{
	alert("Enter Delivery Date");
	document.form1.deldate.focus();
	return false;
}
if(document.form1.comments.value=="")
{
	alert("Insert Comments");
	document.form1.comments.focus();
	return false;
}
if(document.form1.advance.value=="")
{
	alert("Enter the Advance Amount");
	document.form1.advance.focus();
	return false;
}
if(document.form1.payment.value=="")
{
	alert("Enter the Payment Type");
	document.form1.payment.focus();
	return false;
}
}
</script>
<?php
$dt= date("Y-m-d");
include("dbconnection");
if(isset($_POST["submit"]))
{

$sql ="insert into booking(purchaseid,vehicleid,custid ,purchasedate,deliverydate,comments,paid,paymenttype) values('$_POST[purid]','$_POST[vehid]','$_POST[custid]','$_POST[purdate]','$_POST[deldate]','$_POST[comments]','$_POST[advance]','$_POST[payment]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
$ctins =  mysqli_affected_rows();
}
?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>buy vehicle</h1>

<?php
include("dbconnection.php");
if($ctins == 1)
{
	echo "<center><b>Vehicle registered Successfully...</b></center><br>";
}
else
{

	?>
		<form id="form1" name="form1" method="post" action="" onsubmit="return validate()">		
			<table width="427" border="0">
			  <tr>
			    <th width="170" height="33" scope="row">Purchase Id</th>
			    <td width="247">
			      <label for="purid"></label>
			      <input type="text" name="purid" id="purid"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" />
		        </td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Vehicle Id
			      <label for="vehid"></label></th>
			    <td><input type="text" name="vehid" id="vehid"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		      </tr>
			  <tr>
			    <th height="36" scope="row">Customer Id</th>
			    <td><label for="custid"></label>
		        <input type="text" name="custid" id="custid"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		      </tr>
			  <tr>
			    <th height="34" scope="row">Purchase Date</th>
			    <td><label for="purdate"></label>
		        <input type="text" name="purdate" id="purdate" /></td>
		      </tr>
			  <tr>
			    <th height="40" scope="row">Delivery Date</th>
			    <td><label for="deldate"></label>
		        <input type="text" name="deldate" id="deldate" /></td>
		      </tr>
			  <tr>
			    <th height="37" scope="row">Comments</th>
			    <td><label for="comments"></label>
		        <input type="text" name="comments" id="comments" /></td>
		      </tr>
			  <tr>
			    <th height="34" scope="row">Advance</th>
			    <td><label for="advance"></label>
		        <input type="text" name="advance" id="advance"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"/></td>
		      </tr>
			  <tr>
			    <th height="31" scope="row">Payment Type </th>
			    <td><label for="payment"></label>
		        <input type="text" name="payment" id="payment" /></td>
		      </tr>
			  <tr>
          </table>
			<table width="427" border="0">
			  <tr>
			    <th width="181" scope="row">&nbsp;</th>
			    <td width="236"><br />
			      <input type="submit" name="submit" id="submit" value="Register" /></td>
		      </tr>
		  </table>
        </form>
        <?php
}
?>
		<p>&nbsp;</p>
		</div>
        
<?php
include("footer.php");
?>
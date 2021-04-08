<?php
//session_start();
include("header.php");
include("sidebar.php");
?>
<script type="text/javascript">
function validate()
{
	if(document.form1.emailid.value=="")
	{
		alert("Enter Emailid");
		document.form1.emailid.focus();
		return false;
	}
}
</script>
<?php
include("dbconnection.php");
		if(isset($_SESSION['empid']))
	{
		header("Location: empaccount.php");
	}
	if(isset($_SESSION['custid']))
	{
		header("Location: account.php");
	}

if(isset($_POST['submit']))
{
	include("dbconnection.php");
	if(isset($_GET['emailid'])){
$result = mysqli_query($conn,"SELECT * FROM customer where emailid='$_POST[emailid]'");
	if(mysqli_num_rows($result) == 1)
	{
		while($row = mysqli_fetch_array($result))
		{
			$_SESSION['emailid'] =  $row['emailid'];
		}
		header("Location: changepassword.php");
	}
	else
	{
		$logres = "Email ID is not exit in E-workshop database";
	}
}
}

?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>Forgot password</h1>
			<p>Please enter Email ID to reset password </p>
		  <form id="form1" name="form1" method="post" action=""  onsubmit="return validate()">
		  <table width="466" height="122" border="0">
		    <tr>
		      <th colspan="2" scope="row"><font color="#FF0000"><b><?php echo $logres=''; ?></b></font></th>
	        </tr>
		    <tr>
		      <th width="122" height="39" scope="row">Email ID</th>
		      <td width="334"><input name="emailid" type="text" id="eamilid" size="50" /></td>
	        </tr>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td><input name="submit" type="submit" class="button" id="submit" value="Recover password" /></td>
	        </tr>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td>&nbsp;</td>
	        </tr>
		    </table>
		</form>
			<p>&nbsp;</p>
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>
<?php
ob_start();
include("header.php");
include("sidebar.php");
if(isset($_SESSION['custid']))
{
	header("Location: account.php");
}
else
{
?>

		<div id="main">
	    <h3>E-workshop - Complete Auto solutions</h3>
	    <table width="472" border="0">
		  <tr>
		    <td colspan="2"><p><b>We pull a vehicle out of trouble within a day</b></p>
	        <p>&nbsp;</p></td>
	      </tr>
		  <tr>
		    <td width="236"><a href="login.php"><img src="customer.png" width="169" height="169" /></a></td>
		    <td width="236"><a href="emplogin.php"><img src="admin.png" width="169" height="169" /></a></td>
	      </tr>
		  </table>
		  <div class="container">
		  <img src="pump.gif" alt="Avatar" class="image">
		  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
		  <img src="mechanic1.gif"/>
		  <img src="mechanic.gif"/>
		</div>

<!-- wrap ends here -->
</div>
<?php
}

include("footer.php");
?>
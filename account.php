<?php
ob_start();
//session_start();
include("header.php");
include("sidebar.php");
include("dbconnection.php");
?>


		<div id="main">
        <p>
          <?php
if(isset($_GET['custid'])){
$result = mysqli_query($conn,"select * from customer where custid='$_SESSION[custid]' ");
$rowrec = mysqli_fetch_array($result);


$result1 = mysqli_query($conn,"SELECT * FROM service where custid='$_SESSION[custid]' AND status='Completed' ");

$result2 = mysqli_query($conn,"SELECT * FROM service where custid='$_SESSION[custid]' AND status='Pending' ");

$result3 = mysqli_query($conn,"SELECT * FROM vehicle where custid='$_SESSION[custid]' AND status='Accepted' ");

$result4 = mysqli_query($conn,"SELECT * FROM vehicle where custid='$_SESSION[custid]' AND status='Pending' ");

$result5 = mysqli_query($conn,"SELECT * FROM booking where custid='$_SESSION[custid]' ");
}
		?>
   
        </p>
        <table width="476" height="213" border="0">
          <tr bgcolor="#FFFFCC">
            <th height="33" scope="row"><u>Customer ID:</u></th>
            <td>&nbsp; <?php echo $rowrec['custid']; ?> </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <th height="35" scope="row" ><u>Customer Name :</u></th>
            <td>&nbsp; <?php echo $rowrec['fname']. " ".$rowrec['lname']; ?></td>
          </tr>
          <tr bgcolor="#FFFFCC">
            <th height="59" scope="row"><u>Vehicle service status:</u></th>
            <td>&nbsp; <?php echo mysqli_num_rows($result2) ;?> vehicles status Pending.<br />
        &nbsp; <?php echo mysqli_num_rows($result1) ;?> vehicles status Completed. </td>
          </tr>
          <tr bgcolor="#CCCCCC">
            <th scope="row" ><u>Vehicle sell request:</u></th>
            <td>&nbsp; Sold :<?php echo mysqli_num_rows($result3) ;?> Vehicles <br />&nbsp; Pending :<?php echo mysqli_num_rows($result4) ;?> Vehicles</td>
          </tr>
          <tr bgcolor="#FFFFCC">
            <th scope="row"><u>No. of vehicles purchased:</u></th>
            <td>&nbsp;<?php echo mysqli_num_rows($result5) ;?></td>
          </tr>
        </table>
</div>

<!-- wrap ends here -->
</div>

<?php
include("footer.php");
?>

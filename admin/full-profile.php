<?php
session_start();
include("includes/config.php");

?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<h1>HOSTEL MANAGMENT SYSTEM</h1>
	
	
	
	
<table width="100%" border="0">
<?php 
	$id=$_GET['id'];
	$qry="SELECT * FROM registration WHERE `id` = '$id'";
		 $ret= $con->query($qry);
			while($row=$ret->fetch_array())
			{
			?>
		<tr>
			  <td colspan="2"  class="font"><span style="font-size: 25px"><?php echo ucfirst($row['firstName']);?> <?php echo ucfirst($row['lastName']);?>'S</span> <span class="font1"> information &raquo;</span> </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <div align="right">Reg Date : <span class="comb-value"><?php echo $row['postingDate'];?></span></div></td>
  </tr>
<!--  Personal Info.  -->				  
				  
<tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Personal Info &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">Course: </td>
<td class="comb-value1"><?php echo $row['course'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Reg no: </td>
<td class="comb-value1"><?php echo $row['regno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Name: </td>
<td class="comb-value1"><b><?php echo $row['firstName'];?></td></b>
</tr>


<tr>
<td width="12%" valign="top" class="heading">Last: </td>
<td class="comb-value1"><b><?php echo $row['lastName'];?></td></b>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Gender: </td>
<td class="comb-value1"><?php echo $row['gender'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contact No: </td>
<td class="comb-value1"><b><?php echo $row['contactno'];?></td></b>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Email id: </td>
<td class="comb-value1"><b><?php echo $row['emailid'];?></td></b>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Emergency Contact: </td>
<td class="comb-value1"><?php echo $row['egycontactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Name: </td>
<td class="comb-value1"><?php echo $row['guardianName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Relation: </td>
<td class="comb-value1"><?php echo $row['guardianRelation'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Guardian Contact: </td>
<td class="comb-value1"><b><?php echo $row['guardianContactno'];?></td></b>
</tr>

	<!--  Room Detail  -->
	
			<tr>
			  <td colspan="2" align="left" class="heading" style="color: red;">Room Related Info &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1">
                <tr>
                  <td width="12%" valign="top" class="heading">Room no : </td>
                  
                      <td class="comb-value1"><?php echo $row['roomno'];?></td>
                    </tr>
                  <tr>
                  <td width="12%" valign="top" class="heading">Seater : </td>
                  
                      <td class="comb-value1"><?php echo $row['seater'];?></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Fees PM : </td>
                      <td class="comb-value1"><?php echo $fpm=$row['feespm'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">Food Status: </td>
                      <td class="comb-value1"><?php if($row['foodstatus']==0)
{
  echo "Without Food";
}
else
{
  echo "With Food";
}
                      ;?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Staying From: </td>
                      <td class="comb-value1"><?php echo $row['stayfrom'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Duration: </td>
                      <td class="comb-value1"><?php echo $dr=$row['duration'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Total Fee: </td>
                      <td class="comb-value1">
                      <?php if($row['foodstatus']==1)
                      { 
                        $fd=2000; 
                        echo (($dr*$fpm)+$fd);
                      }
                        else
                        {
                          echo $dr*$fpm;
                        }
                      ?></td>
                    </tr>
  



<!--  Address  -->

<tr>
        <td colspan="2"  class="heading" style="color: red;">Permanent Address  &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">Address: </td>
<td class="comb-value1"><?php echo $row['corresAddress'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">City: </td>
<td class="comb-value1"><?php echo $row['corresCIty'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">State: </td>
<td class="comb-value1"><?php echo $row['corresState'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Pincode: </td>
<td class="comb-value1"><?php echo $row['corresPincode'];?></td>
</tr>
<?php } ?>

			
        <tr>
			<td width="30%"></td>
          <td class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Prints this Document " onClick="return f3();" />
          </label>
          <label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close this document " onClick="return f2();"  />
          </label></td>
        </tr>
        
</table>
</body>
</html>

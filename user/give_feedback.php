<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given Request Form to a officer</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6')";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><u>Request Form</u></center><br>
 
<fieldset>



<h3>Please give your answer about the following request by circling the given grade on the scale:</h3>




<table class="table table-bordered" style="margin-top:50px">
<tr>

<th> Select Officer :</th>
<td>
<select name="faculty" class="form-control">
	<?php
$sql=mysqli_query($conn,"select Name,email from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
</tr>
</table>


<h3>Birth Certificate</h3>
<table class="table table-bordered">
<tr>
<td><b>1:</b> apply for the details of the birth certificate : </td>  
<td><input type="radio" name="quest1" value="yes" required> yes
<input type="radio" name="quest1" value="no">no</td>
</tr>
  

</table>

<h3>Death certificate</h3>
 <table  class="table table-bordered" >
<Td><b>2:</b> apply for the details of the death certificate :</td>
<td> <input type="radio" name="quest2" value="yes" required> yes
  <input type="radio" name="quest2" value="no">no
</td>


</table>

<h3>Land Acquisitiion</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>3:</b>apply for the details of the land acquisition :</td>
<td>
 <input type="radio" name="quest3" value="yes" required> yes
  <input type="radio" name="quest3" value="no">no
</tr>
</table>
<h3>agricultural loan</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>4:</b>apply for the details of the agricultural loan :</td>
<td>
 <input type="radio" name="quest4" value="yes" required> yes
  <input type="radio" name="quest4" value="no">no
</tr>
</table>
<h3>Transfer Request</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>5:</b>apply for the details of the Transfer Request :</td>
<td>
 <input type="radio" name="quest5" value="yes" required> yes
  <input type="radio" name="quest5" value="no">no
</tr>
</table>
<h3>Issuance of Ration Card</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>6:</b>apply for the Issuance of Ration Card :</td>
<td>
 <input type="radio" name="quest6" value="yes" required> yes
  <input type="radio" name="quest6" value="no">no
</tr>
</table>

<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p>


</form>
</fieldset>

<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>
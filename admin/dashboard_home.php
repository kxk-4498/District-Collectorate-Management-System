<h1 align="center" style="text-decoration:underline"><a href="">Collector Dashboard</a></h1>
<?php 
//all complaints
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Total Number of Officers : $rows</h2>";	

//all emegency compalints
$q1=mysqli_query($conn,"select * from user ");
$r1=mysqli_num_rows($q1);			
echo "<h2 style='color:orange'>Total Number of users : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Total Number of requests given by users  : $r2</h2>";	


					

?>

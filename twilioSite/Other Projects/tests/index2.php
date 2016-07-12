<!DOCTYPE html>
<html>
<body>


<?php
	if(isset($_GET["value"])){
		
		$value="";
		$value= $_GET["value"];
		
		$value= "The Value is: ". $value;
	}else{
		$value="There is no Value";
	}

    function runMyFunction() {
		$con=mysqli_connect("74.98.247.25","amusciano","muddles321","amusciano_test");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
			date_default_timezone_set("America/New_York");
			mysqli_query($con,"INSERT INTO time
								VALUES (".time().")");
			mysqli_close($con);
		}
		
		
	}

  if (isset($_GET['time'])) {
    runMyFunction();
  }
?>

<h1><?=$value?></h1>

<a href='index.php?time=true'>Record Time</a>


<form action="sms.php">
	<input type="submit" value= "Send SMS!">
</form>



</body>

</html> 
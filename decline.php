<?php
$conn=mysqli_connect("localhost","root","","DBS")
        or die('Error connecting to MySQL server.'); 
        function err($n)
        {
          $n=trim($n);//remove extra tab spaces
          $n=stripslashes($n);//remove blackslashes from input to avoid xss attack
          $n=htmlspecialchars($n);//convert html to plain text
          return $n;
        }

 if(isset($_GET['adhaar']))
 	$adhaar=$_GET['adhaar'];
  if(isset($_GET['by']))
  	{
  		$by=$_GET['by'];
  		if($by==1)
  		$req='denied by Security Officer';
  		else if($by==2)
  		$req='denied by Deputy Registrar';
  		$query="UPDATE registrations SET requeststatus='$req' WHERE adhaar='$adhaar' AND requeststatus NOT LIKE 'denied%'";
		$data = mysqli_query($conn, $query);
  		if($by==1)
		echo "<script>window.location.href='SO.php';</script>";
		else if($by==2)
		echo "<script>window.location.href='DR.php';</script>";

	}

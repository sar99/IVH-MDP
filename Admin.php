<html>
<?php 
session_start();?>
<head>
	<title>
		Admin Page
	</title>
</head>

<body>
	<h1>Welcome to the Admin Page </h1>
	<?php if(!(isset($_POST['submit'])||isset($_POST['submit1']))){?>
	<form action="Admin.php" method="post">
	<label for="password">Enter the password for admin page<br></label>
    <input type="password" name="password" placeholder="Enter password"  required><br>
    <button type="submit" name="submit" class="btn1">Submit</button>
	</form>
<?php } ?>


<?php
	$conn=mysqli_connect("localhost","root","","DBS")
    or die('Error connecting to MySQL server.'); 
    function err($n){
		$n=trim($n);//remove extra tab spaces
        $n=stripslashes($n);//remove blackslashes from input to avoid xss attack
        $n=htmlspecialchars($n);//convert html to plain text
        return $n;
	}
	if(isset($_POST["submit"])){
		$pass=err($_POST["password"]);
		if($pass=="a"){

			?>
				<form action="Admin.php" method="post">
				<label for="password">Enter the TID <br></label>
			    <input type="number" name="tempid" placeholder="Enter TID"  required><br>
			    <button type="submit" name="submit1" class="btn1">Submit</button>
				</form>

<!-- 
			$query="SELECT * FROM registrations WHERE requeststatus='pending' OR requeststatus LIKE 'with%'";
			$data = mysqli_query($conn, $query);
		    echo '<table><tr><th>Temporary ID</th><th>Name</th><th>Gender</th><th>Email ID</th><th>Address</th><th>Adhaar No.</th><th>Invitee ID</th><th>Purpose of visit</th><th>Request Status</th>';
  		while ($row = mysqli_fetch_array($data)){ 
 		   	echo '<tr><td>' . $row['tempid'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
    		echo '<td>' . $row['gender'] . '</td>';
    		echo '<td>' . $row['email'] . '</td>';
    		echo '<td>' . $row['address'] . '</td>';
    		echo '<td>' . $row['adhaar'] . '</td>';
    		echo '<td>' . $row['inviteeid'] . '</td>';
    		echo '<td>' . $row['purpose'] . '</td>';
    		echo '<td>' . $row['requeststatus'] . '</td>';
    		echo '<td><a href="decline.php?adhaar=' . $row['adhaar'] . '&by=1">Decline</a></td>';
    		echo '<td><a href="forward.php?adhaar=' . $row['adhaar'] . '">Forward</a></td></tr>'; 
  		}
		echo '</table>';--><?php
	}
	else{
		echo "<script>window.alert('You do not seem to be the admin of this page');</script>";
        echo "<script>window.location.href='Admin.php';</script>";} 
		}

	if(isset($_POST['submit1']))
	{
		$tempid=err($_POST['tempid']);
		$query="SELECT * FROM guest WHERE guestid='$tempid' AND intime IS NULL";
		$result=mysqli_query($conn,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows==0)
		{
					echo "<script>window.alert('No such guest exists');</script>";
			        echo "<script>window.location.href='Admin.php';</script>";
		}
		else
		{
					    echo '<table><tr><th>Guest ID</th><th>Name</th><th>Gender</th><th>Email ID</th><th>Address</th><th>Adhaar No.</th><th>Invitee ID</th><th>Purpose of visit</th>';
			  		while ($row = mysqli_fetch_array($result)){ 
			 		   	echo '<tr><td>' . $row['guestid'] . '</td>';
						echo '<td>' . $row['name'] . '</td>';
			    		echo '<td>' . $row['gender'] . '</td>';
			    		echo '<td>' . $row['email'] . '</td>';
			    		echo '<td>' . $row['address'] . '</td>';
			    		echo '<td>' . $row['adhaar'] . '</td>';
			    		echo '<td>' . $row['inviteeid'] . '</td>';
			    		echo '<td>' . $row['purpose'] . '</td>';
			    		echo '<td><a href="entry.php?adhaar=' . $row['adhaar'] . '&tempid=1' . $row['guestid'] . '">Mark Entry</a></td>';
			    		echo '<td><a href="exit.php?adhaar=' . $row['adhaar'] . '&tempid=1' . $row['guestid'] . '">Mark Exit</a></td></tr>'; 
			  		}
					echo '</table>';
		}

	}


?>
</body>

</html>
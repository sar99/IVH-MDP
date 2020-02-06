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
	<form action="DR.php" method="post">
	<label for="password">Enter the password for admin page<br></label>
    <input type="password" name="password" placeholder="Enter password"  required><br>
    <button type="submit" name="submit" class="btn1">Submit</button>
	</form>
</body>

</html>

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
			$query="SELECT * FROM registrations WHERE requeststatus='Approved by SO'";
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
    		echo '<td><a href="decline.php?adhaar=' . $row['adhaar'] . '&by=2">Decline</a></td>';
    		echo '<td><a href="confirm.php?adhaar=' . $row['adhaar'] . '">Confirm</a></td></tr>';
  		}
		echo '</table>';
	}
	else{
		echo "<script>window.alert('You do not seem to be the admin of this page');</script>";
        echo "<script>window.location.href='DR.php';</script>";} 
}?>

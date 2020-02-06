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

 if(isset($_POST['rooms']))
 {
 	$rooms=err($_POST['rooms']);
 }
 $tempid=RAND();

if(isset($_POST['submit']))
{
    $tempid=$_POST['tempid'];
if($_POST['rooms']==0)
      echo "<script>window.location.href='newregsendmail.php?tempid=" . $tempid . "';</script>"; 

  
  $name1=$_POST['name1'];
  $gender1=$_POST['gender1'];
  $email1=$_POST['email1'];
  $address1=$_POST['address1'];
  $adhaar1=$_POST['adhaar1'];
  $requeststatus='pending';
  $inviteeid=$_POST['inviteeid'];

  $sql="(SELECT rollno FROM newstudents WHERE newstudents.rollno = '$inviteeid')UNION(SELECT rollno FROM oldstudents WHERE oldstudents.rollno = '$inviteeid') UNION (SELECT staffid FROM teaching WHERE teaching.staffid = '$inviteeid') UNION (SELECT staffid FROM nonteaching WHERE nonteaching.staffid = '$inviteeid')";
  $result3=mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($result3);
  if($num_rows==0)
    $inviteeid=NULL;


  $purpose=$_POST['purpose'];
  $query="INSERT INTO `registrations`(`name`, `gender`, `email`, `address`, `adhaar`, `tempid`, `requeststatus`, `inviteeid`, `purpose`) VALUES ('$name1','$gender1','$email1','$address1','$adhaar1','$tempid','$requeststatus','$inviteeid','$purpose')";
          $result=mysqli_query($conn,$query);
    if($_POST['name2']!=NULL)
    {

      $name2=$_POST['name2'];
      $gender2=$_POST['gender2'];
      $email2=$_POST['email2'];
      $address2=$_POST['address2'];
      $adhaar2=$_POST['adhaar2'];
      $tempid=$_POST['tempid'];
      $requeststatus='with' . $tempid;
      $inviteeid=$_POST['inviteeid'];
      $purpose=$_POST['purpose'];
      $query="INSERT INTO `registrations`(`name`, `gender`, `email`, `address`, `adhaar`, `tempid`, `requeststatus`, `inviteeid`, `purpose`) VALUES ('$name2','$gender2','$email2','$address2','$adhaar2','$tempid','$requeststatus','$inviteeid','$purpose')";
              $result=mysqli_query($conn,$query);
    }

}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
<style>

.main .cbox {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  z-index: 100;
}

.main .btn:hover {
  background-color: black;

 </style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap:500" rel="stylesheet">




</head>
<body>

<nav class="navbar navbar-light bg-light justify-content-center">
	<a class="navbar-brand col-lg-4 col-sm-8" href="#">
    <img src="http://www.iiitm.ac.in/templates/shaper_educon/images/presets/preset1/logo.png" width="100%" height="100 vw" alt="">
  </a>
  <a class="navbar-brand col-lg-2 col-sm-5" href="#">
    <img src="http://www.iiitm.ac.in/images/nacc5.png" width="100%" height="100 vw" alt="">
  </a>
   <a class="navbar-brand col-lg-4 col-sm-8" href="#" >
    <img src="http://www.iiitm.ac.in/images/logo-hindi.png" width="100%" height="100 vw" alt="">
  </a>
</nav>


<ul class="nav nav-tabs" style="background-color: #e3f2fd;">
  <li class="nav-item col-lg-1.5">
    <a class="nav-link active" href="book.html" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;border-top: 4px solid #041D57;">Book A Room</a>
  </li>
  <li class="nav-item col-lg-2.5">
    <a class="nav-link" href="status.php" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">Check Status of Booking</a>
  </li>
  <li class="nav-item col-lg-1.5">
    <a class="nav-link" href="availability.php" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">Check Availability</a>
  </li>
  <li class="nav-item col-lg-1.5">
    <a class="nav-link" href="reach.php" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">Reach Us</a>
  </li>
  <li class="nav-item dropdown col-lg-2" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #041D57">
          Login As
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="SO.php">Security Officer</a>
          <a class="dropdown-item" href="DR.php">Deputy Registrar</a>
          <a class="dropdown-item" href="Admin.php">Guest House Admin</a>
        </div>
   </li>
</ul>



<div class="main" style="padding-left: 0px;padding-right: 0px;background-color: #e3f2fd;">
	<img src="https://images.static-collegedunia.com/public/college_data/images/appImage/1503654914cover.jpg" class="img-fluid" alt="Responsive image" width="100%" height="120%" style="filter: blur(5px);z-index: 1;">
	<div class="cbox" style="width: 40%;">
		<form action='register.php' method="post" style="margin-top: 1.5vw;">

      <input type="hidden" name="rooms" placeholder="Enter your name" style="width: 100%;padding: 0.5rem;border-radius: 10px;" value=<?php echo $rooms-1; ?> >
      <input type="hidden" name="tempid" placeholder="Enter your name" style="width: 100%;padding: 0.5rem;border-radius: 10px;" value=<?php echo $tempid; ?> >


      <label for="name1" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;">Name of First Person<label>
      <input type="text" name="name1" placeholder="Enter your name" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="gender1" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;">Gender of First Person<label>
      <input type="text" name="gender1" placeholder="Enter your gender" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="email1" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;">Email ID of First Person<label>
      <input type="email" name="email1" placeholder="Enter your email id" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="address1" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;">Address of First Person<label>
      <input type="text" name="address1" placeholder="Enter your address" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="adhaar" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Adhaar Number of First Person</label>
      <input type="number" name="adhaar1" placeholder="Enter your adhaar number" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="inviteeid" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Invitee ID</label>
      <input type="text" name="inviteeid" placeholder="Enter the ID of your invitee" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="purpose" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Purpose of Visit</label>
      <input type="text" name="purpose" placeholder="Enter the purpose of your visit" style="width: 100%;padding: 0.5rem;border-radius: 10px;" required>

      <label for="name2" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Name of Second Person (if any)</label>
      <input type="text" name="name2" placeholder="Enter your name" style="width: 100%;padding: 0.5rem;border-radius: 10px;" >

      <label for="gender2" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Gender of Second Person</label>
      <input type="text" name="gender2" placeholder="Enter your gender" style="width: 100%;padding: 0.5rem;border-radius: 10px;">

      <label for="email2" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Email ID  of Second Person</label>
      <input type="email" name="email2" placeholder="Enter your email id" style="width: 100%;padding: 0.5rem;border-radius: 10px;">

      <label for="address2" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0px;">Address  of Second Person</label>
      <input type="text" name="address2" placeholder="Enter your address" style="width: 100%;padding: 0.5rem;border-radius: 10px;">

      <label for="adhaar" style="font-family: 'Asap', sans-serif;font-size: 1.2vw;text-align: left;margin-bottom: 0vw;">Adhaar Number  of Second Person</label>
      <input type="number" name="adhaar2" placeholder="Enter your adhaar number" style="width: 100%;padding: 0.5rem;border-radius: 10px;margin-bottom: 1vw;">

	  		<button type="submit" name="submit" class="btn" style="background-color: #e3f2fd;width: 100%;border-radius: 10px;"><?php if($rooms==1) echo "Submit"; else echo "Proceed to fill info for next room";?></button>
        </form>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
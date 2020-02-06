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



<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;border-top: 4px solid #041D57;">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" style="margin: auto;">
      <li class="nav-item active"  >
        <a class="nav-link" href="#" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">International Visitors' Hostel Bookings <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
 -->


<ul class="nav nav-tabs" style="background-color: #e3f2fd;">
  <li class="nav-item col-lg-1.5">
    <a class="nav-link " href="book.html" style="color: #041D57;font-family: 'Acme', sans-serif;font-size: 1.5vw;">Book A Room</a>
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
	<img src="background.jpg" class="img-fluid" alt="Responsive image" width="100%" style="filter: blur(5px);z-index: 1;">
	<div class="cbox" style="width: 40%;">
		<h1 style="font-family: 'Acme', sans-serif;font-size: 5rem;">IVH / MDP </h1>
		<h1 style="font-family: 'Acme', sans-serif;">Registration System</h1>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
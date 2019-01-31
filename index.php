<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Programmer Me : Workshops</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-02.png" alt="IMG">
				<div class="alert alert-primary" role="alert">
  Hello ! Join Programmer Me for Upcoming Python & Android Workshop Series.
</div>
			</div>

			<form class="contact1-form validate-form" method="post" action="index.php">
				<span class="contact1-form-title">
					Python & Android workshops 2019
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input">
					<input class="input1" type="email" name="email" placeholder="Email" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Number is required">
					<input class="input1" type="text" name="number" pattern="[0-9]{10}" placeholder="Contact Number"  maxlength="10" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Branch is required">
					<input class="input1" type="text" name="BS" placeholder="Select Branch & Semester: -" disabled>
					<span class="shadow-input1"></span>
				</div>
				<br>
  <center> <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="branch" required>
    <option value="CSE">CSE</option>
    <option value="IT">IT</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="MECH">MECH</option>
    <option value="CIVIL">CIVIL</option>
  </select>
	<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="sem" required>
	 <option value="S2">S2</option>
	 <option value="S4">S4</option>
	 <option value="S6">S6</option>
 </select></center><br>


				<div class="wrap-input1 validate-input" data-validate = "Track is required">
					<input class="input1" type="text" name="CH" placeholder="Choose Your Track(s): -" disabled>
					<span class="shadow-input1"></span>
				</div>


				<center><input  type="radio" name="track" value="Android" required>Android&nbsp
					<input  type="radio" name="track" value="Python" >Python&nbsp<br>
					<input  type="radio" name="track" value="Python&Android" >Android & Python&nbsp
</center><br>
<div class="wrap-input1 validate-input" data-validate = "Subject is required">
	<center><input class="input1" type="text" name="password_1" placeholder="Check Lists: -" disabled><br>
	<input  type="radio" name="check" value="PC" required>I have a PC&nbsp
	<input  type="radio" name="check" value="NPC" >I don't have a PC&nbsp
	<br>
	<input  type="radio" name="check" value="PCH" >My PC has more than 4GB of RAM and Better Processor(Without this you can't  attend the Android workshop)&nbsp
</center>
	<span class="shadow-input1"></span>
</div>




				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit"  name="reg_user">
						<span>
							Submit Join Request
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>






</body>
</html>

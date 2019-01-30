<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['number']);
  $branch = mysqli_real_escape_string($db, $_POST['branch']);
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
  $track = mysqli_real_escape_string($db, $_POST['track']);
  $check = mysqli_real_escape_string($db, $_POST['check']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array



  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM track2019 WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //encrypt the password before saving in the database

  	$query = "INSERT INTO track2019 (username, email, contact, branch, sem, track, checklist)
  			  VALUES('$name', '$email', '$contact', '$branch', '$sem', '$track', '$check')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}

// ...
// ...

// LOGIN USER


?>

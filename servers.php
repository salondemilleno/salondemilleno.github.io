<?php
session_start();

// initializing variables
$Name = "";
$Email    = "";
$Phone    = "";
$Address    = "";
$date    = "";
$error = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'salon_database');

// REGISTER USER
if (isset($_POST['booked'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
   // $date= date ('Y-m-d',strtotime($_POST['date']));


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) { array_push($error, "Name is required"); }
    if (empty($Email)) { array_push($error, "Email is required"); }
    if (empty($Address)) { array_push($error, "Address is required"); }
    if (empty($Phone)) { array_push($error, "Phone is required"); }
    if (empty($date)) { array_push($error, "Date is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM data WHERE Name='$Name' OR Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 
   
    
      if ($user['date'] === $date) {
      array_push($error, "Date already exists");
    }
  

  // Finally, register user if there are no errors in the form
  if (count($error) == 0) {
  //	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO book (Name, Phone, Address, Email,date) 
  			  VALUES('{$Name}', '{$Phone}', '{$Address}', '{$Email}', '{$date}')";
         
  	mysqli_query($db, $query);
  	$_SESSION['Name'] = $Name;
  	$_SESSION['success'] = "booked successfully";
  	header('location: thankyou.php');
  }



// LOGIN USER

  
   // $results = mysqli_query($db, $query);
   // if (mysqli_num_rows($results) == 1) {
   //   $_SESSION['username'] = $username;
   //   $_SESSION['success'] = "You are now logged in";
   //   header('location: DateRange.php');
 //   }else {
 //     array_push($errors, "Wrong username/password combination");
 //   }
  
    
   
   
    }


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Book Online</title>
<link rel="stylesheet" href="steph.css" type="text/css" />  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <title>Salon De Milleno</title>
  
  
  <meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->  
  <link rel="stylesheet" href="style.css" type="text/css" />
  
<?php include('servers.php') 
?>
<?php include('nav.php')
?>

<script>

$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtdate').attr('min', minDate);
    });
</script>
</head>
<body>
  <div class="header">
  	<h2>Book Now</h2>
  </div>
	
  <form method="post" action="booking.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="Name" >
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="Address" >
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="tel" name="Phone" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="Email" >
  	</div>
      <div class="input-group">
      <label>Booking Date</label>
      <input type="date" name="date" id="txtdate" >
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="booked">Book</button>
  	</div>
  
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <img src="images/footer.jpg"width="1340px" height="200px">
</body>
</html>
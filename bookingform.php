<?php 
     require './includes/session.php';
     $email = $_SESSION['email'];
     require './includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link href="https://unpkg.com/pattern.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link rel="stylesheet" href="./Asset/Style.css">
	<link rel="stylesheet" href="./Asset/siginup.css">
</head>
<body>
<?php 
     include_once 'header.php';
?>	  
<?php 
     $query = "SELECT * FROM `users` WHERE user_email='$email'";
     $result = mysqli_query($conn, $query) or die();
     $rows = mysqli_fetch_array($result);
 if(count($rows) >= 1){
   $instructor = $rows['instructor'];
   $plan = $rows['plan'];
     $form = '<section class="main-container3">
     <div class="main-wrapper">
	    <h2>BooK Apointment</h2>
		<form class="signup-form" action="./includes/booking.php" method="POST" >
           <div class="form-input-container">
                <label>
                    Email
                </label>
                <input type="email" name="email" value="'.$email.'" readonly placeholder="plan" required>
            </div>
		    <div class="form-input-container">
                <label>
                    Selected Plan
                </label>
                <input type="text" name="plan" value="'.$plan.'" readonly placeholder="plan" required>
            </div> 
            <div class="form-input-container">
            <label>
                Select Date
            </label>
            <input type="date" name="date" placeholder="Select a date" required>
        </div>
        <div class="form-input-container">
        <label>
            Select Time
        </label>
        <input type="time" name="time" placeholder="Time" required>
    </div>
    <div class="form-input-container">
    <label>
        Instructor Name
    </label>
    <input type="text" value="'.$instructor.'" name="trainer" readonly placeholder="Trainer" required>
</div>
	 	    <button type="submit" name="active-booking">Book Apointment</button>
	    </form>
	 </div>	

</section>';
echo $form;
 }
?>

</body>
</html>
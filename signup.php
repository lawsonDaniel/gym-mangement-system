<?php
require './includes/signup.php';
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
<section class="main-container2">
     <div class="main-wrapper">
	    <h2>signup</h2>
		<?php 
			submit();
		?>
		<form class="signup-form" action="" method="POST" >
	<div class="form-input-container">
		<label>First Name</label>
		<input type="text" name="first" placeholder="firstname" required>
	</div>
			<div class="form-input-container">
				<label>Last Name</label>
				<input type="text" name="last" placeholder="lastname" required>
			</div>
			<div class="form-input-container">
				<label>Email</label>
				<input type="email" name="email" placeholder="e-mail" required>
			</div>
			<div class="form-input-container">
				<label>User Name</label>
				<input type="text" name="uid" placeholder="username" required>
			</div>
			<div class="form-input-container">
				<label>
					password
				</label>
				<input type="password" name="pwd" placeholder="password" required>
			</div>
			<div class="form-input-container">
				<label>
					Confirm Password
				</label>
				<input type="password" name="cpwd" placeholder="confirm password" required>
			</div>
	 	    <button type="submit" name="submit">sign up</button>
	    </form>
	 </div>	

</section>
</body>
</html>
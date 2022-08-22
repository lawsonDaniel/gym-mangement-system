<?php
session_start();
require './includes/login.inc.php'
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
<section class="main-container">
     <div class="main-wrapper">
	    <h2>signin</h2>
		<?php 
			submit()
		?>
		<form class="signup-form" action="" method="POST" >
			<div class="form-input-container">
			<label for="email">Enter your Email</label>
			<input id="email" type="text" name="email" placeholder="e-mail">
			</div>
			<div class="form-input-container">
			<label for="password">Enter your Password</label>
			<input type="password" name="pwd"  id="password" placeholder="password">
			</div>
	 	    <button type="submit" name="submit">sign in</button>
	    </form>
	 </div>	

</section>
</body>
</html>
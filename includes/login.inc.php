<?php 
	function submit(){
		if (isset($_POST['submit'])) {
			include_once './includes/dbh.inc.php';
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$pwd = mysqli_real_escape_string($conn, $_POST['pwd'])  ;
		
			if(strlen($email)  >1 || strlen($pwd)  >1){
				if(strlen($pwd) <6){
					$error = "<div  style='    color: red;
					font-size: 23px;
					font-family: Bangers;
					letter-spacing: 2px;
					background: black;
					width: 363px;
					padding: 5px;
				'>Password should be greater than 6 digits</div>";
					echo $error;
				}else{
					// check if the email 
					$query    = "SELECT * FROM `users` WHERE user_email='$email'
					AND user_pwd='" . md5($pwd) . "'";
				$result = mysqli_query($conn, $query) or die();
				$rows = mysqli_num_rows($result);
				if($rows >= 1){
					header("Location: ./veiwbookings.php");
					$_SESSION['is_logged_in'] = true;
					$_SESSION['email'] = $email;
				}else{
					$error = "<div style='    color: red;
					font-size: 23px;
					font-family: Bangers;
					letter-spacing: 2px;
					background: black;
					width: 363px;
					padding: 5px;
				'>Incorrect Username or password.</div><br/> ";
					echo $error;
		}
				}
			}else{
				$error = "<div  style='    color: red;
				font-size: 23px;
				font-family: Bangers;
				letter-spacing: 2px;
				background: black;
				width: 363px;
				padding: 5px;
			'>Please Fill the form field</div>";
				echo $error;
			}
			
		}
	}
?>
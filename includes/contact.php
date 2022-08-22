<?php 

        require './dbh.inc.php';
        if(isset($_POST['contact']))
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
    
        $query = "INSERT INTO `message` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
        $results = mysqli_query($conn,  $query) or die();
        if($results){
            echo "<h1> Message Sent</h1>";
        }else{
            echo "<h1> An Error Occured</h1>";
        }
?>
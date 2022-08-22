<?php 
    function submit(){
        if (isset($_POST['submit'])) {
            include_once './includes/dbh.inc.php';
            
            $first = mysqli_real_escape_string($conn, $_POST['first']);
            $last = mysqli_real_escape_string($conn, $_POST['last']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $uid = mysqli_real_escape_string($conn, $_POST['uid']);
            $pwd = mysqli_real_escape_string($conn, $_POST['pwd'])  ;
            $cpwd =  mysqli_real_escape_string($conn, $_POST['cpwd'])  ;
           

            if(strlen($first) > 1 || strlen($last) >1 || strlen($email)  >1 || strlen($uid)  >1 || strlen($pwd)  >1 || strlen($cpwd)  >1 ){
                // Validate password strength
                $uppercase = preg_match('@[A-Z]@', $pwd);
                $lowercase = preg_match('@[a-z]@', $pwd);
                $number    = preg_match('@[0-9]@', $pwd);
                $specialChars = preg_match('@[^\w]@', $pwd);

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
                    $error = "<div  style='    color: red;
                    font-size: 23px;
                    font-family: Bangers;
                    letter-spacing: 2px;
                    background: black;
                    width: 363px;
                    padding: 5px;
                '>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
                echo $error;
                }else{
                    if($pwd === $cpwd){
                            // check if the email 
                            $query = "SELECT * FROM `users` WHERE user_email='$email'";
                            $result = mysqli_query($conn, $query) or die();
                            $rows = mysqli_num_rows($result);
                        if($rows >= 1){
                            $error = "<div style='color: red;
                            font-size: 23px;
                            font-family: Bangers;
                            letter-spacing: 2px;
                            background: black;
                            width: 363px;
                            padding: 5px;
                        '>User already exists  <a href='./login.php'>Login</a></div><br/> ";
                            echo $error;
                        }else{
                                   
                            $query    = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first', '$last', '$email','$uid','" . md5($pwd) . "')";
                    $results   = mysqli_query($conn, $query);
                    if ($results) {
                        echo "<divstyle='    color: green;
                        font-size: 23px;
                        font-family: Bangers;
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>
                                <div>You have registered successfully.</div>
                                <a href='./login.php'>Login</a>
                                </div>";
                    } else{
                            echo "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>An error occured</div>";
                    }
    
                }
                    }else{
                        $error = "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>Password and confirm password does not match</div>";
                    echo $error;
                    }
                }
            }else{
                $error = "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
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
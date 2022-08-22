<?php 

            session_start();
            $email = $_SESSION['email'];
            require './dbh.inc.php';
            // chose plan
            if(isset($_POST['spinning'])){
                $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
                $result = mysqli_query($conn, $query) or die();
                $rows = mysqli_num_rows($result);
                if($rows > 0){
                    $query    = "UPDATE `users` SET `plan` = 'spinning' WHERE `users`.user_email = '$email'";
                    $results =mysqli_query($conn, $query);
                    if(!$results){
                        echo "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>An error occured</div>";
                    }else{
                        header("location: ../choseinstructor.php");
                    }
                }else{
                    header("location: ../Error.php");
                }
                
        }elseif(isset($_POST['aerobics'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `plan` = 'Aerobics' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../choseinstructor.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif(isset($_POST['personal-training'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `plan` = 'Personal Training ' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../choseinstructor.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif (isset($_POST['burn-out-dance'])) {
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
                $result = mysqli_query($conn, $query) or die();
                $rows = mysqli_num_rows($result);
                if($rows > 0){
                    $query    = "UPDATE `users` SET `plan` = 'Burn Out Dance' WHERE `users`.user_email = '$email'";
                    $results =mysqli_query($conn, $query);
                    if(!$results){
                        echo "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>An error occured</div>";
                    }else{
                        header("location: ../choseinstructor.php");
                    }
                }else{
                    header("location: ../Error.php");
                }
        }elseif(isset($_POST['boxing'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `plan` = 'Boxing' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../choseinstructor.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif(isset($_POST['gym-equipment'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `plan` = 'Gym Equipment' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../choseinstructor.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }

        // select trainer 
    if (isset($_POST['john-doe'])) {
        $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
        $result = mysqli_query($conn, $query) or die();
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            $query    = "UPDATE `users` SET `instructor` = 'john doe' WHERE `users`.user_email = '$email'";
            $results =mysqli_query($conn, $query);
            if(!$results){
                header("location: ../Error.php");
            die();
            }else{
                header("location: ../bookingform.php");
            }
        }else{
            header("loc");
        }
        }elseif(isset($_POST['peter-james'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `instructor` = 'peter james' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../bookingform.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif (isset($_POST['daniel-lawson'])) {
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `instructor` = 'Daniel Lawson' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../bookingform.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif (isset($_POST['niyi-emma'])){
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `instructor` = 'niyi emma' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../bookingform.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }elseif (isset($_POST['jon-snow'])) {
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
        $result = mysqli_query($conn, $query) or die();
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            $query    = "UPDATE `users` SET `instructor` = 'jon snow' WHERE `users`.user_email = '$email'";
            $results =mysqli_query($conn, $query);
            if(!$results){
                header("location: ../Error.php");
            die();
            }else{
                header("location: ../bookingform.php");
            }
        }else{
            header("location: ../Error.php");
        }
        }elseif (isset($_POST['moses-jjk'])) {
            $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $query) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $query    = "UPDATE `users` SET `instructor` = 'moses jjk' WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                }else{
                    header("location: ../bookingform.php");
                }
            }else{
                header("location: ../Error.php");
            die();
            }
        }
   if(isset($_POST['active-booking'])){
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    if(isset($date) && isset($time)){
        $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    if(isset($date) && isset($time)){
             // check if the user has booked an appointment before
             $querys = "SELECT * FROM `booking` WHERE user='$email'";
             $resultss = mysqli_query($conn, $querys) or die();
             $rowsarr = mysqli_fetch_array($resultss);
             if($rowsarr == null){
                // getting values from the user table
                $querys = "SELECT * FROM `users` WHERE user_email='$email'";
                $resultss = mysqli_query($conn, $querys) or die();
                $rowsarr = mysqli_fetch_array($resultss);
                 // getting values from the user table
                 $querys = "SELECT * FROM `users` WHERE user_email='$email'";
                 $resultss = mysqli_query($conn, $querys) or die();
                 $rowsarr = mysqli_fetch_array($resultss);
                        if(count($rowsarr) >= 1){
                        $instructor = $rowsarr['instructor'];
                        $plan = $rowsarr['plan'];
                        $time = $rowsarr['ap_time'];
                        $date = $rowsarr['ap_date'];
                       
                        $user = $rowsarr['user_email'];
                             // setting the users info into the booking table
                        $bookingquery = "INSERT INTO `booking` (`plan`, `user`, `time`, `date`, `instructor`, `isactive`)
                        VALUES ('$plan', '$user', '$time', '$date', '$instructor', '1')";
                            $bookingresults = mysqli_query($conn,  $bookingquery) or die();
                            if( $bookingresults){
                                header("location: ../veiwbookings.php");
                            }else{
                                echo "error";
                            }
                        }
               
               }else{
                //give an error to the user that there is an active task
                
                if(count($rowsarr) >= 1 && $rowsarr['isactive'] == 1){
                    header("location: ../activebooking.php");
            }else{
                $date = mysqli_real_escape_string($conn, $_POST['date']);
                $time = mysqli_real_escape_string($conn, $_POST['time']);
                $query  = "UPDATE `users` SET `active` = '1', `ap_date` = '$date', `ap_time` = '$time'  WHERE `users`.user_email = '$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    header("location: ../Error.php");
                die();
                }else{
                    // getting values from the user table
                $querys = "SELECT * FROM `users` WHERE user_email='$email'";
                $resultss = mysqli_query($conn, $querys) or die();
                $rowsarr = mysqli_fetch_array($resultss);
                       if(count($rowsarr) >= 1){
                       $instructor = $rowsarr['instructor'];
                       $plan = $rowsarr['plan'];
                       $time = $rowsarr['ap_time'];
                       $date = $rowsarr['ap_date'];
                       
                       $user = $rowsarr['user_email'];
                            // setting the users info into the booking table
                       $bookingquery = "UPDATE `booking` SET `plan` = '$plan', `time` = '$time', `date` = '$date', `instructor` = '$instructor', `isactive` = '1'
                        WHERE `booking`.user = '$email'";
                           $bookingresults = mysqli_query($conn,  $bookingquery) or die();
                           if( $bookingresults){
                            header("location:  ../veiwbookings.php");
                           }else{
                               echo "error";
                           }
                       }
                }
               
                 
            }
        }
    
    }else{
        header("locatio: ../Error.php");
    die();
    }
    }
}
   
   if(isset($_POST['cancle-booking'])){
    $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $query) or die();
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $query    = "UPDATE `users` SET `active` = '0' WHERE `users`.user_email = '$email'";
        $results =mysqli_query($conn, $query);
        if(!$results){
            header("loc");
        }else{
            //select the boking table as to update the booing table
            $querys = "SELECT * FROM `booking` WHERE user='$email'";
            $result = mysqli_query($conn, $querys) or die();
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                // make task inactive
                $query    = "UPDATE `booking` SET `isactive` = '0'  WHERE user='$email'";
                $results =mysqli_query($conn, $query);
                if(!$results){
                    echo "<div  style='    color: red;
                        font-size: 23px;
                        font-family: 'Bangers';
                        letter-spacing: 2px;
                        background: black;
                        width: 363px;
                        padding: 5px;
                    '>An error occured</div>";
                }else{
                    header("location:  ../veiwbookings.php");
                }
            }
           
        }
    }else{
        header("location: ../Error.php");
    die();
    }
   }
   if(isset($_POST['update-booking'])){
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    if(isset($date) && isset($date)){
        $query    = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $query) or die();
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        $query    = "UPDATE `users` SET `ap_date` = '$date', `ap_time` = '$time' WHERE `users`.user_email = '$email'";
        $results =mysqli_query($conn, $query);
        if(!$results){
            header("loc");
        }else{
            $query  = "UPDATE `booking` SET `time` = '$time', `date` = '$date' WHERE `booking`.user = '$email' AND isactive = '1'";
            $results =mysqli_query($conn, $query);
            if(!$results){
                header("location: ../Error.php");
            die();
            }else{
                header("location:  ../veiwbookings.php");
            }
           
        }
    }else{
        header("location: ../Error.php");
    die();
    }
    }
   }
?>
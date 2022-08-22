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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./Asset/Style.css">
    <link rel="stylesheet" href="./Asset/dashboard.css">
    <link rel="stylesheet" href="./Asset/siginup.css">
    
    <title>Document</title>
</head>
<body>
    <?php
        include_once('./header.php')
    ?>
    <main>
        <section class="dashboard">
           <?php
                include_once('./fragment/sidebar.php')
           ?>
            <div class="main4">
                <?php 
                   $query = "SELECT * FROM `booking` WHERE user='$email'";
                   $result = mysqli_query($conn, $query) or die();
                   $rows = mysqli_fetch_array($result);
              if($rows == null){
                echo 'no active task';                   $task = ' <div class = "taskcontainer">
                <div class = "taskcard">
                  <div class = "taskimage">
                    <img href = "#" src ="./images/c7.jpg">
                  </div>
                  <div class = "taskcontent">
                    <h3>No available booking</h3>
                    <a href="./selectplans.php">Select Plan</a>
                  </div>
                </div>    
              </div>';
              echo $task;
              }else{
                if(count($rows) >= 1){
                  $instructor = $rows['instructor'];
                  $plan = $rows['plan'];
                  $date = $rows['date'];
                  $time = $rows['time'];
                  $active = $rows['isactive'];
 
                  if($active != 1){
                     echo 'no active task';                   $task = ' <div class = "taskcontainer">
                     <div class = "taskcard">
                       <div class = "taskimage">
                         <img href = "#" src ="./images/c7.jpg">
                       </div>
                       <div class = "taskcontent">
                         <h3>No available booking</h3>
                         <a href="./selectplans.php">Select Plan</a>
                       </div>
                     </div>    
                   </div>';
                   echo $task;
                  }else{
                    $task = ' <div class = "taskcontainer">
                    <div class = "taskcard">
                      <div class = "taskimage">
                        <img href = "#" src ="./images/c7.jpg">
                      </div>
                      <div class = "taskcontent">
                        <h3>Veiw Booking</h3>
                        <div class="form-input-container">
                        <label>
                            Selected Plan
                        </label>
                        <input style="    font-size: 18px;
                         padding: 5px;
                         border: 0;
                         background: #000;
                         color: #fff;
                         border-radius: 5px;" type="text" name="plan" value="'.$plan.'" readonly placeholder="plan" required>
                    </div>
                    <div class="form-input-container">
                    <label>
                    Selected Date
                    </label>
                    <input style="    font-size: 18px;
                         padding: 5px;
                         border: 0;
                         background: #000;
                         color: #fff;
                         border-radius: 5px;" type="text" name="plan" value="'.$date.'" readonly placeholder="plan" required>
                </div>
                <div class="form-input-container">
                <label>
                    Selected Time
                </label>
                <input style="    font-size: 18px;
                         padding: 5px;
                         border: 0;
                         background: #000;
                         color: #fff;
                         border-radius: 5px;" type="text" name="plan" value="'.$time.'" readonly placeholder="plan" required>
            </div>
             <div class="form-input-container">
                 <label>
                     Selected instructor
                 </label>
                 <input style="    font-size: 18px;
                         padding: 5px;
                         border: 0;
                         background: #000;
                         color: #fff;
                         border-radius: 5px;" type="text" name="plan" value="'.$instructor.'" readonly placeholder="plan" required>
             </div>
             <br/>
             <form action="./includes/booking.php" method="post">
             <button name="cancle-booking" style="border: none;
             outline: none;
             background: red;
             /* height: 50px; */
             color: #fff;
             font-family: Bangers, cursive;
             letter-spacing: 2px;
             padding: 10px;
             margin: auto;
             font-size: 20px;">Cancle booking</button>
             </form>
                      </div>
                    </div>    
                  </div>';
                  echo $task;
                  }
                }
              }
               
                ?>
            </div> 
        </section>
    </main>
    
</body>
</html>
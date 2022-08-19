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
</head>
<body>
  <header>
      <div class="logo">LOGO</div>
      <nav>
          <ul>
              <li><a class="active" href="#">Home</a></li>
              <li class=""><a href="#about">About</a></li>
              <li class=""><a href="#contact">Contact</a></li>
          </ul>
          <ul>
              <li><a class="active" href="./login.php">Login</a></li>
              <li><a class="button" href="./signup.php">Sign Up</a></li>
          </ul>
      </nav>
  </header>
  <main>
      <section id="jumbotron">
          <div class="jumbotron-header">
           <h1> <span>Transform</span> <br/> Your Body</h1>
           <div class="jumbotron-p">We help you to create the shape of your <br/> body and stay healthy</div>
           <a class="jumbotron-button" href="./signup.php">Sign Up</a>
          </div>
          <div class="jumbotron-img ">
          <img src="./images/sit.jpg"/>
          </div>
      </section>
      <section class="about" id="about">
          <div class="about-header">About Us</div>
          <div class="about-content">
            <div class="about-img pattern-diagonal-lines-sm gray-lighter"></div>
            <div class="about-content-container">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas consequuntur temporibus eius
               dolore sunt ad obcaecati quaerat non ex nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolorem nihil officia libero, cupiditate ipsam, illo quaerat ullam voluptates laborum ipsa pariatur, officiis natus? Eaque sit et dolores cum laboriosam doloribus nihil, cumque,
                officiis harum corporis explicabo eum, aut tenetur!</p>
               <div class="about-btn-container ">
            <a href="#" class="about-btn ">Sign Up</a>
            <span class="material-symbols-outlined">
              chevron_right
              </span>
          </div>
            </div>
            </div>
          </div>
      </section>
      <section id="contact">
      <h1 class="section-header">Contact</h1>
      <div class="contact-wrapper">
      
      <!-- Left contact page --> 
        
        <form id="contact-form" class="form-horizontal" role="form">
          
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
            </div>
          </div>

          <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
          
          <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
            <div class="alt-send-button">
              <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
            </div>
          
          </button>
          
        </form>
        
      <!-- Left contact page --> 
        
        
        
      </div>
  
</section>  
  
  
  </main>
</body>
</html>
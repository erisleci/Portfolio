<?php
  require_once "controllers/contactMeController.php";

  $contact = new contactMe();
  
  if(isset($_POST['submit'])) {
    $contact->insert($_POST);
    
  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" />
  <title></title>
</head>

<body>
  <header>
  <?php
      if(isset($_POST['submit'])) {
        if(strpos($contact->message,'sent')) {
          echo '<div id="error-message" class="alert alert-success" role="alert">'.$contact->message.'
      </div>';
        }else {
          echo '<div id="error-message" class="alert alert-danger" role="alert">
          '.$contact->message.'
        </div>';
        }
      }
    ?>
    <main>
      
      <div class="main-left">
        <h2>Hi, I am Eris Leci</h2>
        <h1>I am a Web Developer</h1>
        <div class="main-buttons">
          <a href="#about-me">About me</a>
          <a href="#work-section">My Work</a>
        </div>
      </div>
      <div class="main-right">
        <div class="icons-container">
          <div class="outer-circle" id="first-icon">
            <div class="mid-circle">
              <div class="inner-circle">
                <div class="icon-content">
                  <a href="#contact-form"><img src="./images/call.svg" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="outer-circle" id="second-icon">
            <div class="mid-circle">
              <div class="inner-circle">
                <div class="icon-content">
                  <img src="./images/email (1).png" />
                </div>
              </div>
            </div>
          </div>
          <div class="outer-circle">
            <div class="mid-circle">
              <div class="inner-circle">
                <div class="icon-content" id="pin-icon">
                  <a href="https://www.google.com/maps/place/Pristina" target="_blank"><img src="./images/pin.png" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="photo-container">
          <div class="outer-circle photo-circle">
            <div class="div mid-circle photo-circle">
              <div class="div inner-circle photo-circle" id="photoo">
                <img src="images/erisi_profile-removebg-preview.png" width="220px" height="300px" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="main-footer">
      <h1>Welcome to my portfolio!</h1>
    </div>
  </header>



  <div class="about-me" id="about-me">
    <div class="about-me-content">
      <h2>About me</h2>
      <p>A hardworking person with a deep interest in computer science through practical work and problem solving. I am
        a fast learner who dedicates my time to the study of new programming languages and want to continuously
        challange myself in a work environment. I am a strong contributor in group work and enjoy the sharing of ideas
        and approaches to tasks</p>
      <div class="skills-section">
        <div class="left-skills-section">
          <div class="skill-item">
            <h2>HTML</h2>
            <span class="black-dot">&nbsp;</span>
          </div>
          <div class="skill-item">
            <h2>CSS</h2>
            <span class="black-dot">&nbsp;</span>
          </div>
          <div class="skill-item">
            <h2>BOOTSTRAP</h2>
            <span class="black-dot">&nbsp;</span>
          </div>
          <div class="skill-item">
            <h2>JAVASCRIPT</h2>
            <span class="black-dot">&nbsp;</span>
          </div>
        </div>
        <div class="mid-skills-section">
          <h4 id="skills-text">Skills</h4>
        </div>
        <div class="right-skills-section">
          <div class="skill-item">
            <span class="black-dot">&nbsp;</span>
            <h2>PHP</h2>
          </div>
          <div class="skill-item">
            <span class="black-dot">&nbsp;</span>
            <h2>SQL</h2>
          </div>
          <div class="skill-item">
            <span class="black-dot">&nbsp;</span>
            <h2>JAVA</h2>
          </div>
          <div class="skill-item">
            <span class="black-dot">&nbsp;</span>
            <h2>GIT</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="work-section" id="work-section">
    <div class="work-section-content">

      <div class="projects-container">
        <div class="web-project">
          <h2>Web Project</h2>
          <div class="project-content" id="project1">
            <div class="project-details">
              <h2>News Portal</h2>
              <h5>HTML / CSS / JAVASCRIPT / PHP / MYSQL</h5>
              <button id="webAppBtn">Find out more</button>
            </div>
          </div>
        </div>
        <div class="web-project">
          <h2>Desktop Application</h2>
          <div class="project-content" id="project2">
            <div class="project-details">
              <h2>Food Delivery POS</h2>
              <h5>JAVA / JAVA SWING / SQL</h5>
              <button id="desktopAppBtn">Find out more </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popup-section">
    <div class="detailed-project-section" id="project-1">
      <span class="close-button">X</span>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/project1-1.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/project1-2.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/project1-3.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="project-info">
        <h2>News Portal</h2>
        <h6>HTML / CSS / JAVASCRIPT / PHP / MYSQL</h6>
        <hr />
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it look like readable English.</p>
      </div>

    </div>
    <div class="detailed-project-section" id="project-2">
      <span class="close-button">X</span>
      <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/project2-1.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/project2-2.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/project2-3.png" style="height: 400px !important; opacity: 1;" class="d-block w-100"
              alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="project-info">
        <h2>Food Delivery POS</h2>
        <h6>JAVA / JAVA SWING / SQL</h6>
        <hr />
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it look like readable English.</p>
      </div>

    </div>
  </div>




  <div class="contact-me">
    
    <h1>Drop me a message!</h1>
    <form id="contact-form" method="POST">

      <input name="name" id="name" type="text" placeholder="Name:">

      <input name="email" id="email" type="email" placeholder="Email:">

      <textarea rows="10" name="message" id="message" placeholder="Your message:"></textarea>

      <button id="submit" name=" submit">Submit</button>
    </form>

  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script src="./scripts/scripts.js"></script>


</body>

</html>
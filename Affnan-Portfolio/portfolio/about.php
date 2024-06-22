<!DOCTYPE html>
<html lang="en">

<?php include 'header.php' ?>

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="Portfolio-Affnan">
  <meta name="author" content="Affnan makandar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
 
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- end -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="stylee.css"> 
</head>

<body>
  <div class="container">
    <div class="row text-center mt-5">
        <div class="col-md-12">
            <h1 class="about-txt">About Me</h1>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center" id="resume">
          My Name is Affnan. I have 4 months of experience in software engineering, eager to contribute to other projects and also gain hands-on experience in tech companies with my innovative skills such as web development and logical building in HTML, CSS, frontend and backend JavaScript, PHP, MySQL, C++, C, and Java. Currently, I am a learner, having outsourcing skills in advanced Excel, Word, and a typing speed of 30 wpm. One of the best things about me is that I am a learner; I learn new things so I can solve problems easily. I merely want to learn a lot of things in the future.
          <br>
        </p>       
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-5">
        <h4 class="text-center pro-txt">Featured Projects</h4>
        <p class="text-center" id="resume">I am currently working on improving my front-end skills.</p>
      </div>
      <div class="col-md-4 ">
        <img src="img/firstweb.webp" class="mt-3 img-fluid" id="resume_img" alt="Affnan-portfolio-img">
      </div>
      <div class="col-md-4">
        <img src="img/firstweb2.webp" class="mt-3 img-fluid" id="resume_img" alt="Affnan-portfolio-img">
      </div>
      <div class="col-md-4">
        <img src="img/firstweb3.webp" class="mt-3 img-fluid" id="resume_img" alt="Affnan-portfolio-img">
      </div>
      <div class="col-md-12 mt-5 me-1  py-2 text-center view more">
        <a href="featured_projects.php">
          <button id="resume1" >
            <span class="text">View more</span>
          </button>
        </a>
      </div>
    </div>
  </div>
  <!-- counter start -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script>
    // Wait for the page to load
    window.onload = function () {
      // Delay the animation by a short time to allow elements to render first
      setTimeout(function () {
        // Add class to trigger animation
        document.querySelector('.myimg').classList.add('animate');
      }, 100);
    };
  </script>
  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <footer>
    <div class="container">
      <div class="col-md-12 mt-4">
        <h5 class="text-center footer">Copyright 	&#169; Affnan-portfolio</h5>
      </div>
    </div>
  </footer>
</body>
</html>

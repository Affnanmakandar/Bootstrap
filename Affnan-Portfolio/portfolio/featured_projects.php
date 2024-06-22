<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured projects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="stylee.css"> 
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <h1 class="text-center" id="featured_header">About - Featured Projects</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 p-3 px-3">
            <img src="./img/firstweb.webp" class="mt-4  ms-2 keto_pro">
        </div>
        <div class="col-lg-6 col-md-6 mt-2 p-3 py-5">
            <p>This is my first ever frontend keto meal plan website project and is fully responsive which I created using
                php bootstrap css and html and used database as backend to store any users information.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-5 p-5 px-2" >
           <img src="./img/firstweb2.webp" alt="" class="ms-2 ">
        </div>
        <div class="col-lg-6 col-md-6 mt-2 p-3 py-5">
            <p>Created an e-commerce website as a demo for practice and also created an admin panel to make changes of images name and details of the product
                which has only accessible to admin to make changes
                I used mysql and also created a contact form of user profile whenever user logins it stores the users add to cart information of which he purchases the product .
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 p-5 px-2" >
           <img src="./img/firstweb3.webp" alt="" class="ms-2 ">
        </div>
        <div class="col-lg-6 col-md-6 mt-2 p-3 py-5">
            <p>A personal portfolio website of mine about my work experiences and projects that I created using 
                php bootstrap html css  and in this project I used media queries to adjust website which fits according to all the screen sizes.
            </p>
        </div>
        <div class="col-md-12 mt-5 col-sm-5 view text-center">
        <a href="https://github.com/Affnanmakandar/">
          <button id="resume1" >
            <span class="text ">Load more</span>
          </button>
        </a>
      </div>
    </div>
</div> 
<footer>
        <div class="container mt-5">
            <div class="col-lg-12 ">
                <h5 class="text-center footer">Copyright 	&#169; Affnan makandar portfolio</h5>
            </div>
        </div>
    </footer>
</body>
</html>

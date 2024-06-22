<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Font Awesome CSS -->
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
            <div class="col-lg-12 text-center">
                <img src="img/affnan-profile2.webp" id="profile_3" alt="Affnan's Profile Picture">
                <h5 class="mt-3"><span id="touch">Get in Touch</span></h5>
                <p class="parra">Please fill out the contact form for any queries or to contact me. <br>
                    your data will be secured and be submitted to us automatically
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto ">
                <h4 class="text-center">Contact Form</h4>
            
                <form id="myform" action="./connection.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="firstname" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"  >Submit</button>

                </form>
            </div>
        </div>
        <footer class="mt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="footer">Copyright 	&#169; Affnan-portfolio</h5>
                </div>
            </div>
        </footer>
    </div>
    <script>
         document.getElementbyId("myform").addEventListener("submit", function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Display alert message
        alert("Thank you for your response");

        // You can optionally reset the form after submission
        // this.reset();
    });

    </script>
</body>
</html>

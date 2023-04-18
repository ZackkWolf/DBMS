<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

  body {
    text-align: center;
	background-image: linear-gradient(to top, #ffffff, #fefefe);
    /* background-color: #f1f1f1; */
    font-family: Sans, Arial, Helvetica, sans-serif;
  }


		h1 {
			text-align: center;
			margin-top: 50px;
		}
        h2 {
			
		}
		p{
			text-align: center;
			margin-top: 50px;
			
		}
		.slideshow-container {
			align-items: center;
			width: 100%; /* Change the width of the slide */
			height: 600px; /* Change the height of the slide */ /* Change the maximum width of the slideshow */
			position: relative;
			margin: 0;
		}

		.mySlides {
			display: none;
			width: 100%; /* Change the width of the slide */
			height: 600px; /* Change the height of the slide */
		}
		.slideshow {
			position: relative;
			width: 100%;
			height: 600px;
		}
		.slideshow img {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: 0;
			max-width: 100%;
			max-height: 100%;
		}
		.slide {
			-webkit-animation: fade 3s;
			animation: fade 3s;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
		}
		@-webkit-keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
		}
		@keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
		}

		</style>
	<!-- /* <link  rel="stylesheet" href="home.css"> */ -->
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="student_home.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alumni_home.php">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="company_home.php">Company</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="query.php">Queries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login_company.php">Login</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

    <div class="container registration-container">
    <h1>Register as a Company</h1><br><br><br>
        <form action="reg_comp.php" method="post">
            <div class="form-group">
                <label for="Name">Company Name</label>
                <input type="text" id="username" name="Name" class="form-control" placeholder="Company Name">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="email" name="Email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                    placeholder="Confirm Password">
            </div>
            <?php
             if(isset($_SESSION['error'])){
                $error_msg = $_SESSION['error'];
                echo("<center><p style='color:red'>$error_msg</p></center>");}
                ?>
            <!-- ?> -->
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #343a40; font-size:large">Register</button>
        </form>

        <p class="text-center mt-3">Already have an account? <a href="login_company.php">Login</a></p>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
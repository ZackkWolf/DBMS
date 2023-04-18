<!DOCTYPE html>
<html>
<head>
	<title>Update Stud Profile</title>
	
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
          <a class="nav-link" href="register_stud.php">Register</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<div class="container registration-container">
<h1>Update Profile </h1>

    

        <form  action ="login_stud_chk.php" method="post">
            <!-- after checking all details move it to index_after_login.php -->
            <div class="form-group1" style="padding-top:15px">
                <label for="name">Name</label>
                <input type="name" id="name" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="rollno">Roll No.</label>
                <input type="rollno" id="rollno" name="rollno" class="form-control" placeholder="RollNo">
            </div>  
            <div class="form-group1" style="padding-top:15px">
                <label for="branch">Branch</label>
                <input type="branch" id="branch" name="branch" class="form-control" placeholder="Branch">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="number">Number</label>
                <input type="number" id="number" name="number" class="form-control" placeholder="Number">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="gender">Gender</label>
                <input type="gender" id="gender" name="gender" class="form-control" placeholder="Gender">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="dob">Date of Birth</label>
                <input type="dob" id="dob" name="dob" class="form-control" placeholder="DoB">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="cpi">CPI</label>
                <input type="cpi" id="cpi" name="cpi" class="form-control" placeholder="CPI">
            </div>
            <div class="form-group1" style="padding-top:15px">
                <label for="interest">Interests</label>
                <input type="interest" id="interest" name="interest" class="form-control" placeholder="Interests">
            </div>

            
            
            <?php
            // if(isset('submit'));
            if(isset($_SESSION['error'])){
    $error_msg = $_SESSION['error'];
        echo("<center><p style='color:red'>$error_msg </p></center>");}
    ?>
            <?php
                    // if($error)
                    // echo("<center><p style='color:red'>$error !</p></center>");
            ?>
            <button type="submit" class="btn btn-primary btn-block" onClick="window.location.href='http://127.0.0.1:5500/index_after_login.php';"
                style="background-color: #343a40; font-size:large ; border-color: #88E05E">Submit</button>
        </form>
       
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    </html>
    
<!DOCTYPE html>
<html>
<head>
	<title>Alumni Home Page</title>
    <!-- <link  rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

body {
  text-align: center;
  background-color: #f1f1f1;
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
  /* form {
          text-align: center;
    background-color: #fff;
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
  }
  label {
    display: block;
    margin-top: 10px;
    font-size: 18px;
          
    font-weight: bold;
  }
  input[type="text"], input[type="password"] {

    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: lcfirst(5) solid;
    margin-bottom: 20px;
    box-sizing: border-box;
    font-size: 16px;
  }
  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    margin-top: 20px;
  }
  button[type="submit"]:hover {
    background-color: #3e8e41;
  } */
  </style>
</head>
<body>

	<!-- Navigation bar -->
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
          <a class="nav-link" href="query.php">Query</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login_stud.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register_stud.php">Register</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
	<?php
		// Set student details
		$name = "aa";
		$roll_no = '2001CS10';
		$branch = "";
		$email = "aa@example.com";
		$phone_no = "";
		$gender = "";
		$dob = "";

		// Set educational details
		$cgpa = 7.8;
		$backlogs = 0;
		$awards = [""];
        $interests = [""];

		// Set placement details
		$company = "";
		$ctc = 0;
		$year = 2022;

		// Display student details
		echo "<h1>$name's Profile</h1>";
		echo "<p><strong>Name:</strong> $name</p>";
		echo "<p><strong>Roll No.:</strong> $roll_no</p>";
		echo "<p><strong>Branch:</strong> $branch</p>";
		echo "<p><strong>Email:</strong> $email</p>";
		echo "<p><strong>Phone No.:</strong> $phone_no</p>";
		echo "<p><strong>Gender:</strong> $gender</p>";
		echo "<p><strong>Date of Birth:</strong> $dob</p>";

		// Display educational details
		echo "<div class='card'>";
		echo "<h2>Educational Details</h2>";
		echo "<p><strong>CGPA:</strong> $cgpa</p>";
		echo "<p><strong>Awards:</strong></p>";
		echo "<ul>";
		foreach ($awards as $award) {
			echo "<li>$award</li>";
		}
		echo "</ul>";
		echo "</div>";

		// Display placement details
		echo "<div class='card'>";
		echo "<h2>Placement Scenario</h2>";
		echo "<p><strong>Company:</strong> $company</p>";
		echo "<p><strong>CTC:</strong> $ctc</p>";
		echo "<p><strong>Year:</strong> $year</p>";
		echo "</div>";

        echo "<div class='card'>";
		echo "<h2>Interests</h2>";
		echo "<ul>";
		foreach ($interests as $interests) {
			echo "<li>$interests</li>";
		}
		echo "</ul>";
		echo "</div>";
	?>
	
</body>
</html>

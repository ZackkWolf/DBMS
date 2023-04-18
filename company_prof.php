<!DOCTYPE html>
<html>
<head>
	<title>Company Profile</title><link rel="stylesheet" href="student_prof.css" type="text/css">
	
    <!-- CSS styles for cards -->
	<style>
		.card {
		  background-color: #fff;
		  border-radius: 10px;
		  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
		  padding: 20px;
		  margin-bottom: 20px;
		}

		.card h2 {
			margin-top: 0;
			margin-bottom: 10px;
		}

		.card p {
			margin-top: 0;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<?php
		// Set student details
		$name = "Amazon";
		$roll_no = "123456";
		$branch = "Computer Science";
		$email = "johndoe@example.com";
		$phone_no = "+1 (123) 456-7890";
		$gender = "Male";
		$dob = "January 1, 2000";
$field = "Financial";
$site = "www.example.com";
		// Display Minimum qualification details
		$mincpi = 8.5;
        $salrange ="10 - 30 LPA";
        $MoI = "Offline";



		// Display Company details
		echo "<h1>$name's Profile</h1>";
		echo "<p><strong>Company Name:</strong> $name</p>";
		echo "<p><strong>Description of field:</strong> $field</p>";
		echo "<p><strong>Email</strong> $email</p>";
		echo "<p><strong>Company Website</strong> $site</p>";
		echo "<p><strong>Phone No.:</strong> $phone_no</p>";

		// Display Minimum qualification details
		echo "<div class='card'>";
		echo "<h2>Minimum Requirements</h2>";
        echo "<p><strong>Minimum CPI</strong> $mincpi</p>";
		echo "<p><strong>Salary Range</strong> $salrange</p>";
		echo "<p><strong>Mode of Initiative: </strong>$MoI</p>";
		echo "</div>";
      
	?>
</body>
</html>

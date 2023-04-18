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
       
      </ul>
    </div>
  </div>
</nav>
     <?php
    session_start();
    $person = $_SESSION['person'];
    if(!isset($_SESSION['logged_in'])){
        header("Location: home.php");
        exit();
    }
    ?> 
    
    <?php
        if($person=="student"){
        echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_after_login_stud.php">
                <img src="logo2.png" class="rounded-circle" height="70" background="white" />
            </a>
            <!-- <a class="navbar-brand" href="index.php"> -->
            <p class="fs-5 fw-light mb-0">
                Indian Institute <br>of Technology Patna
            </p>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto me-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index_after_login_stud.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="all_companies.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link active" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link" href="student_eligible.php">Check Eligibility </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LogOut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stud_account.php"><img src="profile.png" width="33px" /></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>');}
        else if($person == "alumni"){
        echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_after_login_alumni.php">
                <img src="logo2.png" class="rounded-circle" height="70" background="white" />
            </a>
            <!-- <a class="navbar-brand" href="index.php"> -->
            <p class="fs-5 fw-light mb-0">
                Indian Institute <br>of Technology Patna
            </p>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto me-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index_after_login_alumni.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_companies.php">Companies</a>
                    </li>
                    <li class="nav-item" style="color: aqua;">
                        <a class="nav-link active" href="stats.php">Prev Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alumni_account.php"><img src="profile.png" width="33px" /></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>');}
        else{
            echo('<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll">
            <div class="container-fluid">
                <a class="navbar-brand" href="index_after_login_comp.php">
                    <img src="logo2.png" class="rounded-circle" height="70" background="white" />
                </a>
                <!-- <a class="navbar-brand" href="index.php"> -->
                <p class="fs-5 fw-light mb-0">
                    Indian Institute <br>of Technology Patna
                </p>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto me-5 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index_after_login_comp.php">Home</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="all_companies.php">Companies</a>
                        </li>
                        <li class="nav-item" style="color: aqua;">
                            <a class="nav-link active" href="stats.php">Prev Stats</a>
                        </li>
                        <li class="nav-item" style="color: aqua;">
                            <a class="nav-link" href="company_eligible.php">Check Eligibility </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="company_account.php"><img src="profile.png" width="33px" /></a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>');
        }
    ?>
    
    <!-- navigation -->
    <div class="container">
        <?php
        ini_set('display_errors', 1);
        error_reporting(-1);
        ini_set('display_errors', 1);
        error_reporting(-1);
        $conn = mysqli_connect('localhost', 'root', 'Ashutosh@2003', 'db_project');
        // Check connection
        $company_name = $_POST['companyName'];
        $year = $_POST['year'];
        $ctc = $_POST['ctc'];
        $field = $_POST['field'];

        if($company_name == 'All' && $year == 'All' && $ctc=='All' && $field=='All'){
            $sql = "SELECT * FROM Company ";
        }
        else if($company_name == 'All' && $year == 'All' && $ctc=='All'){
            $sql = "SELECT * FROM Company where c_field = '$field'";
        }
        else if($company_name == 'All' && $year == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where ctc >= $ctc";
        }
        else if($company_name == 'All' && $ctc == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year";
        }
        else if($year == 'All' && $ctc == 'All' && $field=='All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name'";
        }
        else if($company_name == 'All' && $year == 'All'){
            $sql = "SELECT * FROM Company where ctc >= $ctc and c_field = '$field'";
        }
        else if($company_name == 'All' && $ctc == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and c_field = '$field'";
        }
        else if($company_name == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and ctc >= $ctc";
        }
        else if($year == 'All' && $ctc == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and c_field = '$field'";
        }
        else if($year == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and ctc >= $ctc";
        }
        else if($ctc == 'All' && $field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year";
        }
        else if($company_name == 'All'){
            $sql = "SELECT * FROM Company where recrting_since<= $year and ctc >= $ctc and c_field = '$field'";
        }
        else if($year == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and ctc >= $ctc and c_field = '$field'";
        }
        else if($ctc == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and c_field = '$field'";
        }
        else if($field == 'All'){
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and ctc >= $ctc";
        }
        else{
            $sql = "SELECT * FROM Company where Company_name = '$company_name' and recrting_since<= $year and ctc >= $ctc and c_field = '$field'";
        }

        // $sql = 'SELECT * FROM Company where Company_name = $company_name AND recrting_since<= $year and Ctc >= $ctc and c_field = $field;
        // $sql = 'SELECT * FROM Company ';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <div class="card">
            <div class="card-logo">
                <img src="https://via.placeholder.com/100" alt="Company Logo">
            </div>
            <div class="card-info">

                <div class="card-title">Company Name:<?=$row['Company_name'];?></div>
                <div class="card-field">CTC:<?=$row['ctc'];?></div>
                <div class="card-field">Field:<?=$row['c_field'];?></div>
                <div class="card-field">Recruting Since:<?=$row['recrting_since'];?></div>
            </div>
        </div>
        </br>
        <?php
            }
        } else {
            echo 'No results found';
        }
        
?>
        <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

    </html>
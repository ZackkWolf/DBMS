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

<div class="slideshow">
		<img class="slide" src="01.jpg" style="width:100%;height:100%;" alt="Slide 1">
		<img class="slide" src="001.jpg" style="width:100%;height:100%;"alt="Slide 2">
		<img class="slide" src="iii.jpg" style="width:100%;height:100%;"alt="Slide 3">
	</div>
	
	<script>
		var slideIndex = 0;
		showSlides();
		
		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slide");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1;
			}
			slides[slideIndex-1].style.display = "block";
			setTimeout(showSlides, 3000); // Change image every 3 seconds
		}
	</script>
	<h1>Welcome to Our Website</h1>
	<p>Welcome to the Student Placement Cell website, where we bridge the gap between students and the industry, creating opportunities for growth and success. Explore our programs and resources, and connect with our experienced team for personalized support to help you navigate the career development process.</p>


<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">INDIAN INSTITUTE OF TECHNOLOGY, PATNA</h2>
    <p class="w3-opacity"><i></i></p>
    <p class="w3-justify">Indian Institute of Technology (IIT) Patna is a premier engineering and technology institute located in the state of Bihar, India. Established in 2008, IIT Patna is one of the eight new IITs set up by the Ministry of Human Resource Development (MHRD) to meet the growing demand for skilled engineers in India. The institute offers undergraduate, postgraduate and doctoral programs in various fields of engineering, science and humanities. With state-of-the-art infrastructure, world-class faculty and a vibrant student community, IIT Patna is committed to providing high-quality education and research opportunities to its students, and contributing to the growth and development of the nation.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Prashik Wankhede</p>
        <img src="ash.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width: 230px;height:220px">
      </div>
      <div class="w3-third">
        <p>Areen Reddy</p>
        <img src="arr.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width: 230px;height:220px">
      </div>
      <div class="w3-third">
        <p>Faizal Hasham</p>
        <img src="f.jpg" class="w3-round" alt="Random Name" style="width: 230px;height:220px">
      </div>
      </div>
    </div>
  </div>

		<!-- The Contact Section -->
		<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
 
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margttom">
        <i class="fa fa-map-marker" style="width:30px"></i> Patna, Bihar<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +911234567890<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: tpc@iitp.ac.in<br>
      </div>
      
    </div>
  </div>


	<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 
</footer>
</body>


</html>

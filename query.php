<!DOCTYPE html>
<html>
<head>
	<title>Alumni Home Page</title>
    <!-- <link  rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        
       
      </ul>
    </div>
  </div>
</nav>

<head>
  <title>Query</title>
</head>
<body>

  <h1>Query</h1>
  <link rel="stylesheet" href="query.css">

  <form action="query_page.php" method="post">
    <label for="ctc"><b>CTC:</b></label>
    <select name="ctc" id="ctc">
      <option value="">-- Select CTC --</option>
      <option value="less than 5 lakhs">Less than 5 lakhs</option>
      <option value="5-10 lakhs">5-10 lakhs</option>
      <option value="10-20 lakhs">10-20 lakhs</option>
      <option value="more than 20 lakhs">More than 20 lakhs</option>
    </select>
    <br>


    <label for="year"><b>Year:</b></label>
    <select name="year" id="year">
      <option value="">-- Select Year --</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
    </select>
    <br>

    <label for="company"><b>Company:</b></label>
    <select name="company" id="company">
      <option value="">-- Select Company --</option>
      <option value="Google">Google</option>
      <option value="Microsoft">Microsoft</option>
      <option value="Amazon">Amazon</option>
      <option value="Facebook">Facebook</option>
    </select>
    <br>

    <label for="Branch"><b>Year:</b></label>
    <select name="branch" id="branch">
      <option value="select">-- Select Branch --</option>
      <option value="cse">CSE</option>
      <option value="aids">AIDS</option>
      <option value="mnc">MnC</option>
      <option value="eee">EEE</option>
    </select>
    <br>

    <label for="field"><b>Field:</b></label>
    <select name="field" id="interest">
      <option value="select">-- Select Field --</option>
      <option value="fin">Finance</option>
      <option value="dev">Dev.</option>
      <option value="it">IT</option>
    </select>
    <br>


    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>

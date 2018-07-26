<!DOCTYPE html>
<html>
<head>
	<title>Sign Up!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		
		<div class="container">
			<a href="/" class="logo">
				<img src="logo.jpg" alt="NSU E-magazine" id="nylogo">
			</a>
		</div>
		<div class="navbar" style="float:right;">
            <ul id="navItems" style="float:right;">
                <li><a class="active" href="index.html" style="float:right;">Log in</a></li>
                <!-- <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li> -->
            </ul>
        </div>


	</header>



<!-- PHP code for submitting Form strts here  -->
 	<?php 
		require ("persistent/DBinfo.php");
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		



		$db = connection();
		//echo ($db);
		if (isset($_POST['Submit'])){
			if (empty($_POST["fName"])) {
			    $nameErr = "Name is required";
			  } else {
			    $fName = $_POST['fName'];
			  }
			
			$lName = $_POST['lName'];
			$email = $_POST['email'];
			$nsuID = $_POST['nsuID'];
			$uName = $_POST['uName'];
			$pass  = md5($_POST["pass"]);
			$userType = $_POST['which'];
			$editor = 0;


			$sql = "INSERT INTO users (FNAME,LNAME,EMAIL,NSU_ID,UNAME,PASS,USER,EDITOR)
			values ('$fName','$lName','$email','$nsuID','$uName','$pass','$userType','$editor')";
			
			mysqli_query ($db,$sql);
		}



	 ?>

<!-- PHP code for submitting Form ends here -->



	<div id = formbox  align="center">


		<div id= "form">

			<h2> <br>Create account </h2>

			<p>
				Already have an account?
				<a href="index.html">Log in</a>
			</p>

			<div id= wrapper>

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				
				<table>
					
					<tr>
						<td>First name</td>
						<td>
							<input type="text" id="fName" name="fName">
						</td>

					</tr>


					<tr>
						<td>Last name</td>
						<td>
							<input type="text" id="lName" name="lName">
						</td>
					</tr>

					<tr>
						<td>Email</td>
						<td>
							<input type="text" id="email" name="email">
						</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>
							<input type="text" id="username" name="uName">
						</td>
					</tr>

					<tr>
						<td>Password</td>
						<td>
							<input type="password" id="pass" name="pass">
						</td>
					</tr>

					<tr>
						<td>Confirm password</td>
						<td>
							<input type="password" id="Cpass" name="cPass">
						</td>
					</tr>

					<tr>
						<td>NSU ID:</td>
						<td>
							<input type="text" id="Uid" name="nsuID">
						</td>
					</tr>

					<tr>
						<td>Be a :</td>
						<td>
							<form align ="left">
							<input type="radio" name="which" value="writer" checked> User<br>
		  					<input type="radio" name="which" value="editor">Editor<br>
		  					</form>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" type="submit" name="Submit" value="Sign Up" >
						</td>
					</tr>

				</table>


			</form>
			</div>

		</div>

	</div>


	<footer align="center">
		<div class="copyright">
			<a href="www.google.com">© 2018 NSU E-magazine</a>
		</div>
		<div class="helpfulLinks">
			<ul>
				<li><a href="www.google.com">Help</a></li>
				<li><a href="www.google.com">Feedback</a></li>
			</ul>
		</div>
		<div class="socialLinks">
			<ul>
				<li><a href="www.facebook.com">Facebook</a></li>
				<li><a href="www.twitter.com">Twitter</a></li>
			</ul>
		</div>
		
	</footer>


</body>
</html>




<!DOCTYPE html>
<html>
<head>
	<title>New post!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		
		<div class="container">
			<a href="/" class="logo">
				<img src="logo.jpg" alt="NSU E-magazine" id="nylogo">
			</a>
		</div>
		<div class="navbar">
			<ul id="navItems">
				<li><a class="active" href="homepage.php">Home</a></li>
				<li><a href="#news">News</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#about">About</a></li>
			</ul>
		</div>

	</header>
<!-- PHP code for submitting ARTICLE starts here  -->
 	<?php 
		require ("persistent/DBinfo.php");
		$warning="";
		$x=0;
		$db = connection();

		if (isset($_POST['SubmitArticle'])){
			if (empty($_POST["heading"])) {
				$x=$x-1;
			} 
			else {
				$heading = $_POST['heading'];
			}
			
			if (empty($_POST["description"])) {
			    $x=$x-1;
			} 
			else {
			    $description = $_POST['description'];
			}
			$userID=0;
			if ($x == 0 ){
				$sql = "INSERT INTO post (heading,description,user_id)
				values ('$heading','$description','userID')";	
				mysqli_query ($db,$sql);
				$warning = "Your article has been posted!";
			}
			else{
				$warning = "All fields are necessary!";
			}


		}

	 ?>

<!-- PHP code for submitting ARTICLE ends here -->

	<div id = formbox  align="center">


		<div id= "form">

			<h2> <br>New Post</h2>

			

			<div id= wrapper>

			<form action="" method="post" enctype="multipart/form-data">
				
				<table>
					
					<tr>
						<td>Heading</td>
						<td>
							<input type="text" id="heading" name="heading">
						</td>
					</tr>


					<tr>
						<td>Description</td>
						<td>
							<input style="height:100px;font-size:14pt;" type="text" id="description" name="description">
						</td>
					</tr>


					<tr>
						<td></td>
						<td><?php echo $warning ; ?></td>
					</tr>

					<tr>
						<td></td>
						<td><input class="btn" type="submit" name="SubmitArticle" value="Post" >
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

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="homedesign.css">
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
                <li><a class="active" href="newPost.php">Compose</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>

    </header>
    <?php 
        require ("persistent/DBinfo.php");
        $query =  "SELECT * FROM post";
        $db=connection();
        $output = mysqli_query($db,$query);
        while ($result = mysqli_fetch_array($output)) {
             $heading = $result['HEADING'];
             $description = $result['DESCRIPTION']; 
            // echo "string = ".$result['HEADING'];
            // echo "string = ".$result['DESCRIPTION'];
        }
    ?>

    <div id="trending">

    	<div id="trendingleft">
    		<img src="books.jpg" id="trendingimage">
    	</div>

    	<div id="trendingright">
    		<div id="rightpara">
    			
    		<h1> <?php echo $heading; ?> </h1>
    		<p><?php echo $description; ?></p>
    		<br>
    		<a href="www.facebook.com" id="readbutton1">Read article...</a>

    		</div>
    		
    	</div>

    </div>


    <div id="newly-added">

    	<div id="newleft">

    		<div id="leftpara">
    			
    		<h1>Topic 1</h1>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    		<br>
    		<a href="www.facebook.com" id="readbutton2">Read article...</a>

    		</div>
    	</div>

    	<div id="newright">
    		
    		<img src="ball.jpg" id="newimage">
    		
    	</div>

    </div>


    <div id="listview">
    		 	<a href="#">
    			<div id="first">
    				<img src="ball.jpg" id="firstimage">
    				<br>
    				<h1>Topic 1</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div></a>

    			<a href="#">
    			<div id="second">
    				<img src="books.jpg" id="secondimage">
    				<br>
    				<h1>Topic 1</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div></a>

    			<a href="#">
    			<div id="third">
    				<img src="books.jpg" id="thirdimage">
    				<br>
    				<h1>Topic 1</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div></a>

    			<a href="#">
    			<div id="fourth">
    				<img src="ball.jpg" id="fourthimage">
    				<br>
    				<h1>Topic 1</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div></a>

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
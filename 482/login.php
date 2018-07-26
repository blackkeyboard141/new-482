<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
                <li><a class="active" href="signup.html" style="float:right;">Sign up</a></li>
                <!-- <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li> -->
            </ul>
        </div>

    </header>


    <div id = formbox class="extraHeight" align="center">


        <div id= "form">

            <h2> <br>Login to your account </h2>


            <div id= wrapper>

            <form id = "form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                
                <table>
                    
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
                        <td><a href="/recovery"><small>Forgot password?</small></a></td>
                        <td><input class="btn" type="submit" name="Login" value="Login" >
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
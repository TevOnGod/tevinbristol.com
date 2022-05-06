<!DOCTYPE HTML>
<html lang="eng">
<head>
        <meta charset="UTF">
        <img src="TevinBristol.png"alt="TevinB"alt="Tevin" width="316" height="250">
    </head>


    <link rel="stylesheet" href="tevinsworld.css">
      

    <?php
    include 'includes/dbh.inc.php';
    ?>



    <body>
        <div class="center">
            <h1>Login</h1>
            <form action="includes/loginquick.inc.php" method= "post">
                <div class = "txt_field">
                    <input type="text" name="uid" required>
                    <span></span>
                    <label>Username</label>
                </div>

                <div class="txt_field">
                <input type="password" name="pwd" required>
                    <span></span>
                    <label>Password</label>

                </div>

                <div class="pass"><a href="home.php">Continue as guest</a> </div>

                <button type="submit" name="submit">Sign In</button>

                <div class="signuplink">
                   Not a member? <a href="signup.php">Signup</a>
                </div>
            


            </form>
        </div>
        




    </body>


 
   







    <footer>
          &copy;2022 Tevin Bristol
      </footer>

</html>
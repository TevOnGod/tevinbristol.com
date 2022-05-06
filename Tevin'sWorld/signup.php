<!DOCTYPE HTML>
<html lang="eng">

<head>
        <meta charset="UTF">
        <img src="TevinBristol.png"alt="TevinB"alt="Tevin" width="316" height="250">
    </head>


    <link rel="stylesheet" href="tevinsworld.css">



        <div class="center">
            <h1>Sign Up</h1>
            
            <form action="includes/signupquick.inc.php" method= "post">
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
                <div class="txt_field">
                <input type="password" name="pwdrepeat" required>
                    <span></span>
                    <label>Repeat Password</label>
                </div>
                <div class="txt_field">

                    <input type="text" name="email" required>
                    <span></span>
                    <label>Email Address</label>
                </div>
                <button type="submit"name="submit">Sign Up</button>
                </form>

                <div class="signuplink">
                   already a member? <a href="index.php">Sign in</a>
                </div>  
        </div>

        <footer>
          &copy;2022 Tevin Bristol
      </footer>


   





</html>
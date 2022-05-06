<?php

if (isset($_POST["submit"])) {
    echo ""
  
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $email = $_POST["email"];



  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

 
  if (emptyInputSignup( $username, $pwd, $pwdRepeat, $email) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }
  createUser($conn, $email, $username, $pwd);
    

} else {
	header("location: ../signup.php");
    exit();
}
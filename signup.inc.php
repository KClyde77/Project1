<?php

//an if statement to knoe if the user registered through the register.php page or not

if (isset($POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false) {
      header("location: ../register.php?error=emptyinput");
      exit();
    // code...
  }
  if (invalidUid($username) !== false) {
      header("location: ../register.php?error=invalidUid");
      exit();
    // code...
  }
  if (invalidemail($email) !== false) {
      header("location: ../register.php?error=invalidemail");
      exit();
    // code...
  }
  if (pwdMatch($pwd,$pwdRepeat) !== false) {
      header("location: ../register.php?error=passworddonotmatch");
      exit();
    // code...
  }
  if (uidExits($connect, $username) !== false) {
      header("location: ../register.php?error=usernameexit");
      exit();
    // code...
  }
  createUser($connect,$name,$username,$email,$pwd);

}
else {
  header("location: ../register.php");
  exit();
}

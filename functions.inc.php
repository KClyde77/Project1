<?php
 funtion emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
   $result;
   if (empty($name)||  empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
     result = true;
   }
   else {
     $result = false;
   }
   return $result;
 }


 funtion invalidUid($username){
   $result;
   if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
     result = true;
   }
   else {
     $result = false;
   }
   return $result;
 }


////Checking for emails//////
 funtion invalidEmail($email){
   $result;
   if (!filer_var($email,FILTER_VALIDATE_EMAIL)) {
     result = true;
   }
   else {
     $result = false;
   }
   return $result;
 }
 //// Checking for password match//

 funtion pwdMatch($pwd,$pwdRepeat){
   $result;
   if ($pwd !==$pwdRepeat) {
     result = true;
   }
   else {
     $result = false;
   }
   return $result;
 }


 ///Checking if the username Exits in your Database////
 funtion uidExits($connect, $username) {
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ^?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
     header("location: ../signup.php?error-stmtfailed");
     exit();
   }

   mysqli_stmt_bind_param($stmt,"ss", $username, $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)) {
     return $row;
   }
   else {
     $result = false;
     return $result;

   }

 }



 /////////Logging User In the system////////////

 funtion createUser($conn,$name,$username,$pwd);{
   $sql = "INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
     header("location: ../signup.php?error-stmtfailed");
     exit();
   }
 $hashedPwd = password_harsh($pwd,PASSWORD_DEFAULT);


   mysqli_stmt_bind_param($stmt,"ssss",$name, $username, $email,$hasedpwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../signup.php?error=none");
   exit();


   }

 }

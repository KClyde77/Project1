<?php
   include_once 'header.php';
?>

  <form action="includes/signup.inc.php" method="post">
      <h1> User Registration</h1>
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter first name"  name="name" required>
    <label><b>Email Address</b></label>
    <input type="text" placeholder="Enter email"  name="email" required>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter username"  name="uid" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="pwd" required>
    <label><b> Retype Password</b></label>
    <input type="password" placeholder="Enter Password"  name="pwdrepeat" required>


    <button  type="submit" name="submit">Register</button>
  </form>

<?php
  if (isset($_GET["error"]))  {
    echo "Fill in all fields provided";
  }
  else if ($_GET["error"] == "invalidUid"){
    echo "Choose a proper email or username";
  }
?>
<?php
   include_once 'footer.php';
?>

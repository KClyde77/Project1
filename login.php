
<?php
   include_once 'header.php';
?>

  <form action="includes/login.inc.php" class="container" style="margin-right:500px;">
    <h1> User Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email/username"  name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="psw" required>

    <button type="submit">Login</button>
  </form>
<?php
   include_once 'footer.php';
?>

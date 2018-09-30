<?php

session_start();

$link = mysqli_connect("localhost", "root", "root", "udemy");

if(mysqli_connect_error()) {
  die("Fail to connect mydql");
}

/*Exist check of email*/
$query = "SELECT id FROM users WHERE email= '".mysqli_real_escape_string($link, $_POST['email'])."' ";
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0) {
  echo "This email exists.";
  echo "<p>";
} else {
  /* Insert new user */
  $query = "INSERT INTO `users` (`email`, `password`) VALUES (
  '".mysqli_real_escape_string($link, $_POST['email'])."',
  '".mysqli_real_escape_string($link, $_POST['password'])."'
  )";
  if(mysqli_query($link, $query)) {
//    echo "Success to register new user.";
//    echo "<p>";
    $_SESSION['email'] = $_POST['email'];
    header("Location: session.php");
  } else {
    echo "Fail to register new user.";
    echo "<p>";
  }
}

?>

<p><strong>Register new user</strong></p>
<form method="post">
  <label for="email">email</label>
  <input type="text" name="email" placeholder="email" required>
  <label for="paswword">password</label>
  <input type="password" name="password" placeholder="password" required>
  <input type="submit" value="Register">
</form>
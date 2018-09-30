<?php

setcookie("customerId", "1234", time() + 60 * 60 * 24);

echo $_COOKIE["customerId"];

?>

<form method="post">
  <label for="email">email</label>
  <input type="text" name="email" placeholder="email" required>
  <label for="paswword">password</label>
  <input type="password" name="password" placeholder="password" required>
  <input type="submit" value="Register">
</form>
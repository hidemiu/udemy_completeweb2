<?php

if($_POST) {
  echo "Hello ".$_POST['sir_name']."!!";
}

?>


<p>Input your sir name.</p>
<form method="post">
  <input type="text" name="sir_name">
  <input type="submit" value="Send">
</form>
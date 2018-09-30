<?php

$link = mysqli_connect("localhost", "root", "root", "udemy");

if(mysqli_connect_error()) {
  die("Fail to connect mydql");
}

/* INSERT */
//$query = "INSERT INTO `users` (`email`, `password`) VALUES ('clau@gmail.com', 'claupass')";
//
//if($result = mysqli_query($link, $query)) {
//  echo "success to publish INSERT query.";
//  echo "<p>";
//}

/* UPDATE */
//$query = "UPDATE `users` SET email='change@gmail.com' WHERE id=1 LIMIT 1";
//if($result = mysqli_query($link, $query)) {
//  echo "success to publish UPDATE query.";
//  echo "<p>";
//}

/* UPDATE Password */
//$query = "UPDATE `users` SET password='change_pass' WHERE email='change@gmail.com' LIMIT 1";
//if($result = mysqli_query($link, $query)) {
//  echo "success to publish UPDATE query for password.";
//  echo "<p>";
//}



/* DISPLAY*/
$name = "nobu D'Glay";
$query = "SELECT * FROM users WHERE name= '".mysqli_real_escape_string($link, $name)."'";
echo $query;
if($result = mysqli_query($link, $query)) {
  echo "success to publish query.";
  echo "<p>";
}
while($row = mysqli_fetch_array($result)) {
  print_r($row);
}


//echo "Mailaddress is ".$row['email'].".   Password is ".$row['password'].".";
//echo "<p>";
//echo "Mailaddress is ".$row[1].".   Password is ".$row[2].".";
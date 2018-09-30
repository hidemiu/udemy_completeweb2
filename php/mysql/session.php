<?php

session_start();

if($_SESSION['email']){
  echo "Login now";
} else {
  header("Location: register.php");
}


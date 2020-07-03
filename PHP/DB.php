<?php
define("server","localhost");
define("username","root");
define("password","");
define("Database","MDC_CHSH");
$conn=mysqli_connect(server,username,password,Database) or die("Can't connect to database some problem occured");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

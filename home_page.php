<?php 
session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
{

}
else
header("location:index.php");
?>
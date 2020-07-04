<?php 
include("DB.php");
function verify_user($input,$input2){
    $boolean=true;
    global $conn;
        $username=mysqli_real_escape_string($conn,test_input($input));
        $password=mysqli_real_escape_string($conn,test_input($input2));
         if(empty($username))
              $boolean=false;
        if(empty($password))
             $boolean=false;
        if($boolean==true)
        {
           
            $sql="select * from user_table where username='$username' && Password='$password'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
                return true;
            else 
                return false;
        }

  }
    

?>
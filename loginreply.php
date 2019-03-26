<?php 
session_start();
$email = $_POST['email'];
$pwd = $_POST['pwd'];
include "connection.php";
if($con){
    $sql = "SELECT * FROM `signup` WHERE email ='$email' AND password = '$pwd'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if($row){
        
        echo "<h1>Welcome</h1>";
        $_SESSION['unique_id'] = $email;
        header("Location:web/dashboard.php");
        
    }
    
    else{
        ?>
        <script>
            alert("Invalid Email Address Sign Up to continue");
            window.location.href= "signup.php";
            </script>
        
        <?php
       
        
    }
}
?>
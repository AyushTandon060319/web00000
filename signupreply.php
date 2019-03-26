<?php
session_start();
$email = $_POST['email'];
$Username = $_POST['Username'];
$phonenumber = $_POST['phonenumber'];
$pwd = $_POST['pwd'];
$repwd = $_POST['repwd'];
include "connection.php";

 if($con){
    
    $sql = "INSERT INTO `signup`(`email`, `username`, `phoneno`, `password`, `confirmpassword`) VALUES ('$email','$Username','$phonenumber','$pwd','$repwd')";   
    $result = mysqli_query($con,$sql);
    
    if($result){
        
        $_SESSION['unique_id'] = $email;
        ?>
        <script>
            alert ("Welcome Login To Continue");
            window.location.href="index.html";
        </script>
        <?php
        
       
    }
    else{
        ?>
        <script>
        alert ("Email already exist enter valid email address");
        window.location.href="signup.php";
        </script>
        
        <?php
       
    }
}
else{
    echo "CONNECTION PROBLEM:- check your connection";

}


?>
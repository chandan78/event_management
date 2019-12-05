<?php 
//Login Validation
session_start();
if(isset($_POST['Login'])){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM managers WHERE email='" . $email . "' and password = '". $pass."'";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) { 
        $_SESSION["user_email"] = $row['email'];
        setcookie($email,$pass,time(),'/');
            echo "success";
            //header("Location:dashboard.php");
        } else {
            echo "error";
            //header("Location:login.php");
        }
}
?>
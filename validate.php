<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phn'];
    $spec = $_POST['spec'];
    $add = $_POST['Add'];

    $sql = "INSERT INTO managers(first_name,last_name,password,email,phone_no,address,specialty)
    VALUES('$fname','$lname','$pass','$email','$phone','$add','$spec')";
    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }else{
        echo "Error inserting values " .mysqli_error($conn);
    }
} 
?>
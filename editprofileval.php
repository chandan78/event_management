<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $conn = mysqli_connect('localhost','root','','goevent');
        if(!$conn){
            echo "Connection Failed!<br>".mysqli_error($conn);
        }
       // $email = $_POST['email'];
        $phone = $_POST['phn'];
        //$upusername = $first.$last;
        $add = $_POST['address'];
        $spec = $_POST['specialty'];
        $id = $_POST['userid'];
        $username = $_POST['user'];
        /*$sql1 = "UPDATE userwork SET username='$upusername' WHERE username='".$username."'";
        $result1 = mysqli_query($conn,$sql1);
        if(!$result1){
            echo "Inserting error".mysqli_error($conn);
        }*/
        $sql = "UPDATE managers SET phone_no='$phone',address='$add',specialty='$spec' WHERE ID='".$id."'";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            echo "Inserting error".mysqli_error($conn);
        }else{
            echo "Successfully Updated!";
        }

    }
    if(isset($_GET['delete'])){
        $conn = mysqli_connect('localhost','root','','goevent');
        if(!$conn){
            echo "Connection Failed!<br>".mysqli_error($conn);
        }
        $id = $_GET['pid'];  
        $sql2 = "DELETE FROM userwork WHERE id='".$id."'";
        $result = mysqli_query($conn,$sql2);
        if(!$result){
            echo "Inserting error".mysqli_error($conn);
        }else{
            echo "Successfully Deleted!";
        } 
    }
?>
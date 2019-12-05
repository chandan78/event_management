<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $conn = mysqli_connect('localhost','root','','goevent');
        if(!$conn){
            echo "Connection Failed!<br>".mysqli_error($conn);
        }
        $cname = $_POST['userName'];
        $sql = "SELECT * FROM userwork WHERE username='".$cname."'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            echo $row['title'];   
        }
    }
?>
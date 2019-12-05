<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $username = $_POST['user'];
    $sql2 = "SELECT * FROM userwork WHERE username='".$username."'";
    $result = mysqli_query($conn,$sql2);
    if(!$result){
      echo "Inserting error".mysqli_error($conn);
    }
    while($row = mysqli_fetch_array($result)){
      echo "
      <div class='gallery'>
        <a target='_blank' href='".$row['photo']."'>
          <img src='".$row['photo']."' width='600' height='400'>
        </a>
        <div class='desc'>".$row['title']."</div>
      </div>
      ";
    }
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $likenum = $_GET['number'];
    $userid = $_GET['userid'];
    $sql = "SELECT rating FROM managers WHERE ID='".$userid."'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
      echo "Inserting error".mysqli_error($conn);
    }
    while($row = mysqli_fetch_assoc($result)){
        $rate = $row['rating'];
    }
    $rate = $rate+$likenum;
    $sql2 = "UPDATE managers SET rating='$rate' WHERE ID='".$userid."'";
    $result = mysqli_query($conn,$sql2);
    if(!$result){
        echo "Inserting error".mysqli_error($conn);
    }else{
        echo "Thanks For Your Feedback!";
    }
} 
?>
<?php 
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $conn = mysqli_connect('localhost','root','','goevent');
        if(!$conn){
            echo "Connection Failed!<br>".mysqli_error($conn);
        }
        $username = $_GET['user'];
        $sql2 = "SELECT * FROM userwork WHERE username='".$username."'";
        $result = mysqli_query($conn,$sql2);
        if(!$result){
          echo "Inserting error".mysqli_error($conn);
        }
        while($row = mysqli_fetch_array($result)){
          echo "
          <div class='gallery'>
            <a target='_blank' href='".$row['photo']."'>
              <img src='".$row['photo']."' width='800' height='800'>
            </a>
            <div class='desc'>".$row['title'].' ID:'.$row['id']."</div>
          </div>
          ";
        }
    }    
?>
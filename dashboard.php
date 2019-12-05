<?php
include("loginval.php");
$fileError ="";
$titleError = "";
if(isset($_SESSION['user_email'])){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $email = $_SESSION['user_email'];
    $sql = "SELECT * FROM managers WHERE email = '".$_SESSION['user_email']."'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      $username = $row['first_name'].$row['last_name'];
?>
<html>
    <head>
        <title></title>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> 
        <script src="./js/main.js"></script>
       

	 
        <script src="jquery-1.10.2.min.js"></script>
        <meta charset="utf-8">
<style>
body
    {

    background-image:url('images/admin3.jpg');
    background-attachment:fixed;
    background-size:cover;
    font-family:new time roman;
    background-color: #cccccc;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;

    }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}


div.col-md-4
{
  margin-left:-300px;
}
div.col-md-5
{
  margin-left:200px;
}
div.col-md-6{
  margin-left:270px;
  margin-top:-200px;
}

.container
{
  width:50%;
  height:100%;
}

#adm
{
  margin-left:390px;
  height:100px;
  




}
.text2
{
  size:100px;
  color:white;
  font-size:20px;
}


.desc
{
  color:white;
  font-size:20px;
}
</style>
        </head>
    <body>
      
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    
      <li class="nav-item active">
        <a class="nav-link" href="../GOEVENTPLANNER/index.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
     
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">Order Details</a>
      </li>-->
      <form method="" action="">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
        </li>
      </form>
      </ul>

    

  </div>
  <ul class="nav navbar-nav navbar-right">
      <h5 style="color:white;"><i class="fa fa-user">&nbsp;</i><?php echo $_SESSION['user_email']; ?></h5>
    </ul>
</nav>
    <br>
    <br>
    <br>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto" style="width: 20rem;">
                <?php echo "<img src='".$row['image']."' class='card-img-top mx-auto' style='width:50%;' alt='admin'>";?>
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text"><?php echo $row['first_name']." ".$row['last_name'];  ?></p>
                        <p class="card-text"><?php echo $row['address'];  ?></p>
                        <p class="card-text"><?php echo $row['email'];  ?></p>
                        <p class="card-text"><?php echo $row['phone_no'];  ?></p>
                        <p class="card-text"><b>Specialty</b></p>
                        <p class="card-text"><?php echo $row['specialty'];  ?></p>
                        <a href="editprofile.php" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit profile</a>
                    </div>
                </div>
            </div>
<?php } ?>
      <div class="col-md-5">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1"><b style="color:white;">ADD SPECIALITY</b></label>
            <input type="text" class="form-control" name="title"><br>
            <input type="file" class="form-control-file" name="uploadfile"><br>
            <input type="submit" class="btn btn-secondary btn-sm" name="submit" value="UploadFile"><br>
        </div>
        </form>
        </div>
        </div>
        <br><br><br><br>
        
      </div> 
      
      <div class="row" id="adm">
      
          <div class="col-md-6">
          <div class="text2">Recently Added</div>
            <div id="photos"></div>
          </div>
    
</div>

</div>
    </div>
<script>
  $(document).ready(function(){
    var name = '<?php echo $username;?>';
    $.get('dashboardval.php',{user:name},function(data){
      $("#photos").html(data);
    });
  });
</script>
    <?php
        mysqli_close($conn);
    }
?>
  
        <?php 
          if(isset($_POST['submit'])){
            $conn = mysqli_connect('localhost','root','','goevent');
            if(!$conn){
                echo "Connection Failed!<br>".mysqli_error($conn);
            }
            $filename = $_FILES['uploadfile']['name'];
            $tempname = $_FILES['uploadfile']['tmp_name'];
            $folder1 = "images/".$filename;
            $title = $_POST['title'];
            if(empty($filename)){
              $fileError = "Please Upload the Image";
            }else if(($_FILES["uploadfile"]["size"] > 2000000)){
                $fileError = "Image Should be less than 2 Mb!";
            }else{
                move_uploaded_file($tempname,$folder1);
            }
            if(empty($title)){
              $titleError = "Please Give a Title";
            }else{
              $sql1 = "INSERT INTO userwork(username,title,photo)VALUES('$username','$title','$folder1')";
              $result = mysqli_query($conn,$sql1);
              if(!$result){
                echo "Inserting error".mysqli_error($conn);
              }
            }
          }
        ?>
    </body>
</html>


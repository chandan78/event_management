<?php
include_once("loginval.php");
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
      $userid = $row['ID'];
?>
<html>
    <head>
        <title></title>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> 
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

.desc
{
    color:white;
    font-size:20px;
}

#ad
{
    margin-top:-30px;
}
.head
{
    color:white;
    margin-top:10px;
    margin-left:950px;
}

.col-md-3
{
    margin-top:-90px;
}
#res
{
    color:white;
    font-size:25px;
    margin-top:-50px;
    margin-left:90px;
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
          <a class="nav-link" href="dashboard.php"><i class="fa fa-user">&nbsp;</i>Admin</a>
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
    <br>
    <div class="head">
        <h2>Uploaded Photos</h2></div>  
    <br><br><br>
    
    <div class="container">
        <h3 style="text-align:center;color:green;" id="success"></h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card mx-auto" style="width:20rem;">
                <?php echo "<img src='".$row['image']."' class='card-img-top mx-auto' style='width:50%;' alt='admin'>";?>
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="text-info" style="font-size:22px;"><?php echo "Name :".$row["first_name"]."".$row["last_name"];?></p>
                        <p class="card-text"><?php echo $row['email'];  ?></p>
                        <input type="text" id="phn" class="form-control" value="<?php echo $row['phone_no'];?>"><br>
                        <input type="textarea" id="upadd" class="form-control" value="<?php echo $row['address'];  ?>">
                        <p class="card-text"><b>Specialty</b></p>
                        <input type="text" id="upspec"class="form-control" value="<?php echo $row['specialty'];  ?>"><br>
                        <button type="submit" class="btn btn-danger" onclick="update('<?php echo $username; ?>')"><i class="fa fa-edit">&nbsp;</i>Update</a>
                    </div>
                </div>
                <label style="color:white;font-size:20px;"><b>Delete Photo?</b></label>
                <input type="text" id="del" class="form-control" placeholder="Enter the Photo ID"><br>
                <input type="submit" class="btn btn-danger" value="Delete" onclick="del('delete')">
                <p id="res" ></p>
            </div>

        <br><br><br><br>
        <div class="col-md-6" id="ad">
          <div id="photos"></div>
        </div>
           
        </div>
        
    
<?php } ?>
        
       
      
</div>
<script>
     $(document).ready(function(){
      var name = '<?php echo $username;?>';
      $.get('dashboardval.php',{user:name},function(data){
        $("#photos").html(data);
      });
    });
    function load(){
        var name = '<?php echo $username;?>';
        $.get('dashboardval.php',{user:name},function(data){
            $("#photos").html(data);
        });
    }
    function update(username){
        var uid = '<?php echo $userid; ?>';
        var useremail = $('#email').val();
        var phone = $('#phn').val();
        var add = $('#upadd').val();
        var spec = $('#upspec').val();
        $.post('editprofileval.php',
        {phn:phone,address:add,specialty:spec,userid:uid,user:username},function(data){
            $('#success').html(data);
            setTimeout(function(){
                window.location.href = "dashboard.php";
            },3000);
        });
    }
    function del(value){
        var id = $('#del').val();
        $.get('editprofileval.php',{delete:value,pid:id},function(data){
            $('#res').html(data);
            setTimeout(function(){
                load();
            },1000);
        });
    }
</script>
<?php 
    //mysqli_close($conn);
}
?>
</body>
</html>

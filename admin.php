<?php

$fileError ="";
$titleError = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $name = $_POST['name'];
    $sql = "SELECT * FROM managers WHERE ID = '".$name."'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      $username = $row['first_name'].$row['last_name'];
      $id = $row['ID'];
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
      
        <meta charset="utf-8">
<style>
  body
    {

    background-image:url('images/login3.jpg');
    background-attachment:fixed;
    background-size:cover;
   
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

.row
{
  margin-left:300px;
  height:100%;
}
div.col-md-4
{
  margin-left:-300px;
}
div.col-md-5
{
  margin-left:200px;
}
div.col-md-3
{
   margin-left:-100px;
   width:50%;
   height:100%;
}

#ad
{
    margin-top:-700px;
    margin-left:500px;
}

.card-text
{
  font-size:20px; 
  font-family:times roman;
  color:carol;
  
  
}
.desc
{
  color:black;
  font-size:20px;
  font-weight:bold;
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
      <li class="nav-item">
          <a class="nav-link" href="customers.php"><i class="fa fa-user">&nbsp;</i>Customers</a>
        </li>
      </ul>
  </div>
  
</nav>
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mx-auto" style="width: 20rem;">
                <?php echo "<img src='".$row['image']."' class='card-img-top mx-auto' style='width:50%;' alt='admin'>";?>
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text"><?php echo "Name : ".$row['first_name']." ".$row['last_name'];  ?></p>
                        <p class="card-text"><?php echo "Email : ". $row['email'];  ?></p>
                        <p class="card-text"><?php echo "Address:<br> ".$row['address'];  ?></p>
                        <p class="card-text"><?php echo "Mobile No. :<br> ". $row['phone_no'];  ?></p>
                        <p class="card-text"><b>Specialty</b></p>
                        <p class="card-text"><?php echo $row['specialty'];  ?></p>

                          <p><i><b style="color:green;">Your Feedback is Much Appreciated!</b></i></p>
      <div id="like">
        <input type="button" id="btn" class="btn btn-link" value="Like" onclick="like(1)"><i class="fa fa-thumbs-up" style="color:blue;"></i>
      </div>
                    </div>
                </div>
            <br><br><br>
            <div class="col-md-6" id="ad">
          <div id="photos"></div>
        </div>
        </div>

<?php } 
?>
  
  </div>
</div>
  
  </div>
  <script>
    $(document).ready(function(){
      var name = '<?php echo $username;?>';
      $.post('adminval.php',{user:name},function(data){
        $("#photos").html(data);
      });
    });
    function like(num){
      var id = '<?php echo $id;?>';
      $.get('adminval.php',{userid:id,number:num},function(data){
        $('btn').hide();
        $('#like').html(data);
      });
    }
  </script>
<?php 
mysqli_close($conn);
}
?>
    </body>
</html>


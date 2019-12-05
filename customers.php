<?php

session_start();
$connect=mysqli_connect("localhost","root","","goevent");


?>
<html>
<head>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- Latest compiled and minified CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body
    {

    background-image:url('images/cus1.jpg');
    background-attachment:fixed;
    background-size:cover;
   
    background-color: #cccccc;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;

    }
.cont
{
  border:1px solid #333;
  background-color:#f0f0f0;
  border-radius:5px;
  padding:30px;
  
  
}
.col-md-4
{
  width:50%;
  height:100%;
}

.img-responsive
{
  width:500px;
  height:250px;
}
.container{
  margin-left:50px;
}

.quotes
{
  margin-left:1000px;
  margin-top:-1400px;
  color:white;
  font-size:60px; 
}





</style>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">GOEvent</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Home</a></li>

</ul>

</nav> 
<br>



<div class="container" style="width:770px;">

 

<h2 align="center" style="color:white;">Manager's List Available</h2>            
<?php 
$query="SELECT * FROM managers ORDER BY id ASC";
$result=mysqli_query($connect,$query);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    
    ?>
    
    <div class="col-md-4"> 
    <form method="POST" action="admin.php">    
        <div class="cont">
        <img src="<?php echo $row["image"] ?>" class="img-responsive"><br>
        <input type="hidden" name="name" value="<?php echo $row["ID"];?>">
        <i style="font-size:20px;">Rating</i>&nbsp;<i class="fa fa-star" style=";font-size:20px;color:blue;"></i>&nbsp;<span><?php echo $row["rating"];?></span>
        <p class="text-info" style="font-size:22px;"><?php echo "Name :".$row["first_name"]."".$row["last_name"];?></p>
        <p class="text-danger" style="font-size:15px;"  ><?php echo "Speciality :".$row["specialty"];?></p>
        <input type="hidden" name="hidden_name" value=" <?php echo $row["first_name"];?> ">
        <input type='submit' id="add" class="btn btn-success" value="See Profile">
        </div>
    </form>
    </div>
    <?php }?>
    <?php }?>
    
    </div>
    <div class="quotes">
			<p><cite>"Planning without action is futile,action without planning is fatal".</cite></p>
		
		  </div>

    
    </div>
    
    </div>
    
    
    
    
   
    
    </body>
    
    </html>
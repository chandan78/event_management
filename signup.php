<?php 
$nameError ="";
$lnameError ="";
$emailError ="";
$passError ="";
$phoneError ="";
$specError ="";
$addError ="";
$dobError ="";
$fileError ="";
$success ="";
$preview = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn = mysqli_connect('localhost','root','','goevent');
    if(!$conn){
        echo "Connection Failed!<br>".mysqli_error($conn);
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['fname']." ".$_POST['lname'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phn'];
    $spec = $_POST['spec'];
    $add = $_POST['Add'];
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "images/".$filename;
    //echo "<img src='$folder' height='180' width='180'/>";
    if(empty($filename)){
        $fileError = "Please Upload the Image";
    }else if(($_FILES["uploadfile"]["size"] > 2000000)){
        $fileError = "Image Should be less than 2 Mb!";
    }else{
        move_uploaded_file($tempname,$folder);
        $preview = "<img src='$folder' height='180' width='180'/>";
    }
    if (empty($fname)) {
            $nameError = "Name is required";
        } else {
        $name = test_input($_POST["fname"]);
        // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Only letters and white space allowed";
        }
    }
    if(empty($email)) {
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid or not
        if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
            $emailError = "Invalid email format";
        }
    } 
    if(empty($lname)){
        $lnameError = "LastName Is Required!";
    } 
    if(empty($dob)){
        $dobError = "DOB is Required!";
    }
    if(empty($spec)){
        $specError = "<p class='alert alert-danger'>Specialty Is Required!</p>";
    }
    if(empty($phone)){
        $phoneError = "Phone Number Is Required!";
    }
    if(empty($add)){
        $addError = "Address Is Required!";
    }
    if(empty($pass)){
        $passError = "Password Is Required!";
    }else{
        $sql = "INSERT INTO managers(first_name,last_name,password,email,phone_no,address,specialty,image)
        VALUES('$fname','$lname','$pass','$email','$phone','$add','$spec','$folder')";
        if(mysqli_query($conn,$sql)){
            require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'gchandan390@gmail.com';
            $mail->Password = 'Gchandan1207#';
            $mail->setFrom($_POST["email"],$username);
            $mail->addAddress('gchandan390@gmail.com');
            //$mail->addReplyTo($_POST["email"],$_POST["name"]);
            $mail->isHTML(true);
            $mail->Subject = "Event Manager";
            $mail->Body = '<h3 align=center>Name:'.$_POST["fname"].''.$_POST["lname"].'<br>Email: '.$_POST['email'].
            '<br>Has Registered as Event Manager<br>PhoneNo: '.$_POST['phn'].'</h3>';
            $mail->send();
            echo "<script>
            alert('Successfully Registered!');
            window.location.href='login.php';
            </script>";
        }else{
            echo "Error inserting values " .mysqli_error($conn);
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->
  

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
   



<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>

  $(document).ready(function(){
    $('.form-control').datepicker();
  });
  </script>
<style>
{
    margin:0px;
    padding:0px;
}
body
    {

    background-image:url('images/login3.jpg');
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
h1{
    font-size:50px;
    color:white;
    margin-top:30px;
    margin-bottom:60px;
}
.col-md-5{
    background:rgba(0,0,0,0.5);
    margin-top:100px;
    margin-left:-300px;
    
}
.label{
    font-size:20px;
    font-weight:normal; 
    color:white;
}

.input-group{
    margin-top:10px;
    margin-bottom:20px;
}
.input-group-addon
{
    background:transparent;
    border-radius:0px;
    border:0px;
    border-bottom:1px solid white;
    font-size:18px;
    color:gray; 
}
.form-control{
    background:transparent;
    border-radius:0px;
    border:0px;
    border-bottom:1px solid white;
    padding:15px;
    color:white;
    font-size:21px;
}
input[type="checkbox"]{
    height:15px;
    width:15px;
}
small{
    font-size:18px;
    color:white;
}
p{
    font-size:18px;
    color:white;
}
.btn-danger{
    border-radius:0px;
    width:900px;
    font-size:20px;
    margin-top:20px;
    margin-bottom:30px;
}

h2{
    font-size:30px;
    color:white;
}
.error{
    color:red;
}
.success{
    color:green;
    font-size:20px;
}
.row
{
    width:200%;
}

.date1{
    width:80%;
    background:transparent;
    border-radius:0px;
    border:0px;
    border-bottom:1px solid white;
    padding:15px;
    color:white;
    font-size:21px;
    
}

</style>
<script>
</script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php " class="navbar-brand">GoEvent</a>
    <span class="navbar-text" style>Plan And Celebrate</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#Team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Login</a></li>
       
      </ul>

     
    </div>
    <ul class="nav navbar-nav navbar-right">
      <a href="login.php" style="color:white; text-decoration:none;"><i class="fa fa-sign-in" style="font-size:24px"></i>&nbsp;&nbsp;LOGIN</a>
    </ul>
  </nav> 
   </div>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data" onsubmit="myFunction()">
   <div class="container">
    <div class="row">
    
     
    <div class="col-md-2"></div>
    <div class="col-md-5">

       <div class="card-title text-center mt-3">
            <img src="images/logo.png" width="150px" height="150px">
       </div>
        

        <span class="success"> <?php echo $success;?></span>
        <label class="label contreol-label">First Name</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="fname" class="form-control" placeholder="First-Name">
        <span class="error"> <?php echo $nameError;?></span>
        </div>

        <label class="label contreol-label">Last Name</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="lname" class="form-control" placeholder="Last-Name">
        <span class="error"> <?php echo $lnameError;?></span>
        </div>

        <label class="label contreol-label">Email</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="email" class="form-control" placeholder="E-mail">
        <span class="error"> <?php echo $emailError;?></span>
        </div>

        <label class="label contreol-label">Date of Birth</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="date" name="dob"  class="date1" placeholder="DOB">
        <span class="error"> <?php echo $dobError;?></span>
        </div>

        <label class="label contreol-label">Phone no.</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="number" name="phn" class="form-control" placeholder="Phone">
        <span class="error"> <?php echo $phoneError;?></span>
        </div>
        <span class="error"> <?php echo $specError;?></span>
        <label class="label contreol-label">Speciality</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="spec" class="form-control" placeholder="Events">
        
        </div>
                
        <label class="label contreol-label">Address</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <textarea row="4" column="4" name="Add" class="form-control" placeholder="Addrees"></textarea>
        <span class="error"> <?php echo $addError;?></span>
        </div>
        
        <label class="label contreol-label">Password</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="password" name="pass" class="form-control" placeholder="Password">
        <span class="error"> <?php echo $passError;?></span>
        </div>
       
        <label class="label contreol-label">Profile Photo</label>
        <div class="input-group">
       
        <input type="file"  name="uploadfile" value=""   >
        <span class="error"> <?php echo $fileError;?></span>
        <!--<input type="button" class="btn btn-default" value="UploadFile">-->
        </div>

        <div>
            <input type="submit" value="Submit" class="btn btn-danger">
        </div>
   </div>
</form>
</body>
</html>
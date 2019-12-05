<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
<style>
*{
    margin:0px;
    padding:0px;
}
body{
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
   background:rgba(0,0,0,0.1);
    margin-top:80px;
    margin-left:350px;
    
}
.label{
    font-size:25px;
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
    width:457px;
    font-size:20px;
    margin-top:20px;
    margin-bottom:30px;
}

h2{
    font-size:30px;
    color:white;
}
.navbar1
{
    height:20px;
}
#mail-status{
    color:white;
    font-size:25px;
}
#mail-status1{
    color:white;
    font-size:25px;
}
.a2{
    text-decoration:none;
    color:white;
}
</style>
</head>
<body>
        


   <div class="container">

   <div class="navbar1">
   <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">GoEvent</a>
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
      </ul>
    </div>
  </nav> 
   </div>



    <div class="row">
    <div class="col-md-5">
        
    <div class="card-title text-center mt-3">
            <img src="images/logo.png" width="150px" height="150px">
       </div>
        

        <div id="mail-status"></div>
        <label class="label contreol-label">E-mail or username</label>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
        </div>
        <div id="mail-status1"></div>
        <label class="label contreol-label">Password</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="password">
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <input type="checkbox"><small>Remember me</small>
            </div>

             <div class="col-md-6">
                <a href="#"><p class="text-right">Forget Password</p></a>
            </div>
        </div>

        <input type="submit" id="login" value="Login" class="btn btn-danger">

        <p class="text-center"><mark style="color: #FF7F50;font-weight:bold;">Not a Member Yet ? </mark><a href="signup.php" class="a2">Sign Up</a></p>
    </div>
   <div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script>
        $(document).ready(function(){
            $('#login').on('click',function(){
                var email = $('#email').val();
                var pass = $('#pass').val();
                var valid;
                var login = $('#login').val();
                valid = validateContact();
                if(valid==true){
                    $.post('loginval.php',{email:email,pass:pass,Login:login},function(data){
                        if(data == 'success'){
                            $("#mail-status").html("<div class='alert alert-success'>Login Success!</div>");
                            setTimeout(function(){
                                window.location.href = "dashboard.php";
                            },3000);
                           
                        }else if(data == 'error'){
                            //alert("Invalid Credentials!");
                            $("#mail-status").html("<div class='alert alert-danger'>Invalid Credentials or not registered yet</div>");
                        }
                    });
                }
            });
            function validateContact() {
                var valid = true;	
                
                if(!$("#email").val()) {
                    $("#mail-status").html("Email:(required)").fadeOut(5000);
                    $("#email").css('background-color','#FFFFDF');
                    valid = false;
                }
                if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#mail-status").html("Email:(invalid)").fadeOut(5000);
                    $("#email").css('background-color','#FFFFDF');
                    valid = false;
                }
                if(!$("#pass").val()) {
                    $("#mail-status1").html("Password:(required)").fadeOut(5000);
                    $("#pass").css('background-color','#FFFFDF');
                    valid = false;
                }
                
                return valid;
            }
        });
   </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>Go Event</title> 

  <style>
    .blur
    {
     /*background:rgba(0,0,0,0.1);*/
      margin-top:-160px;
      margin-left:800px;
      height:250px;
    }
  

    

    #team2
    {
      margin-left:150px;
    }
    .success{color:green;}
    .Error{color:red;}
  
    </style>
</head>
           
<body>
  <!-- Start Nagigation -->
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
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  
  <header class="jumbotron back-image" style="background-image: url(images/slider5.png); margin-top:70px;">
    <div class="blur">
     <div class="text-center" style="margin-top: 120px;"><br>
      <h1 class="text-uppercase text-danger font-weight-bold">Plan Great Celebration Here . .</h1><br>
      <p class="font-italic font-weight-bold " style="color:antiquewhite">Plan And Celebrate</p><br>
      <a href="customers.php" target="_self" class="btn btn-outline-danger mr-4">Users</a>
      <a href="login.php" target="_self" id="s1" class="btn btn-outline-danger">Event Manager</a>
    </div>
    </div>
  </header> 


  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services"> 
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-birthday-cake fa-10x" id="pss"></i></a>
        <h4 class="mt-4">Birthday</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa fa-gift fa-10x" aria-hidden="true"></i></a>
        <h4 class="mt-4">Marriage</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-drum fa-10x"></i></a>
        <h4 class="mt-4">Festival</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Course  -->
  <div class="container pt-5" id="Courses"> <!-- Start Course Container -->
    <h2 class="text-center">what we do?</h2>  <!-- Course Heading -->
    <div class="row mt-4">        <!-- Start Course 1st Row -->
      <div class="col-lg-6 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <img src="images/or.png" alt="" class="img-fluid" height="30%">
      </div>  <!-- End Course 1st Row's 1st Column -->

     <div class="col-lg-6">    <!-- Start Course 1st Row's 2nd Column -->
        <br><br><br><br><br><h2 class="text-center">About Sites</h2> <br>
        <p>An event manager is in charge of planning, organizing, and executing all types of events,
           like musical concerts, food festivals, and conventions. You’ll meet with clients to assess
           their needs and determine the purpose of event. After setting an objective, you’ll meet
           with event manager or organizer and other event specialists to develop an idea to execute.
           Financial management is also an important component of this career; an event manager
           must work within budgetary constraints set by the client.</p>
        <p>The event manager is the person who plans and executes the events, taking responsibility
           for creative, technical, and logistical elements. This includes overall event design,
           marketing and communication strategy.</p>
      </div>  <!-- End Course 1st Row's 2nd Column -->
    </div>  <!-- End Course 1st Row -->

    <div class="row mt-4">    <!-- Start Course 2nd Row -->
      <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column -->
        <h2 class="text-center">Real World Projects</h2> <br>
        <p>The project is based on the concept of Event Management. The portal allows event
           planner to make their profile and add their specifications like festival discounts,
           availability on the specific date in the admin Interface so that customer from other side
           can view their specification and visit to the event planners for booking as per their needs.
           </p>
        <p></p>
      </div>  <!-- End Course 2nd Row's 1st Column -->

      <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column -->
        <img src="images/event3.jpg" alt="" class="img-fluid">
      </div>    <!-- End Course 2nd Row's 2nd Column -->
    </div>    <!-- End Course 2nd Row -->
  </div> <!-- End Course Container --> <!-- End Course  -->

  <!-- Start Team  -->
  <div class="jumbotron bg-danger" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->
      <h2 class="text-center text-white">Team</h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-3 col-sm-6" id="team2">     <!-- Start Team 1st Column-->

          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">Chandan Gupta</h4>
              <p class="card-text">Front End Developer</p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">Indra Kumar</h4>
              <p class="card-text">Backend Developer</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

        <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              
              <h4 class="card-title">kashif Khan</h4>
              <p class="card-text">Web Analytics</p>
            </div>
          </div>
        </div>       <!-- End Team 3rd Column-->

             <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact"> <!--Start Contact Us Container-->
    <h2 class="text-center mb-4" style="margin-left:-400px;">Contact Us</h2>    <!-- Contact Us Heading -->
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
      
      <div  id="mail-status">
</div>
          <span id="userName-info" class="info"></span><br/>
          <input class="form-control" name="name" id="userName" placeholder="Name" /><br />

          <span id="userPhone-info" class="info"></span><br/>
          <input class="form-control" name="phone" id="phone" placeholder="Phone" /><br />

          <span id="userEmail-info" class="info"></span><br/>
          <input class="form-control" name="email" id="userEmail" placeholder="E-mail" /><br />

          <span id="content-info" class="info"></span><br/>
          <textarea class="form-control" id="content" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
          <input class="btn btn-primary"  type="submit" onclick="sendContact()"/><br /><br />
      </div>  <!-- End Contact Us 1st Column-->

      <div class="col-md-4 text-center">    <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        lpu, <br>
        jalandhar,punjab <br>
        punjab-144411 <br>
        Phone:  +91 8093459606 <br> 
        <a href="" target="_blank">www.goevent.com</a> <br>
    
        <br><br>
        <strong> Branch:</strong> <br>
         <br>Lovely Professional University,<br>Law Gate ,<br>punjab<br>
        Phone: +91 8093459606 <br> 
        <a href="https://goeventlpu.000webhostapp.com/" target="_blank">www.goevent.com</a> <br>
      </div>    <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s|c|318504235901|e|fb%27%27%27|&placement=&creative=318504235901&keyword=fb%27%27%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-431331345277%26loc_physical_ms%3D1007802%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiArJjvBRACEiwA-Wiqq7CkLfu9LIsD92eHdEHfnjwmj_u5rVx_AOUPWSLRl-R9VjYyUcALfhoC80oQAvD_BwE" target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
            <a href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s|c|318504235901|e|fb%27%27%27|&placement=&creative=318504235901&keyword=fb%27%27%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-431331345277%26loc_physical_ms%3D1007802%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiArJjvBRACEiwA-Wiqq7CkLfu9LIsD92eHdEHfnjwmj_u5rVx_AOUPWSLRl-R9VjYyUcALfhoC80oQAvD_BwE" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
            <a href="https://www.youtube.com/watch?v=fA1NW-T1QXc" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
            <a href="#" target="_blank"><i class="fas fa-rss pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="https://goeventlpu.000webhostapp.com/" target="_blank">GOeVENT</a> &copy; 2019. </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function sendContact(){ 
	var valid;
  var userName = $("#userName").val();
  var userEmail = $("#userEmail").val();
  var content = $("#content").val();
  var contact = $("#phone").val();	
	valid = validateContact();
	if(valid==true){
        $.post('contactmail.php',
        {name:userName,email:userEmail,msg:content,phone:contact},function(data){
            $("#mail-status").html(data).fadeOut(5000);
        });
    }
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#userName").val()) {
		$("#userName-info").html("<p class='alert alert-danger '>Name Required:</p>");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#phone").val().replace(/[^0-9]/g,'')) {
		$("#userPhone-info").html("<p class='alert alert-danger '>Invalid phone no.</p>");
		$("#phone").css('background-color','#FFFFDF');
		valid = false;
	}
  if(!$("#userEmail").val()) {
		$("#userEmail-info").html("<p class='alert alert-danger'>Email Required :</p>");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("<p class='alert alert-danger'>Invalid Email</p>");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("<p class='alert alert-danger '>Meassage Required:</p>");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
</script>
</body>
</html>

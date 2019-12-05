<html>
<head>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-json/2.6.0/jquery.json.min.js"></script>

<style>
.container{
  margin-top:120px;

}
.card
{

}

</style>

</head>
<body >
<div class="container">
<div class="jumbotron">
        <div class="card">
        <div class="card-header">
           <h1>Event Manager Details</h1>
        </div>
        <div class="card-body">
           
            
              <table class="table table-hover table-light" >
                <thead>
                  <tr class="bg-info">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
 
                      $conn = mysqli_connect('localhost','root','','goevent');
                        if($conn->connect_error)
                        {
                            die("connection failed :".$conn->connect_error);
                        }
                          
                          $sql="select * from managers";
                        $result=$conn->query($sql);
                        
                      if($result->num_rows>0){
                          while ($row =$result->fetch_assoc()) {

                              echo "<tr><td>" .$row['email']."</td><td>".
                                  $row['first_name']."</td><td>".
                                  $row['specialty']."</td><td>".
                                 " <button class='btn btn-primary'>Open Profile</button>".
                                 '</td></tr>';

                            
                          }
                      }

                   ?>

                </tbody>
              </table>
            
        </div>
</div>
</div>
</div>











</body>
</html>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Auto Toll System</title>
<style>
  .regisbtn{
    float:right;
    margin-top:-8%;
    margin-right:8%;
    /* width:9%; */
  }
  .regisbtn1{
    float:right;
    margin-top:-8%;
    margin-right:2%;
    /* width:9%; */
  }
</style>
</head>

<body>
 <a href="registration.php"> <button type="button" class="btn btn-success regisbtn" >Register your vehicle</button></a>
 <a href="login.php"> <button type="button" class="btn btn-danger regisbtn1" >Logout</button></a>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="rocket_contact.png" alt="rocket_contact"/>
                
            </div>
            <!-- <form method="post"> -->
                <!-- <h3>Drop Us a Message</h3> -->
               <div class="row">
                    <div class="col-md-6">
                      <form action="insertentry.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No. *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="owner_name" class="form-control" placeholder="Owner Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="entrygate" class="form-control" placeholder="Entry Gate *" value="" />
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit Entry Data" />
                        </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                      <form action="insertexit.php" method="post">
                        <div class="form-group">
                            <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No. *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="exitgate" class="form-control" placeholder="Exit Gate *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="rfid" class="form-control" placeholder="RFID *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit Exit Data" />
                        </div>
                        </form>
                      </div>
                  </div>
              </div>
              
                        <div class="container">
                          
                          <?php
                          include("config.php");
                          $result=mysqli_query($conn,"SELECT * from entry");
                          ?>
                        <table border="6">
                          <tr>
                            <td>Vehicle_No</td>
                            <td>Owner Name</td>
                            <td>EntryGate</td>
                            <!-- <td>ExitGate</td> -->
                            <!-- <td>Distance</td> -->
                            <!-- <td>Fare</td> -->
                          </tr>
                        <?php
                        
                        while($res=mysqli_fetch_array($result)){
                          echo '<tr>';
                          echo '<td>'.$res['vehicle_no'].'</td>';
                          echo '<td>'.$res['owner_name'].'</td>';
                          echo '<td>'.$res['entrygate'].'</td>';
                          // echo '<td>'.$res['exitgate'].'</td>';
  
                          echo '</tr>';
                        }
                        
                        
                        
                        
                        ?>
                        </table>
                        </div>
                        <div class="container">
                          
                          <?php
                          include("config.php");
                          $query="SELECT * from exit";
                          $result1=mysqli_query($conn, $query);
                          ?>
                        <table border="6">
                          <tr>
                            <td>Vehicle_No</td>
                            <td>ExitGate</td>
                            <td>RFID</td>
                            
                          </tr>
                        <?php
                        
                        while($res1=mysqli_fetch_array($result1)){
                          echo '<tr>';
                          echo '<td>'.$res1['vehicle_no'].'</td>';
                          echo '<td>'.$res1['exitgate'].'</td>';
                          echo '<td>'.$res1['rfid'].'</td>';
                        
                          echo '</tr>';
                        }
                        
                        ?>
                        </table>
                        </div>
                


     
  
</body>

</html>
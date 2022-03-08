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

  /* image css  */
  #myImg {
  border-radius: 5px;
  border:2px solid black;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 25px;
  padding-bottom: 25px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 1000px;
}



/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
/* blinking text  */
.blink_text {

animation:1s blinker linear infinite;
-webkit-animation:1s blinker linear infinite;
-moz-animation:1s blinker linear infinite;

 color: red;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
                        <!-- <div class="form-group">
                            <input type="text" name="owner_name" class="form-control" placeholder="Owner Name *" value="" />
                        </div> -->
                        <div class="form-group">
                            <!-- <input type="text" name="entrygate" class="form-control" placeholder="Entry Gate *" value="" /> -->
                            <select name="entrygate" class="form-control" id="select-state" placeholder="Select Entry Point">
                            <option value="">Select entry point...</option>
                            <option value="Noida">Noida (Gate-1)</option>
                            <option value="Jewar">Jewar (Gate-2)</option>
                            <option value="Bulandshahr">Bulandshahr (Gate-3)</option>
                            <option value="Aligarh">Aligarh (Gate-4)</option>
                            <option value="Hathras">Hathras (Gate-5)</option>
                            <option value="Mathura">Mathura (Gate-6)</option>
                            <option value="Agra">Agra (Gate-7)</option>
                            <option value="Kanpur">Kanpur (Gate-8)</option>
                            
                          </select>

                        </div>
                        <!-- <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit Entry Data" />
                        </div>
                        <br>
                        <div class="form-group">
                            <h5 style="color:green;">* Current fare is ₹2.00 for each kilometer.</h5>
                            <br>
                            
                            <img id="myImg" class="center" src="smart_highway_timeline.jpeg" alt="img" style="width:20%;max-width:700px;">
                            <h6 class="center">Click above image to view roadmap 👆</h6>

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                              <span class="close">&times;</span>
                              <img class="modal-content" id="img01">
                              <div id="caption"></div>
                            </div>
                        </div>
                        </div>
                        </form>
                    
                    <div class="col-md-6">
                      <form action="insertexit.php" method="post">
                        <div class="form-group">
                            <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No. *" value="" />
                        </div>
                        <div class="form-group">
                            <!-- <input type="text" name="exitgate" class="form-control" placeholder="Exit Gate *" value="" /> -->
                            <select name="exitgate" class="form-control" id="select-state" placeholder="Select Exit Point">
                            <option value="">Select exit point...</option>
                            <option value="Noida">Noida (Gate-1)</option>
                            <option value="Jewar">Jewar (Gate-2)</option>
                            <option value="Bulandshahr">Bulandshahr (Gate-3)</option>
                            <option value="Aligarh">Aligarh (Gate-4)</option>
                            <option value="Hathras">Hathras (Gate-5)</option>
                            <option value="Mathura">Mathura (Gate-6)</option>
                            <option value="Agra">Agra (Gate-7)</option>
                            <option value="Kanpur">Kanpur (Gate-8)</option>
                            
                          </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="rfid" class="form-control" placeholder="RFID *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit Exit Data" />
                        </div>
                        </form>
                        <?php
                        $msg = @$_GET['msg'];
                        if ($msg=="error1"){
                          echo '<h5 class="blink_text" style="color:red; font-weight:bold; text-align:center;">Error : No such vehicle found in database...!!</h5>';
                        }

                        elseif($msg=="error2"){
                          echo '<h5 class="blink_text" style="color:red; font-weight:bold; text-align:center;">Error : RFID and vehicle number are not matched...!!</h5>';
                        }
                        elseif($msg=="error3"){
                          echo '<h5 class="blink_text" style="color:red; font-weight:bold; text-align:center;">Error : Vehicle is not scanned at any entry point...!!</h5>';
                        }
                        elseif($msg=="error4"){
                          echo '<h5 class="blink_text" style="color:red; font-weight:bold; text-align:center;">Error : Low Balance, recharge vehicle RFID...!!</h5>';
                          echo '<a  href="topuprfid.php"> <button style="position:absolute; left:40%; background:red; color:white; border:none; border-radius:17px; padding:10px 25px;" class="blink_text" type="button" class="btn btn-danger regisbtn1" >Card Topup</button></a>';
                        }
                        elseif($msg=="success1"){
                          echo '<h5 class="blink_text" style="color:green; font-weight:bold; text-align:center;">Success : Vehicle Entered...!!</h5>';
                        }
                        elseif($msg=="success2"){
                          echo '<h5 class="blink_text" style="color:green; font-weight:bold; text-align:center;">Success : Vehicle Exited and Toll Deducted...!!</h5>';
                        }


                        ?>
                          
                      </div>
                  </div>
              </div>
              <?php
                          include("config.php");
                          $result=mysqli_query($conn,"SELECT * from vehiclehistory order by id desc ");
                          $total = mysqli_num_rows($result);
                          ?>
                          <div class="container">
                <table border="6" style="background:white; width:100%; margin-bottom:60px;border-color:#d8c071;">
                  <thead>
                    <tr style="text-align:center;">
                      <th>S No.</th>
                      <th>Vehicle No.</th>
                      <th>Vehicle Name</th>
                      <th>Entry Point</th>
                      <th>Entry At</th>
                      <th>Exit Point</th>
                      <th>Exit At</th>
                      <th>Time Taken(Min)</th>
                      <th>Distance</th>
                      <th>Fare</th>
                      <th>Status</th>

                    </tr>
                  </thead>
                  <tbody  style="text-align:center; ">

                  <?php
                        
                        while($res=mysqli_fetch_array($result)){
                          $vehicle_no=$res['vehicle_no'];
                          $result1 = mysqli_query($conn,"SELECT * from `vehicleregistration` where vehicle_no ='$vehicle_no'");
                          $res1 = mysqli_fetch_array( $result1);
                          
                          $vehicle_name= $res1['vehicle_name'];

                          
                          $entrygate= $res['entrygate'];
                          $exitgate= $res['exitgate'];
                          $entrytime= $res['entrytime'];
                          $exittime= $res['exittime'];
                          // $timetaken = "SELECT TIME_TO_SEC(TIMEDIFF('$exittime', '$entrytime'))";

                          $result3 = mysqli_query($conn, "SELECT TIMESTAMPDIFF(MINUTE, '$entrytime', '$exittime') as timetaken") or die('Error');
                          $row1=mysqli_fetch_array($result3);
                          // $timetaken=$row1['timetaken'];
                          $result2 = mysqli_query($conn,"SELECT * from distance where entrygate ='$entrygate' and exitgate= '$exitgate'") or die("Error: " . mysqli_error($conn));
                          $err= mysqli_num_rows($result2);
                          if ($err==0){
                            $distance = "___";
                            $fare = "___";
                            $timetaken = "___";
                          }
                          else{
                            $res2 = mysqli_fetch_array( $result2);
                            $timetaken=$row1['timetaken'];
                            $distance= $res2['distance'];
                            $fare = $distance * 2;
                            
                          }
                          
                          

                          echo '<tr>';
                          echo '<td>'.$total--.'</td>';
                          echo '<td>'.$res['vehicle_no'].'</td>';
                          echo '<td>'.$vehicle_name.'</td>';
                          echo '<td>'.$res['entrygate'].'</td>';
                          echo '<td>'.$res['entrytime'].'</td>';
                          echo '<td >'.$res['exitgate'].'</td>';
                          echo '<td>'.$res['exittime'].'</td>';
                          echo '<td>'.$timetaken.' Min(s)'.'</td>';
                          echo '<td>'.$distance.' Km(s)'.'</td>';
                          echo '<td>'.'₹ '.$fare.'.00'.'</td>';
                          $status = $res['status'];
                          if ($status == "PASSED"){
                            echo '<td style="color:green; font-weight:bold;">'.$res['status'].'</td>';
                          }
                          else{
                            // echo '<td style="color:darkorange; font-weight:bold;">'.$res['status'].'</td>';
                            echo '<td style="color:darkorange; font-weight:bold;">'.'<span class="blink_text">'.$res['status'].'</span>'.'</td>';
                            
                          }
                          

                          // echo '<td>'.$res['exitgate'].'</td>';
  
                          echo '</tr>';
                        }
                        
                        
                        
                        
                        ?>
                  </tbody>
                </table>


                </div>   
                        
                        
                        
                       
                <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


     
  
</body>

</html>


<!-- <colgroup>
       <col span="1" style="width: 2%;">
       <col span="1" style="width: 5%;">
       <col span="1" style="width: 5%;">
       <col span="1" style="width: 10%;">
       <col span="1" style="width: 5%;">
    </colgroup>
 <table id="example" class="table table-bordered  nowrap" style="width:100%"> -->
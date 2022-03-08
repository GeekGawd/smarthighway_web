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
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Vehicle Registration</title>
  <style>
      body{
    background: -webkit-linear-gradient(left, #96fa96, #d8c071);
}

.contact-form{
    background: #fff;
    margin-top: 2%;
    margin-bottom: 5%;
    width: 100%;
    
}
.contact-form .form-control{
    border-radius:1rem;
    
}
h1{
    text-align: center;
    padding: 20px;
}
.contact-image img{
    /* border-radius: 6rem; */
    width: 18%;
    margin-top: -15%;
    /* transform: rotate(-29deg); */
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.regisbtn{
    float:right;
    margin-top:2%;
    margin-right:0.7%;
    /* width:9%; */
  }
  .regisbtn1{
    
    float:right;
    margin-top:2%;
    margin-right:2%;
    /* width:9%; */
  }
  .contact-image{
    text-align: center;
}
  .contact-image{
    /* border-radius: 6rem; */
    width: 100px;
    margin-top: 20px;
    /* transform: rotate(-29deg); */
}
  </style>

</head>

<body>
<a href="login.php"> <button type="button" class="btn btn-danger regisbtn1" >Logout</button></a>
<a href="tolling.php"> <button type="button" class="btn btn-success regisbtn" >Back to Portal</button></a>
        

    <div class="container">
    
                <img class="contact-image" src="rocket_contact.png" alt="rocket_contact"/>
                <h1>Register Your Vehicle Here</h1>
            
        
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
               <div class="row">
               
                    <div class="col-md-6">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle No. *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="vehicle_name" class="form-control" placeholder="Vehicle Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="owner_name" class="form-control" placeholder="Owner Name *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top:73px">
                        <div class="form-group">
                            <input type="text" name="owner_contact" class="form-control" placeholder="Owner Contact *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="owner_address" class="form-control" placeholder="Owner Address *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="rfid" class="form-control" placeholder="Rfid *" value="" />
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Register" />
                        </div>
                        
                    </div>
                    
                  </div>
                  </form>
              </div>
</div>


                    
                         



     
  
</body>

</html>
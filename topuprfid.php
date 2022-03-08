<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rfid TopUp</title>
    <style>
        body{
            background:-webkit-linear-gradient(left, #96fa96, #d8c071);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        *{
            box-sizing:border-box;
        }
        form{
            width:500px;
            border:2px solid #ccc;
            padding:30px;
            background:#fff;
            border-radius:15px;
        }
        h2{
            text-align:center;
            margin-bottom:40px;
            color:darkgreen;
        }
        input{
            display:block;
            border:2px solid #ccc;
            width:95%;
            padding:10px;
            margin:10px auto;
            border-radius:5px;
        }
        label{
            font-size:18px;
            padding:10px;
        }
        button{
            float:right;
            background:green;
            padding:10px 15px;
            color:#fff;
            border-radius:5px;
            margin-right:10px;
            border:none;
        }
        button:hover{
            opacity:.7;
        }
        .error{
            background:red;
            color:white;
            padding:10px;
            width:95%;
            border-radius:5px;
            margin: 20px auto;
        }
        .contact-image{
    text-align: center;
}
.contact-image img{
    /* border-radius: 6rem; */
    width: 35%;
    /* margin-top: %; */
    /* transform: rotate(-29deg); */
}
    </style>
</head>
<body>
    <form action="recharge.php" method="POST">
    <div class="contact-image">
                <img src="rocket_contact.png" alt="rocket_contact"/>
                <h2>Top Up vehicle's RFID Card</h2>
            </div>
        
        <?php
        if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'] ; ?></p>
        <?php } ?>
        
        <label for="">RFID card Number :</label>
        <input type="text" name="rfidnumber" placeholder="Unique RFID"><br>

        <label for="">Amount :</label>
        <input type="text" name="amountcredit" placeholder="Amount to be credited"><br>

        <button name="btnSubmit" type="submit">Recharge</button>
    </form>
    
</body>
</html>
<?php
$server="localhost";
$username="root";
$password="";
$dbname="smarthighway";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['rfidnumber']) && !empty($_POST['amountcredit'])){
        $rfidnumber=$_POST['rfidnumber'];
        $amountcredit=$_POST['amountcredit'];

        $rfidd= mysqli_query($conn,"SELECT * from `vehicleregistration` where `rfid`='$rfidnumber' ");
        $resultrfid=mysqli_fetch_array($rfidd);
        $rfid_balance = $resultrfid['rfid_balance'];
        $updatedbalance=$rfid_balance + $amountcredit;
                $credit = mysqli_query($conn, "UPDATE `vehicleregistration` set `rfid_balance`='$updatedbalance' where `rfid`= '$rfidnumber'");
            
            
        if($credit){
            // echo "form submitted successfully";
            header("location:tolling.php");

        }
        else{
            echo "form not submitted";
        }
    }
    

    }
    
    else{
        echo "connection is failed at entry gate";
    }

?>
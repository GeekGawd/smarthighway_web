<?php
$server="localhost";
$username="root";
$password="";
$dbname="smarthighway";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['vehicle_no']) && !empty($_POST['exitgate']) && !empty($_POST['rfid'])){
        $vehicle_no=$_POST['vehicle_no'];
        $exitgate=$_POST['exitgate'];
        $rfid=$_POST['rfid'];

        $rfidd= mysqli_query($conn,"SELECT * from `vehicleregistration` where `rfid`='$rfid' and `vehicle_no`='$vehicle_no' ");
        // print_r(mysqli_error($conn));
        // print_r($rfidd);
        // print_r(mysqli_num_rows($rfidd));
        // exit();
        if (mysqli_num_rows($rfidd)==0){
            header("Location:tolling.php?msg=error2");
        }
        else{
            $resultrfid=mysqli_fetch_array($rfidd);
            $rfid_balance = $resultrfid['rfid_balance'];
            $result=mysqli_query($conn,"SELECT * from vehiclehistory where `vehicle_no` = '$vehicle_no' order by `id` desc limit 1 ");
           
            // print_r(mysqli_error($conn));
            $result1=mysqli_fetch_array($result);
            $exitgatefromdb = $result1['exitgate'];
            if (isset($exitgatefromdb)){
                header("Location:tolling.php?msg=error3");
            }
            // print_r($exitgatefromdb);
            // exit();
        
        
            // $total = mysqli_num_rows($result);
            // print_r($total);
            // if($total ==0){
                // print_r($result);
                // print_r(mysqli_num_rows($result));
                
                // exit();
                
                // print_r("inside if");
                
                
            // }
            else{
            
            $entrygate=$result1['entrygate'];
            $result2 = mysqli_query($conn,"SELECT * from distance where entrygate ='$entrygate' and exitgate= '$exitgate'") or die("Error: " . mysqli_error($conn));
            $res2 = mysqli_fetch_array( $result2);                
            $distance= $res2['distance'];
            $fare = $distance * 2;
            print_r($rfid_balance);
            print_r($fare);
            // exit();
            if ($rfid_balance < $fare){
                header("Location:tolling.php?msg=error4");
            }
            else{
                $updatedbalance=$rfid_balance-$fare;
                $deduct = mysqli_query($conn, "UPDATE `vehicleregistration` set `rfid_balance`='$updatedbalance' where `vehicle_no`= '$vehicle_no'");
            
            $query = "SELECT * from `vehiclehistory` where `vehicle_no`= '$vehicle_no' ORDER BY `id` DESC LIMIT 1";

        

        // $query = "insert into entry(vehicle_no,entrygate) values('$vehicle_no' , '$entrygate')";
        
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        $result= mysqli_fetch_array($run);
        $id= $result['id'];
        // UPDATE history SET status='finished' WHERE username='$_SESSION[username]' AND eid='$_GET[eid]' ")
        $query="UPDATE vehiclehistory set `exitgate` = '$exitgate', `exittime`=Now() , `status`='PASSED' where `id`='$id'  ";
        // $query="INSERT INTO `exit`(`exitgate`,`rfid`) VALUES ('$exitgate','$rfid') from `exit`(`exitgate`,`rfid`) VALUES ('$exitgate','$rfid') where vehicle_no='UP14BC1234'";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            // echo "form submitted successfully";
            header("location:tolling.php?msg=success2");

        }
        else{
            echo "form not submitted";
        }
    }
    }
        }

    }
    
    else{
        echo "connection is failed at entry gate";
    }
}

?>
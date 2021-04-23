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


        // $query = "insert into entry(vehicle_no,entrygate) values('$vehicle_no' , '$entrygate')";
        $query="INSERT INTO `exit`(`vehicle_no`, `exitgate`,`rfid`) VALUES ('$vehicle_no','$exitgate','$rfid')";
        // $query="INSERT INTO `exit`(`exitgate`,`rfid`) VALUES ('$exitgate','$rfid') from `exit`(`exitgate`,`rfid`) VALUES ('$exitgate','$rfid') where vehicle_no='UP14BC1234'";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            // echo "form submitted successfully";
            header("location:tolling.php");

        }
        else{
            echo "form not submitted";
        }

    }
    else{
        echo "connection is failed at entry gate";
    }
}

?>
<?php
$server="localhost";
$username="root";
$password="";
$dbname="smarthighway";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['vehicle_no']) && !empty($_POST['vehicle_name']) && !empty($_POST['owner_name']) && !empty($_POST['owner_contact']) && !empty($_POST['owner_address']) && !empty($_POST['rfid'])){
        $vehicle_no=$_POST['vehicle_no'];
        $vehicle_name=$_POST['vehicle_name'];
        $owner_name=$_POST['owner_name'];
        $owner_contact=$_POST['owner_contact'];
        $owner_address=$_POST['owner_address'];
        $rfid=$_POST['rfid'];


        // $query = "insert into entry(vehicle_no,entrygate) values('$vehicle_no' , '$entrygate')";
        $query="INSERT INTO `vehicleregistration` (`vehicle_no`, `vehicle_name`, `owner_name`, `owner_contact`, `owner_address`, `rfid`) VALUES ('$vehicle_no', '$vehicle_name', '$owner_name', '$owner_contact', '$owner_address', '$rfid')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            // echo "form submitted successfully";
            // header("location:registration.php");
            // echo 'alert("Registration successful")';
            echo "<script>alert('Vehicle Registration successful');</script>";

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
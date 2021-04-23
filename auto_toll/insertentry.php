<?php
$server="localhost";
$username="root";
$password="";
$dbname="smarthighway";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['vehicle_no']) && !empty($_POST['owner_name']) && !empty($_POST['entrygate'])){
        $vehicle_no=$_POST['vehicle_no'];
        $owner_name=$_POST['owner_name'];
        $entrygate=$_POST['entrygate'];


        // $query = "insert into entry(vehicle_no,entrygate) values('$vehicle_no' , '$entrygate')";
        $query="INSERT INTO `entry`(`vehicle_no`,`owner_name`, `entrygate`) VALUES ('$vehicle_no','$owner_name','$entrygate')";

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
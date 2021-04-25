<?php
$server="localhost";
$username="root";
$password="";
$dbname="smarthighway";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnSubmit'])){
    if(!empty($_POST['vehicle_no']) && !empty($_POST['entrygate'])){
        $vehicle_no=$_POST['vehicle_no'];
        // $owner_name=$_POST['owner_name'];
        $entrygate=$_POST['entrygate'];
        $status="ON HIGHWAY";

        $vehiclereg="SELECT * from `vehicleregistration` where `vehicle_no`= '$vehicle_no' ";
        $run = mysqli_query($conn,$vehiclereg) or die(mysqli_error());
        // print_r(mysqli_error($conn));
        
        $resu = mysqli_num_rows($run);
        // print_r($resu);
        // exit();
        if($resu == 0){
            header("location:tolling.php?msg=error1"); 
        }
        else{
        // $query = "insert into entry(vehicle_no,entrygate) values('$vehicle_no' , '$entrygate')";
        $query="INSERT INTO `vehiclehistory`(`vehicle_no`, `entrygate`, `entrytime`,`status`) VALUES ('$vehicle_no','$entrygate', NOW(),'$status')";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            // echo "form submitted successfully";
            header("location:tolling.php?msg=success1");

        }
        else{
            echo "form not submitted";
        }
    }
    }
    else{
        echo "connection is failed at entry gate";
    }
}

?>
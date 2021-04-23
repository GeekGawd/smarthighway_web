<?php

$con=mysqli_connect("localhost","root","","smarthighway");
$response=array();
if($con){
    $sql = "select * from userdata";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['vehicle_no']=$row['vehicle_no'];
            $response[$i]['owner_name']=$row['owner_name'];
            $response[$i]['mobile_no']=$row['mobile_no'];
            $response[$i]['rfid']=$row['rfid'];
            $response[$i]['balance']=$row['balance'];
            $i++;

        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Connection is failed";
}

?>
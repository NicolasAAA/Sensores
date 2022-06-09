<?php

include './connect.php';
$json=array();

$connect = mysqli_connect($hostname, $username, $password, $database);
$query = "select * from dht11 where id= '1' ";
$results = mysqli_query($connect, $query);   
mysqli_close($connect);
echo json_encode($json);

   
if($data=mysqli_fetch_array($results)){
    $result["temperature"]=$data['temperature'];
    $result["humidity"]=$data['humidity'];
    $json=$result;
    if($result["temperature"]<15){
      <script>
      wndow.alert("niveles de temperatura y humedad altos");
      <script>
      break;

    }
    if($result["humidity"]<20){
      <script>
      wndow.alert("niveles de temperatura y humedad altos");
      <script>
        break;
  
  
      }
    
}
else{
    $result["temperature"]='0';
    $result["humidity"]='0';
    $json=$result;
}




mysqli_close($connect);
echo json_encode($json);
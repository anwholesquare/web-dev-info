//CONNECTING WITH MYSQL AND FETCH ARRAY TO JSON ENCODE (SIMPLE JSON GENERATOR)
<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "database_user" , "database_password" , "database_name"); 
$sql1 ="SELECT `Tickets` as TICKETS, `Name` as NAME, `Location` as MAP FROM `lottery` ORDER BY RAND() LIMIT 100;";
$result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) {
         $mainArray[] = $row;
     }
$js_array = json_encode($mainArray);
echo $js_array;
$conn->close();
?>





//CONNECTING WITH MYSQL AND FETCH ONLY A STRING
<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "database_user" , "database_password" , "database_name");
$user = $_POST['username'];
$pass = $_POST['pass'];
$result = mysqli_query($conn, "SELECT description FROM `admin` where id = 8");
$row = mysqli_fetch_assoc($result);
$password =  $row['description'];

$conn->close();

?>




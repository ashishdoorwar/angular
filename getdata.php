<?php  
error_reporting(0);
include('dbconnect.php');
header("Access-Control-Allow-Origin: *");   
header("Content-Type: application/json; charset=UTF-8");    
$sql = "SELECT * FROM mod_state";  
 $result=mysqli_query($con,$sql);
 $outp = ""; 
while($rs = mysqli_fetch_array($result)) {     
    if ($outp != "") {$outp .= ",";}     
    $outp .= '{"id":"'  . $rs["nstateid"] . '",'; 
    $outp .= '"name":"'   . $rs["vstate_name"]  . '"}'; 
    } 
$outp ='{"details":['.$outp.']}'; 
echo($outp); 
?>   
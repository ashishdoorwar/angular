 <?php  
include_once("dbconnect.php"); 

header("Access-Control-Allow-Origin: *");   
header("Content-Type: application/json; charset=UTF-8");  
 $output = '';  
 $query = "SELECT * FROM upload ORDER BY id DESC";  
 $result = mysqli_query($con, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  
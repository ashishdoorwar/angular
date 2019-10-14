<?php
include_once("dbconnect.php");
print_r($_POST);
if(!empty($_FILES))  
 {  
      $path = 'upload/' . $_FILES['file']['name'];  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
            $insertQuery = "INSERT INTO upload(file,state,stamp) VALUES ('".$_FILES['file']['name']."','".$state."','".$stamp."')";  
           if(mysqli_query($con, $insertQuery))  
           {  
                echo 'File Uploaded';  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved';  
           }  
      }  
 }  
 else  
 {  
      echo 'Some Error';  
 }  
?>
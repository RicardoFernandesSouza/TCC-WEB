<?php  
 $connect = mysqli_connect("localhost", "root", "", "tohomecrud");  
 $number = count($_POST["name"]);

 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO tbl_name(name,details,id_residencia) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."','".mysqli_real_escape_string($connect, $_POST["details"][$i])."','".mysqli_real_escape_string($connect, $_POST["id_residencia"][$i])."')";  
                mysqli_query($connect, $sql);
               // $sql = " UPDATE tbl_name SET details = ('".mysqli_real_escape_string($connect, $_POST["details"][$i])."')
                 //         WHERE name = ('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                //mysqli_query($connect, $sql);    
           }  
      }  
      echo "Data Inserted"; 
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
 
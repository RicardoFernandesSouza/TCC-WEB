<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'tohomecrud');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["name"]);
$details = mysqli_real_escape_string($connect, $input["details"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE tbl_name1 
 SET name = '".$name."', 
 details = '".$details."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM tbl_name1
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
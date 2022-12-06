<?php
include '../connection.php';
//POST 

session_start(); 
$first_name= $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$preferred_name = $_POST['preferred_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$date_of_joining = $_POST['date_of_joining'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sqlQuery = "INSERT INTO emp_table SET first_name='$first_name' , middle_name='$middle_name' , last_name='$last_name' , gender='$gender' ,preferred_name='$preferred_name', email='$email' , date_of_joining='$date_of_joining' ";

}
$resultofQuery = $connectNow->query($sqlQuery);

if($resultofQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));

}
?>
<?php 
require_once("config.php");
if((isset($_POST['username'])&& $_POST['username'] !='') && (isset($_POST['delivname'])&& $_POST['delivname'] !=''))
{
 require_once("contact_mail.php");

$yourName = $conn->real_escape_string($_POST['username']);
$delivName = $conn->real_escape_string($_POST['delivname']);
$yourPhone = $conn->real_escape_string($_POST['delivaddress']);
$comments = $conn->real_escape_string($_POST['delivitems']);

$sql="INSERT INTO contact_form_info (name, name, name, name) VALUES ('".$yourName."','".$delivName."', '".$yourPhone."', '".$comments."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
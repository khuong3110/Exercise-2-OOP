<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("classes/user.class.php");
include_once("classes/admin.class.php");
include_once("classes/regular.class.php");

$khuong = new admin('Administrator', 'kkhuong');
$khuat = new regular ('Regular User', 'kkhuat');

$khuong->user_type = '1';
$khuong->first_name = 'khuong';
$khuong->last_name = 'khuong';
$khuong->email_address = 'khuong@iupui.edu';

$khuat->user_type = '2';
$khuat->first_name = 'khuat';
$khuat->last_name = 'khuat';
$khuat->email_address = 'khuat@iupui.edu';

echo "User Level: " . $khuong->user_level . "<br>" .
				"Registered User ID: " . $khuong->user_id . "<br>" .
				"Registered User Type: " . $khuong->user_type . "<br>" .
				"Registered First Name: " . $khuong->first_name . "<br>" .
				"Registered Last Name: " . $khuong->last_name . "<br>" .
				"Registered Email: " . $khuong->email_address . "<br>";

echo "<hr>";

echo "User Level: " . $khuat->user_level . "<br>" .
				"Admin User ID: " . $khuat->user_id . "<br>" .
				"Admin User Type: " . $khuat->user_type . "<br>" .
				"Admin First Name: " . $khuat->first_name . "<br>" .
				"Admin Last Name: " . $khuat->last_name . "<br>" .
				"Admin Email: " . $khuat->email_address . "<br>";


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise 2: OOP</title>
</head>
<body>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 3. Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement. -->

<form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <button type="submit" value="Submit Name">Submit</button>
 </form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name </h3>"."<br>";

// 4. Write a PHP script to get the client's IP address.
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'] . "<br>" ; 

// 5. Write a PHP script to get the current file name.
$current_file_name = basename($_SERVER['PHP_SELF']);
echo "current file is   $current_file_name.";

?>
</body>
</html>
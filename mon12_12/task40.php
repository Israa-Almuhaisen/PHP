<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
// 1- Write a PHP script to display string, values within a table. 
$A=1000;
$B=1200;
$C=1400;
echo "<table border=1>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$A$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$B$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$C$</font></td></tr>
</table>";
$_SESSION["table"] =<table border=1>;

echo "<br>";

// 2-Write a PHP script to get the last modified information of a file. 
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
$_SESSION["Last modified"]=. date("l, dS F, Y, h:ia", $file_last_modified);
echo "<br>";

//3-Write a PHP script to count number of lines in a file.
// Note: Store a text file name into a variable and count the number of lines of text it has.

$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
$_SESSION["no_of_line"]=$no_of_lines; 
?>

</body>
</html>
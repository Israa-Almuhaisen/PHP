<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=-, initial-scale=1.0">
    <title>task</title>
</head>
<body>
    <?php
    // 1.	Write a script to generate the following paragraph 
 
    // "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    // The words 'red', 'green' and 'white' should come from $colors array.
    
    $color = array('green','red','white');
   echo "The memory of that scene for me is like a frame of film forever frozen at that moment:  the  $color[1] carpet, the $color[0]lawn, the  $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
   echo "<br>";
   echo "<br>";
   

//    2.	$colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// •	green
// •	red
// •	white

foreach ($color as $value)
{
echo "<li>$value</li>";
}

echo "<br>";
echo "<br>";

// 3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
print_r ($cities);
echo "<br>";
foreach ($cities as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}

echo "<br>";
echo "<br>";
// 4.$color = array (4 => 'white', 6 => 'green', 11=> 'red');

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo current($color);
echo "<br>";
echo "<br>";

// 5.Write a PHP script that inserts a specific new item in an array in any position.
 // Sample Input:
// Array 1 2 3 4 5   
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5

$first = array("1","2","3","4","5");
echo implode($first);
echo"<br>";
array_splice($first, 3, 0, "$");
echo implode($first);
echo"<br>";
echo"<br>";


// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
foreach($fruits as $a=>$b)
{
echo "$a=$b"."<br>";
}


?>
</body>
</html>
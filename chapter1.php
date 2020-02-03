<?php 
// Navneet Kaur (1053)
    $base = 3;
    $height = 7.124;
$area = ($base*$height)/2; // calculating the area
echo "The area of triangle is: ".round($area,2)."<br>"; // displaying the area result
define("MY_NAME", "Navneet Kaur"); //  defining CONST
echo "My Full Name Is : <strong> ".strtoupper(MY_NAME)."</strong> <br>"; // displaying CONST in uppercase


$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
$rest = explode(" ",$string); // exploding string to array

sort($rest); // sorting

$clength = count($rest); //getting length of an array
echo "<h1> My Sorted List Is : </h1> <br>";
for($x = 0; $x < $clength; $x++) {
    echo $rest[$x]; // displaying the result
    echo "<br>";
}


?>
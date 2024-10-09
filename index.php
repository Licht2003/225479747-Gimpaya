<?php
echo"Activity 1: Number Counter";
echo "<br>";
$i=1;
while ($i <=10){
    echo $i." ";
    $i++;
}

echo "\n";

$i = 1;
while($i <= 20){
    if($i % 2==0){
        echo $i." ";
    }
    $i++;
}
?> 

<br>
<br>


<?php
echo"Activity 3: Multiplication Table";
echo"<br>";
$number = 7;
for ($i = 1; $i <= 10; $i++) {

    $result = $number * $i;
    echo $number . " x " . $i . " = " . $result ;
    echo"<br>";
}
?>
<br>
<br>


<?php
echo "Activity 4: Loop Control with break and continue";
echo"<br>";
for ($i = 1; $i <= 10; $i++) {
  
    if ($i == 5) {
        continue; 
    }
    if ($i == 9) {
        break; 
    }
    echo $i . " ";
}
?>
<br>
<br>

<?php
echo "Activity 5: Sum of Numbers";
echo"<br>";
$sum = 0;
$i = 1;

while ($i <= 100) {
    $sum += $i; 
    $i++;
}
echo "The sum of numbers from 1 to 100 is: " . $sum;
?>
<br>
<br>

<?php
echo "Activity 6: Array Iteration with foreach";
echo"<br>";
$favoriteMovies = array(
    "1. The Shawshank Redemption",
    "2. Inception",
    "3. The Dark Knight",
    "4. Interstellar",
    "5. Parasite"
);

foreach ($favoriteMovies as $movie) {
    echo $movie ;
    echo"<br>";
}
?>

<br>
<br>

 <?php
 echo"Activity 7: Key-Value Pairs with foreach";
 echo"<br>";
$studentInfo = array(
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
);
foreach ($studentInfo as $key => $value) {
    echo $key . ": " . $value ;
    echo"<br>";
}
?>
<br>
<br>

<?php
echo"Activity 8: Factorial Calculator";
echo"<br>";
$number = 5;

$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial = $factorial * $i;
}
echo "Factorial of $number is: $factorial\n";

?>
<br>
<br>

<?php
echo "Activity 9: FizzBuzz Challenge";
echo"<br>";
 for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    else if ($i % 3 == 0) {
        echo "Fizz ";
    }
    else if ($i % 5 == 0) {
        echo "Buzz ";
    }
    else {
        echo $i . " ";
    }
}
?>
<br>
<br>

<?php
echo "Activity 10: Prime Number Checker";
echo"<br>";
$number = 17; 
$isPrime = true;
if ($number < 2) {
    $isPrime = false; 
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false; 
            break; 
        }
    }
}
if ($isPrime) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
<br>
<br>

<?php
echo "Activity 11: Fibonacci Sequence";
echo"<br>";
$fib1 = 0;
$fib2 = 1;
echo $fib1 . " " . $fib2 . " ";
$count = 2; 
while ($count < 10) {
    $nextFib = $fib1 + $fib2;
    echo $nextFib . " ";
    $fib1 = $fib2;
    $fib2 = $nextFib;
    $count++;
}
?>
<br>
<br>

<?php
echo"Activity 12: Reverse a String";
echo"<br>";
$inputString = "Hello";
$reversedString = "";
$length = strlen($inputString);
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i];
}
  echo "Input: \"$inputString\"\n";
  echo "Output: \"$reversedString\"\n";
?>

 
 
 

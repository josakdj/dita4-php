<?php

// $age = 15;

// switch ($age){
//     case ($age >=0 && $age < 18):
//         echo "you are a minor";
//     case ($age >= 18 && $age <= 25);
//         echo "you are a young adult";
//     case ($age > 25):
//         echo "you are an adult";
//     default:
//         echo "invalid age input";
//         break;
// };


// $day = "thursday";

// switch ($day) {
//     case "monday":
//         echo "Its Monday! Start of the week";
//         break;
//     case "tuesday":
//         echo "Its Tuesday! Three More Days Till Friday";
//         break;
//     case "wednesday":
//         echo "Its Wednesday! Two More Days Till Friday";
//         break;
//     case "thursday":
//         echo "Its Thursday! One More Day Till Friday";
//         break;
//     case "friday":
//         echo "Its Friday!";
//         break;
//     case "saturday":
//         echo "its a rest day keep resting";
//         break;
//     case "sunday":
//         echo "Tomorrow is Monday Start Of The Week Again";
//         break;
//     default:
//     echo "invalid day";
//     break;
// }

$x = 1;

while($x <= 5){
    echo "The number is: $x <br>";
    $x++;
}

echo "<br>";
echo "<br>";
echo "<br>";

$x = 1;

do{
    echo "the number is: $x <br>";
    $x++;
} while($x <= 8);

echo "<br>";
echo "<br>";
echo "<br>";

for ($x=0; $x <=10; $x++){
    echo "the number is: $x <br>";
};


echo "<br>";
echo "<br>";
echo "<br>";
$cars = ["BMW", "VW", "Audi", "Tesla"];
var_dump($cars[2]);
echo "<br>";

foreach ($cars as $value) {
    echo "$value <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

$age = ["John"=>"18", "Filan"=>"23", "Joe"=>"60"];

foreach($age as $x => $value){
    echo "$x = $value <br>";
}

phpinfo();

$x = "hello";
print_r($x);

echo "<br>";
echo "<br>";
echo "<br>";

var_dump($x);

$x = 5;
echo gettype($x) . "<br>";
$y = 10.3;
echo gettype($y) . "<br>";
$z = "hello";
echo gettype($z) . "<br>";

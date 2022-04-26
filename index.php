<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>

<h1>Author : Shadman Shariar</h1>    
<h1> PHP Backend Testing </h1>

</div>
<div>
<?php
$name = $_POST["name"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$sum = $number1 + $number2;
echo "Hello, ". $name;
echo "</br>"; 
echo "Total Sum is : ".(string)$sum;
$arr = array("Anik","Shadman","Shariar");
echo "</br>"; 
echo $arr[1];
$sum =0;
$numb = array(1,3,5,4);
$mul = 1; // for each
foreach ($numb as $temp){ $mul*=$temp; }
echo $mul;
echo "</br>";
//for
for ($i = 0 ; $i < count($numb) ; $i++){

    $sum+=$numb[$i];
}
echo $sum;
//While
while ($sum>=1){
echo $sum;
echo "</br>";
$sum--;
}
echo (min(0, 150, 30, 20, -8, -200));
echo "</br>";
echo (max(0, 150, 30, 20, -8, -200));
echo "</br>";
echo (pi());
echo "</br>";
echo (abs(4.56));
echo "</br>";
printOk();
echo "</br>";s
$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "red!";
    break;
  case "blue":
    echo "blue!";
    break;
  case "green":
    echo "green!";
    break;
  default:
    echo "LOL";
}
function printOk (){
echo "</br>";
echo "I'm From Function";

}

?>
</div>

</body>
</html>
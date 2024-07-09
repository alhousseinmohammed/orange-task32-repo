<?php
// 2
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
  $sum += $i;
}
echo $sum . "<br>";
echo "<br>";

// 3
$alphabet = ["A", "B", "C", "D", "E"];
for ($i = 1; $i <= sizeof($alphabet); $i++) {
  for ($o = 0; $o < sizeof($alphabet) - $i; $o++) {
    echo $alphabet[0] . " ";
  }
  for ($e = 0; $e < $i; $e++) {
    echo $alphabet[$i - 1] . " ";
  }
  echo "<br>";
}
echo "<br>";

// 4
echo "<pre>";

$numbers = [1, 2, 3, 4, 5];
for ($i = 1; $i <= sizeof($numbers); $i++) {
  for ($o = 0; $o < 5 - $i; $o++) {
    echo $numbers[0] . " ";
  }
  for ($e = 0; $e < $i; $e++) {
    echo $numbers[$i - 1] . " ";
  }
  echo "<br>";
}
echo "<br>";
echo "</pre>";

// 5
echo "<pre>";
$numbers = [1, 2, 3, 4, 5];
for ($y = 0; $y < sizeof($numbers); $y++) {
  for ($x = 0; $x < sizeof($numbers); $x++) {
    echo "<pr>";
    $z = 0;
    if ($x == $y) {
      $z = $x = $y;
    }
    echo $z . " ";
    $z = 0;
  }
  echo "<br>";
}
echo "<br>";
echo "</pre>";

// 6
$number = 5;
$factorial = 1;
for ($i = $number; $number > 0; $number--) {
  $factorial *= $number;
}
echo $factorial . "<br>";
echo "<br>";

// 7

// 8
$string = "Orange Coding Academy";
echo substr_count(strtolower($string), "c") . "<br>";
echo "<br>";
echo $string;

// 9
echo "<table border= '1' cellpadding = '3' cellspacing = '0px'>";
for ($i = 1; $i <= 6; $i++) {
  echo "<tr >";
  for ($o = 1; $o <= 5; $o++) {
    echo "<td  style = 'padding-right: 80px;'>";
    $io = $i * $o;
    echo "$i * $o = $io";
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>" . "<br>";
echo "<br>";

// 10
for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0) {
    if ($i % 5 == 0) {
      echo "FizzBuzz ";
    } else {
      echo "Fizz ";
    }
  } elseif ($i % 5 == 0) {
    echo "Buzz ";
  } else {
    echo $i . " ";
  }
}
echo "<br>";

// 11
// for ($i = 1; $i <= 15; $i++) {
//   for ()
// }

// 12

echo "<pre>";
$letters = ["A", "B", "C", "D", "E"];
for ($i = 0; $i <= sizeof($letters); $i++) {
  for ($o = 0; $o < sizeof($letters) - $i; $o++) {
    echo " ";
  }
  for ($e = 0; $e < $i; $e++) {
    echo $letters[$e] . " ";
  }
  echo "<br>";
};
for ($i = sizeof($letters) - 1; $i >= 0; $i--) {
  for ($o = 0; $o < sizeof($letters) - $i; $o++) {
    echo " ";
  }
  for ($o = 0; $o < $i; $o++) {
    echo $letters[$o] . " ";
  }
  echo "<br>";
};
echo "</pre>";

// 1
function is_primar($num)
{
  for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
      echo "$num is a prime number";
      break;
    } else {
      echo "$num is not a prime number";
      break;
    }
  }
  echo "<br><br>";
}

is_primar(3);

// 2
function reverse($string)
{
  for ($i = 0; $i < strlen($string); $i++) {
    $string[-$i] = $string[$i];
  }
  echo $string . "<br><br>";
}

reverse("remove");

// 3

<?php
$num = 12345;
$forThisNumber = $num;
$rev = 0;
while($num > 0)
{
  $a = $num % 10; // 1st time = 5
  $rev = ($rev * 10) + $a; // 1st time (0 * 10 = 0 + 5 = 13)
  $num = (int)($num / 10); // 1st time remained = 1234
}
echo "original number is =  <b> $forThisNumber </b> <br/>  Reverse of number is = <b> $rev </b>";
?>

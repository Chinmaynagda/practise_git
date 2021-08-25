<?php

echo "<br>"."<h3>Passing array in callback function</h3>";
function square($n)
{
   return $n*$n;
}
function cube($n)
{
   return $n*$n*$n;
}
 function prt($item,$func)
 {
   $ln = array_map($func,$item);
   echo implode(" , ",$ln);
 }
$arr=array(1,2,3,4,5,6,7,8,9,10);
echo "Square of first 10 natural number:<br>";
prt($arr,"square");
echo "<br><br>"."Cube of first 10 natural number:<br>";
prt($arr,"cube");



?>
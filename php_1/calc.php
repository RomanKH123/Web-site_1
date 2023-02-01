<?php


function f($x)
    {return exp($x)+sqrt(1+exp(2*$x))-2;}
echo"<br />";
$a=$_POST["a"];
$b=$_POST["b"];
$eps=$_POST["eps"];
$ak=$a;$bk=$b;$ck=($ak+$bk)/2;
while (abs(f($ck))>$eps)
{
$ck=($ak+$bk)/2;
if(f($ak)*f($ck)>0)
{$ak=$ck;}
else
{$bk=$ck;}
}
$s=f($ck);
$homepage  = fopen('Result.txt','w');
fwrite($homepage,"\nКорень на отрезке [$a, $b]  f($ck)=$s");
fclose($homepage);
echo " <br />Корень на отрезке [$a, $b] <br /> f($ck)=$s";
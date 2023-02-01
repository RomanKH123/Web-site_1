<?php
function f($x)
    {return sin($x)*log(exp(1),tan($x));}
$n=$_POST["n"];$a=$_POST["a"];$b=$_POST["b"];$eps=$_POST["eps"];
$c0 = -1; $dx = 1;
$epsc=$eps;
$count=0; $s=0;
$fun = fopen("Result.txt", 'w') or die("Failed to load file!");
while($epsc<1)
    {
        $epsc=$epsc*10;
        $count=$count+1;
    }
$dsl=($b-$a)/$n;
$sl=$a;
for ($i=1; $i<$n; $i=$i+1)
{
    $s=$s+f($sl);
    $sl=$sl+$dsl;
}
$e=$a;
while($e<=$b)
{
    $F=log(exp(1),tan($e/2))-(cos($e))*(log(exp(1),tan($e)))-log(exp(1),tan(0.5))+(cos(1)*log(exp(1),(tan(1))));
    fwrite($fun, "\n F($e) = $F");
    $e=$e+$dsl;
}

$integral = (($b-$a)/$n)*((f($a)-f($b))/2 + $s);
$x=round($integral, $count);
$int = log(exp(1),tan($e/2))-(cos($e))*(log(exp(1),tan($e)))-log(exp(1),tan(0.5))+(cos(1)*log(exp(1),(tan(1)))); - log(exp(1),tan($e/2))-(cos($e))*(log(exp(1),tan($e)))-log(exp(1),tan(0.5))+(cos(1)*log(exp(1),(tan(1))));;
echo " <br />Интеграл функции sin($x)*log(exp(1),tan($x)) на отрезке [$a, $b] = $x <br/> при количество итераций: $n"; 
fwrite($fun, "\n Интеграл функции sin($x)*log(exp(1),tan($x)) на отрезке [$a, $b] за $n = $x");
fwrite($fun, "\n Интеграл функции sin($x)*log(exp(1),tan($x)) на отрезке [$a, $b] = $int");
fclose($fun)
?>
<?php

/*
1,1,2,3,5,8,13,21,34

n-2 = 0
n-1 = 1

1 = n-1+ n-2

n-1 = 1
n-2 = 1

2 = n-1 + n-2 

n-2 = 1
n-1 = 2

3 = n-1 + n-2 

n-2 = 2
n-1 = 3

5 = n-1 + n-2

n-2 = 3
n-1 = 5

*/

// FIBONACCI

$n_2 = 0;
$n_1 = 1;

$fib =  0;

while ( $fib <= 8) {

	if ($fib == 0) {
		echo "El numero de FIBONACCI es: ".$n_2."<br/ >";
		echo "El numero de FIBONACCI es: ".$n_1."<br/ >";
	}

	$fib = $n_2 + $n_1;

	echo "El numero de FIBONACCI es: ".$fib."<br/ >";
	$n_2 = $n_1;
	$n_1 = $fib;
}


?>
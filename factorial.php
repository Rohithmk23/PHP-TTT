factorial 

<?php
function fact($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    echo $result;
}
$num =5;
fact($num)

<?php
function power($a, $b) {
    return $a ** $b;
}

$x = 4;  
$y = 3;  

$z = power($x, $y); 
echo "Power is: $z";
?>


<?php
$num = 3;

function fact($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * fact($n - 1);
    }
}

echo "Factorial of $num is " . fact($num);
?>


function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$number =6;
$fact = factorial($number);
echo $fact;


<?php
function getFactorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * getFactorial($number - 1);
    }
}

$inputNumber = 5;
echo "Factorial of $inputNumber is: " . getFactorial($inputNumber);
?>
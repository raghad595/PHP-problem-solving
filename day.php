<?php
function Greet(){
    echo "Hello World"."<br>";
}
function Variables_Mixer($var1,$var2){
    if(is_numeric($var1)&&is_numeric($var2)){
        echo $var1+$var2."<br>";
    }
    else{
        echo $var1." ".$var2."<br>";
    }
}
function Student_grades($marks){
    $grade=($marks<33)?"Student Failed":(($marks>=60)?"First Division":"Success");
    return $grade;
}
Greet();
$num1=15;
$num2=9;
Variables_Mixer($num1,$num2);
$first_name="Raghad";
$last_name="Eldieb";
Variables_Mixer($first_name,$last_name);
$marks=90;
$grade=Student_grades($marks);
echo $grade."<br>";
/*Echo
Faster: generally considered slightly faster than print.
No return value: doesn’t return a value.
Multiple arguments: can accept separated by commas.
Ex:-*/
//echo "Hello", " ", "World","<br>";
/****
Print
Slower: Slightly slower than echo.
Returns: Always returns 1
Single Argument: can only accept one argument.
Ex:-*/
//print("Hello World");
?>
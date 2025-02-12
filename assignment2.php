<?php
function Student_Snacks(){
    $students = array(
        "Joe" => "Smarties",
        "Ahmed" => "Pringles",
        "Cassie" => "Marmite crisps",
        "Ben" => "Mr Kiplings cakes"
    );
    foreach ($students as $student => $food) {
        echo "<p>$student likes $food.</p>";
    }
}
function Checker($num){
    if(is_numeric($num)){
        if($num == 0) { return 0; }
        elseif($num < 0) { return "Negative"; }
        elseif($num > 0) { return "Positive"; }
    }
    else{
        return "Not numeric!";
    }
}
Student_Snacks();
echo "======================="."<br>";
echo Checker(50)."<br>";
echo Checker(0)."<br>";
echo Checker(-50)."<br>";
echo Checker('l')."<br>";
?>

<?php
$x =5;
function Text() {
    echo "Following line show an error since variable x is declared outside the finction.";
    echo "<p>Variable x inside fuction is: $x error</p>";
}
Text();
echo "<p>Variable x outside function is: $x</p>";
?>
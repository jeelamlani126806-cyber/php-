<!DOCTYPE html>
<html>
<body>

<form method="post">
Number 1: <input type="number" name="n1"><br><br>
Number 2: <input type="number" name="n2"><br><br>

<select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>

<input type="submit" value="Calculate">
</form>

<?php
function calc($a,$b,$op){
    switch($op){
        case "+": return $a+$b;
        case "-": return $a-$b;
        case "*": return $a*$b;
        case "/": return $a/$b;
    }
}

if($_POST){
    echo "Result: ".calc($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
</body>
</html>
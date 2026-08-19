<?php
$arr = explode(",", $_POST["numbers"]); 
sort($arr);

echo "Sorted Array: ";
foreach ($arr as $value) {
    echo $value . " ";
}
?>
<form method="post">
    Enter array (e.g. 5,2,8,1):
    <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>
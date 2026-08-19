<?php
echo "For Loop:<br>";
for($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "Foreach Loop:<br>";
$arr = [5, 6, 7, 8, 9, 10];

foreach($arr as $num) {
    echo $num . " ";
}
?>
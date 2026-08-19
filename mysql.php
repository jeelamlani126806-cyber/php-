<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT 
        CURDATE() AS Today,
        DAYOFWEEK(CURDATE()) AS Day_Of_Week,
        WEEKDAY(CURDATE()) AS Week_Day,
        DAYOFMONTH(CURDATE()) AS Day_Of_Month,
        DAYOFYEAR(CURDATE()) AS Day_Of_Year,
        DAYNAME(CURDATE()) AS Day_Name";

$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    echo "Current Date: " . $row['Today'] . "<br>";
    echo "DAYOFWEEK(): " . $row['Day_Of_Week'] . "<br>";
    echo "WEEKDAY(): " . $row['Week_Day'] . "<br>";
    echo "DAYOFMONTH(): " . $row['Day_Of_Month'] . "<br>";
    echo "DAYOFYEAR(): " . $row['Day_Of_Year'] . "<br>";
    echo "DAYNAME(): " . $row['Day_Name'] . "<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
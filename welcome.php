welcome.php
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<?php
if(isset($_COOKIE["username"]))
{
    echo "Welcome, " . $_COOKIE["username"];
}
else
{
    echo "Cookie not found.";
}
?>

</body>
</html>
create_cookie.php
<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Enter Your Name:
    <input type="text" name="username">
    <input type="submit" name="submit" value="Save">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['username'];

    // Create cookie (expires in 1 hour)
    setcookie("username", $name, time() + 3600);

    echo "<br>Cookie has been created successfully.";
    echo "<br>Refresh the page or open read_cookie.php to read the cookie.";
}
?>

</body>
</html>
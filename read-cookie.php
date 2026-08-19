cookie_header.php
<?php>
setcookie("username", "Shamir", time() + 3600);
header("Location: welcome.php");
exit();
/<?php>
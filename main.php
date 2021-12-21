<?php

// session_start();

// $_SESSION["username"] = "John";
// $_SESSION["userID"] = 1;
// $_SESSION["username"] = "new_value";


?>
<!-- <html>
<body>

<a href="sessions.php">Sessions page</a>

</body>
</html> -->
<?php

setcookie("Name", "Bond, James", time()+10);

echo "Agent: " . $_COOKIE["Name"];

?>
<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Document</title>
</head>
<body>

<h3>Login</h3>

<form action="includes/login.inc.php" method="POST">
    <input type="text" name="username" placeholder="Username"  />
    <input type="text" name="pwd" placeholder="Password"  />
    <button>Log In</button>
</form>

<h3>Sign Up</h3>

<form action="includes/signup.inc.php" method="POST">
    <?php
    signup_inputs();

    ?>
    <button>Sign Up</button>
</form>

<?php

check_signup_errors();

?>
    
</body>
</html>
<?php

include("includes/classes/Account.php");
$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<html>
<head>

    <title>Welcome to Slotify</title>

</head>
<body>
<div id="inputContainer">
    <form id="loginForm" action="register.php" method="POST">
        <h2>Login to Your Account</h2>
        <p>
            <label for="loginUsername">Username</label>
            <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. vuminhkhoi1802" required>

        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
        </p>
        <button type="submit" name="loginButton"> LOG IN

        </button>
    </form>


    <form id="registerForm" action="register.php" method="POST">
        <h2>Create your free account</h2>
        <p>
            <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="e.g. vuminhkhoi1802" required>
        </p>

        <p>
            <?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?>
            <label for="firstName">First name</label>
            <input id="firstName" name="firstName" type="text" placeholder="e.g. Khoi" required>
        </p>

        <p>
            <?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?>
            <label for="lastName">Last name</label>
            <input id="lastName" name="lastName" type="text" placeholder="e.g. Vu" required>
        </p>

        <p>
            <?php echo $account->getError("Email is invalid"); ?>
            <label for="emailID">emailID</label>
            <input id="emailID" name="emailID" type="email" placeholder="e.g. abc@abc.com" required>
        </p>

        <p>
            <?php echo $account->getError("Your emails don't match"); ?>
            <label for="emailConfirmation">email Confirmation</label>
            <input id="emailConfirmation" name="emailConfirmation" type="email" placeholder="e.g. abc@abc.com" required>
        </p>

        <p>
            <?php echo $account->getError("Password is invalid"); ?>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Your password" required>
        </p>

        <p>
            <?php echo $account->getError("Passwords don't match"); ?>
            <label for="password2">Confirm Password</label>
            <input id="password2" name="password2" type="password" placeholder="Your password" required>
        </p>
        <button type="submit" name="registerButton"> SIGN UP

        </button>
    </form>
</div>

</body>
</html>
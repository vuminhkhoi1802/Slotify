<?php

include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

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
            <?php echo $account->getError(Constants::$usernameCharacters); ?>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="e.g. vuminhkhoi1802"
                   value="<?php getInputValue('username') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <label for="firstName">First name</label>
            <input id="firstName" name="firstName" type="text" placeholder="e.g. Khoi"
                   value="<?php getInputValue('firstName') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <label for="lastName">Last name</label>
            <input id="lastName" name="lastName" type="text" placeholder="e.g. Vu"
                   value="<?php getInputValue('lastName') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <label for=" emailID">emailID</label>
            <input id="emailID" name="emailID" type="email" placeholder="e.g. abc@abc.com"
                   value="<?php getInputValue('emailID') ?>" required>
        </p>

        <p>
            <label for=" emailConfirmation">email Confirmation</label>
            <input id="emailConfirmation" name="emailConfirmation" type="email" placeholder="e.g. abc@abc.com"
                   value="<?php getInputValue('emailConfirmation') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordNotAlphaNumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
            <label for=" password">Password</label>
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
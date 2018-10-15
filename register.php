<?php
    include("includes/handlers/register-handler.php");
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
             <input id="loginUsername" name ="loginUsername" type="text" placeholder="e.g. vuminhkhoi1802" required>

            </p>
            <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name ="loginPassword" type="password" placeholder="Your password"  required>
            </p>
                <button type="submit" name="loginButton"> LOG IN

                </button>
            </form>
                


             <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
             <input id="username" name ="username" type="text" placeholder="e.g. vuminhkhoi1802" required>
            </p>

            <p>
                <label for="firstName">First name</label>
             <input id="firstName" name ="firstName" type="text" placeholder="e.g. Khoi" required>
            </p>

            <p>
                <label for="lastName">Last name</label>
             <input id="lastName" name ="lastName" type="text" placeholder="e.g. Vu" required>
            </p>

            <p>
                <label for="emailID">emailID</label>
             <input id="emailID" name ="emailID" type="email" placeholder="e.g. abc@abc.com" required>
            </p>

            <p>
                <label for="emailConfirmation">email Confirmation</label>
             <input id="emailConfirmation" name ="emailConfirmation" type="email"  placeholder="e.g. abc@abc.com" required>
            </p>

            <p>
            <label for="password">Password</label>
            <input id="password" name ="password" type="password"  placeholder="Your password" required>
            </p>

            <p>
            <label for="password2">Confirm Password</label>
            <input id="password2" name ="password2" type="password" placeholder="Your password" required>
            </p>
                <button type="submit" name="registerButton"> SIGN UP

                </button>
            </form>
        </div>

    </body>
</html>
<?php
include ("includes/config.php");

//session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];

}
else{
    header("Location: register.php");
}

?>
<html>
<head>

    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
    <div id = "nowPlayingBarContainer">

    </div>




</body>
</html>
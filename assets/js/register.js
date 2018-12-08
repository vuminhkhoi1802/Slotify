$(document).ready(function () {

    $("#hideLogin").click(function () {
        console.log("Login was pressed");
        $("#loginForm").hide();
        $("#registerForm").show();
    });

    $("#hideRegister").click(function () {
        $("#loginForm").show();
        $("#registerForm").hide();
    });
});
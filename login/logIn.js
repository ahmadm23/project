$(document).ready(function () {

    $('#loginbtn').on('click', function () {
        var userInputValue = $('#username').val();
        var passwordInputValue = $('#password').val();
        //var login is the string that will be stored in $_POST['action']
        var login = 'login';
        if (userInputValue.length > 0 && passwordInputValue.length > 0) {
            $.post("./login/login.php", { action: login, username: userInputValue, password: passwordInputValue }, function (loggedIn) {
                $('body').html(loggedIn);
            });
        }else{
            console.log("Please fill both fields")
        }
    });




});
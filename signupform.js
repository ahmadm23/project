$(document).ready(function () {
  $('.btn').on('click', function () {
    var userInputValue = $('#username').val();
    var fnameInputValue = $('#fname').val();
    var lnameInputValue = $('#lname').val();
    var emailInputValue = $('#email').val();
    var phoneInputValue = $('#phone').val();
    var passwordInputValue = $('#password').val();
    var confirm = $('#confirm').val();

    var submit = 'submitUser';
    $.post("signUp.php", { action: submit, username: userInputValue, fname: fnameInputValue, lname: lnameInputValue, email: emailInputValue, phone: phoneInputValue, password: passwordInputValue }, function (data) {
      if (data == false) {
        alert("Please fill in all fields");
      } else {
        $('body').html(data);
      }
    });
  });
});
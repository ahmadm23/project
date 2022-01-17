$(document).ready(function () {

  $('.btn').on('click', function () {
    var userInputValue = $('username').val();
    var fnameInputValue = $('#fname').val();
    var lnameInputValue = $('#lname').val();
    var emailInputValue = $('#email').val();
    var phoneInputValue = $('#phone').val();
    var passwordInputValue = $('#password').val();
    var comfirm = $('#confirm').val();
    var submit = 'submitUser';
    
    //username,fname etc are the indexs in the post array in signupform.php
    $.post("signUp.php", { action: submit, username: userInputValue, fname: fnameInputValue, lname: lnameInputValue, email: emailInputValue, phone: phoneInputValue, password: passwordInputValue }, function (success) {
      if (success == 1) {
        console.log("success");
      }else{
        console.log("failure");
      }
    });
  });




});
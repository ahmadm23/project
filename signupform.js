$(document).ready(function () {

$('.btn').on('click',function(){
    var userInputValue=$('#user').val();
    var fnameInputValue=$('#fname').val();
    var lnameInputValue=$('#lname').val();
    var emailInputValue=$('#email').val();
    var telInputValue=$('#tel').val();
    var action = 'submitUser';
    $.post("index.php",{action:action,user:userInputValue,fname:fnameInputValue,lname:lnameInputValue,email:emailInputValue,tel:telInputValue},function(success) {
if (success ==1){
    location.reload();
}
  });
});




});
$(document).ready(function () {
    $('.showUserToDo').on('click', function () {
        var usersid = $(this).data('user-id');
        $.post("userTable.php", { action: "getUsersTask", usersId: usersid }, function (data) {
            console.log(data.html);
            $('.modal-body').html(data.html); 
            $('#ahmadModal').modal('show');
        },"JSON");
    });
    $('#logout').on('click', function () {
        var logout = 'logout';
        $.post("index.php", { action: logout }, function (success) {
            location.reload(true);
        });
    });
});

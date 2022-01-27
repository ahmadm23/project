$(document).ready(function () {
    $('.showUserToDo').on('click', function () {
        var usersid=$(this).data('user-id');
        $.post("userTable.php", { action: "getuser00", usersid00: usersid }, function (data) {
            console.log(data);
});
});
});

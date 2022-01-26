$(document).ready(function () {
    $('#admintodo').on('click', function () {
        $.post("admin.php", { action: "admintodo" }, function () { });
    });
    $('#adminuserpage').on('click', function () {
        $.post("admin.php", { action: "adminuserpage" }, function () { });
    });
});
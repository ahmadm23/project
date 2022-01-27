$(document).ready(function () {
    $('#logout').on('click', function () {
        var logout = 'logout';
        $.post("index.php", { action: logout }, function (success) {
            location.reload(true);
        });
    });
});
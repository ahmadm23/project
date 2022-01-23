$(document).ready(function () {

    $('#addBtn').on('click', function () {
        var taskInputValue = $('.task').val();
        var submit = 'submittask';
        console.log(taskInputValue);
        //username,fname etc are the indexs in the post array in signupform.php
        $.post("toDoList.php", { action: submit, task: taskInputValue }, function (success) {
            if (success == 1) {
                console.log("success");
            } else {
                console.log("failure");
            }
        });
    });

    $('.deleteTask').on('click', function () {
        var taskid = $(this).data('task-id');
        var remove = 'deletetask';
        console.log(taskid);
        $.post("toDoList.php", { action: remove, ahmadstaskid: taskid }, function (success) {
            if (success == 1) {
                console.log("success");
            } else {
                console.log("failure");
            }
            location.reload(true);
        });
    });
    $('.updateStatus').on('click', function () {
        var update = 'updatestatus';
        var updatetaskid = $(this).data('task-id');
        $.post("toDoList.php", { action: update, updatetaskid: updatetaskid }, function (success) {
            if (success == 1) {
                console.log("success");
            } else {
                console.log("failure");
            }
            location.reload(true);
        });
    });
    $('#logout').on('click', function () {
        var logout = 'logout';
        $.post("index.php", { action: logout }, function (success) {
        });
    });
});
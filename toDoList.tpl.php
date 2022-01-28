<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 gradient-custom" style="background:linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <p class="h1 text-center mt-3 mb-4 pb-3 text-white">My Todo-List <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" width="40"></p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-warning btn-lg" id="logout">Log Out</button>
                            <div class="card-body p-10 text-center">
                                <hr style="border-top:1px;" />
                                <div class="input-group col-md-6 px-3">
                                    <input type="text" class="task form-control" name="task" required />
                                    <button class="btn btn-primary" id="addBtn">Add Task</button>
                                </div><hr style="border-top:1px;" />
                                <div class="input-group col-md-6 px-3">
                                    <table class="table table-sm text-white">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tasks as $task) : ?>
                                                <tr>
                                                    <td><?= $task['task_id'] ?></td>
                                                    <td><?= $task['task'] ?></td>
                                                    <td><?= $task['status'] ?></td>
                                                    <td><button type="button" class="btn btn-success updateStatus" data-task-id="<?= $task['task_id'] ?>">&#10003;</button>
                                                        <button type="button" class="btn btn-danger deleteTask" data-task-id="<?= $task['task_id'] ?>">X</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Option 1: Bootstrap Bundle with Popper -->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <script src="todo.js"></script>
</body>

</html>
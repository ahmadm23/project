<table class="table table-sm <?=$viewOnly? '':'text-white'?>">
    <thead>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Status</th>
            <?php if (!$viewOnly) : ?>
                <th>Action</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?= $task['task_id'] ?></td>
                <td><?= $task['task'] ?></td>
                <td><?= $task['status'] ?></td>
                <?php if (!$viewOnly) : ?>
                    <td><button type="button" class="btn btn-success updateStatus" data-task-id="<?= $task['task_id'] ?>">&#10003;</button>
                        <button type="button" class="btn btn-danger deleteTask" data-task-id="<?= $task['task_id'] ?>">X</button>
                    <?php endif; ?>
                    </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>
        <tr>
            <td><?=$user['f_name']?></td>
            <td><?=$user['l_name']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['phone']?></td>
        </tr>
        <?php endforeach;?>
        <tr>
            <td><?= $firstName; ?></td>
            <td><?= $lastName; ?></td>
            <td><?= $email; ?></td>
            <td><?= $phoneNum; ?></td>
        </tr>
    </tbody>
</table>
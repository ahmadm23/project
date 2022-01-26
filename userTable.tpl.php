<table class="table table-hover">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>
        <tr>
            <td><?=$user['username']?></td>
            <td><?=$user['f_name']?></td>
            <td><?=$user['l_name']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['phone']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
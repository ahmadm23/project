<table class="table table-hover">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>
        <tr>
            <td><?=$user['first']?></td>
            <td><?=$user['last']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['num']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
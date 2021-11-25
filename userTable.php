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
            <td><?=$user['firstName']?></td>
            <td><?=$user['lastName']?></td>
            <td><?=$user['email']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
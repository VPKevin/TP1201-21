<body>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Last name</th>
                    <th scope="col">First name</th>
                    <th scope="col">email</th>
                    <th scope="col">is Admin</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($vars as $user): ?>
                        <tr>
                            <td><?= $user.getFirstName() ?></td>
                        </tr>

                        <tr>
                            <td><?= $user.getLastName() ?></td>
                        </tr>

                        <tr>
                            <td><?= $user.getEmail() ?></td>
                        </tr>

                        <tr>
                            <td><?= $user.getPassword() ?></td>
                        </tr>

                        <tr>
                            <?= if($user.getIsAdmin() === true): ?>
                                <td>Admin</td>
                            <? else: ?>
                                <td>Admin</td>
                            <? endif ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
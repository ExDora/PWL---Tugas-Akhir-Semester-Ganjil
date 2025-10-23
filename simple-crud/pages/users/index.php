<?php
require_once '../../actions/users//get-users.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>

    <link rel="stylesheet" href="../../styles/users/index.css">

</head>

<body>
    <h1>List User</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $index => $user):?>
                    <tr>
                    <td>
                        <?= $index +1; ?>
                    </td>
                    <td>
                        <?=$user['name'];?>
                    </td>
                    <td>
                        <?=$user['email'];?>
                    </td>
                    <td>
                        <?= $user['created_at']?>
                    </td>
                    <td>
                        <a href="#"   class="btn btn-edit">Edit</a>
                        <a href="#" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>


                <?php if(empty($users)):?>
                        <tr>
                            <td colspan="">Data Pengguna Tidak Ditemukan</td>
                        </tr>
                        
                <?php endif;?>
            </tbody>
        </table>
    </div>
</body>


</html>
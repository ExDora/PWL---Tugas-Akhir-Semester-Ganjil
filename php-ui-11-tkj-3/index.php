<?php
    $name="William tjandera";

    $students =['Widi', 'EDi', 'Liu', 'Nani'];

    $teachers = [
        ['name'=>'Anyab', 'nip' => "123456"],
        ['name'=>'William', 'nip' => "234567"],
        ['name'=>'Hendra', 'nip' => "345678"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UI</title>
</head>
<body>
    <!-- Menyisikan komponen header -->
    <?php include './_components/header.php'?>

    <!-- Menyisikan kode php di HTML -->
    <?php echo $name;?>


<!-- Menampilkan Data Array -->
 <h1>Daftar siswa</h1>
 
     <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($students as $index => $student):?>
                    <tr>
                        <td>
                            <?php echo $index + 1;?>
                        </td>
                        <td>
                            <?php echo $student;?>
                        </td>
                    </tr>
                <?php endforeach;?>
        </tbody>
     </table>

     <br>

     <!-- Menampilkan dta array assosiatif -->
    <h1>Daftar guru</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($teachers as $index => $teacher):?>
                <tr>
                    <td>
                        <?= $index + 1;?>
                    </td>
                    <td>
                        <?= $teacher['name'];?>
                    </td>
                    <td>
                        <?=  $teacher['nip'];?>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
      





    <!-- Menyisikan komponen footer -->
    <?php include './_components/footer.php'?>


</body>
</html>
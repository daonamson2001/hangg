<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hien thi danh sach lop

    <table border="1">
        <tr>
            <th>Ma</th>
            <th>Ten</th>
            <th colspan="3"></th>
        </tr>
        <?php foreach ($listClass as $class) : ?>
        <tr>
            <td><?php echo $class->idClass; ?></td>
            <td><?= $class->nameClass; ?></td>
            <td><a href="class/add">Them</a></td>
            <td><a href="class/update/<?= $class->idClass ?>">Sua</a></td>
            <td><a href="class/delete/<?= $class->idClass ?>"
                    onclick="return confirm('Ban co muon xoa hay khong ?')">Xoa</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
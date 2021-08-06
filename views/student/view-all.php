<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hien thi danh sach hoc sinh
    <table border="1">
        <tr>
            <th>Ma hoc sinh</th>
            <th>Ho ten</th>
            <th>Gioi tinh</th>
            <th>Lop</th>
            <th colspan="3"></th>
        </tr>
        <?php foreach ($listStudent as $student) : ?>
        <tr>
            <td><?= $student->idStudent ?></td>
            <td><?php echo $student->lastName . ' ' . $student->firstName ?></td>
            <td><?php echo $student->gender == 1 ? 'Nam' : 'Nu' ?></td>
            <td><?php echo $student->class->nameClass ?></td>
            <td><a href="student/add">Them</a></td>
            <td><a href="student/update/<?= $student->idStudent ?>">Sua</a></td>
            <td><a href="student/delete/<?= $student->idStudent ?>"
                    onclick="return confirm('Ban co muon xoa hay khong ?')">Xoa</a></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
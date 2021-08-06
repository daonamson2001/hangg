<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Sua lop
    <form method="post" action="../../class/update-process">
        Ma: <input type="text" readonly name="id-class" value="<?= $item->idClass ?>">
        <br />
        Ten: <input type="text" name="name-class" value="<?= $item->nameClass ?>">
        <br />
        <button>Oke</button>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="../../student/update-process">
        id: <input type="text" readonly name="idStudent" value="<?= $result->idStudent ?>">
        <br />
        Ten dau tien: <input type="text" name="firstName" value="<?= $result->firstName ?>">
        <br />
        Ho ten: <input type="text" name="lastName" value="<?= $result->lastName ?>">
        <br />
        Gioi tinh:
        <input type="radio" name="gender" value="1" checked value="<?= $result->gender == 1 ? "checked" : "" ?>">Nam
        <input type="radio" name="gender" value="0" value="<?= $result->gender == 0 ? "checked" : "" ?>">Nu
        <br />
        Ma lop: <input type="number" name="idClass" value="<?= "BKD0" . '' . $result->idClass ?>">
        <br />
        <button>Oke</button>
    </form>
</body>

</html>
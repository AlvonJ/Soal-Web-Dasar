<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 01 Praktikum 4</title>
</head>

<body>
    <form action="process.php" method="POST">
        <table align="center" cellspacing="10">
            <tr>
                <th colspan="3">
                    Form Input
                </th>
            </tr>
            <tr>
                <td><label for="idNama">Nama </label></td>
                <td>:</td>
                <td><input type="text" id="idNama" name="nama" autocomplete="off" size="30px"></td>
            </tr>
            <tr>
                <td><label for="idEmail">Email </label></td>
                <td>:</td>
                <td><input type="email" id="idEmail" name="email" autocomplete="off" size="30px"></td>
            </tr>
            <tr>
                <td><label for="idNumber">Phone number </label></td>
                <td>:</td>
                <td><input type="text" id="idNumber" name="number" autocomplete="off" size="30px"></td>
            </tr>
            <tr>
                <td><label for="idHobby">Hobby </label></td>
                <td>:</td>
                <td><input type="text" id="idHobby" name="hobby" autocomplete="off" size="30px"></td>
            </tr>
            <tr>
                <td><label for="textArea">Description </label></td>
                <td>:</td>
                <td><textarea name="textArea" id="idtextArea" cols="32" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="btnSubmit" id="idSubmit">
                    <input type="reset" name="btnReset" id="idReset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
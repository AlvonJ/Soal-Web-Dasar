<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 02 Praktikum 4</title>
</head>

<body>
    <form action="process.php" method="GET">
        <table border="1px solid black" align="center" cellpadding=0 cellspacing=0>
            <tr bgcolor=#eb4d4b>
                <td colspan=2 align="center">
                    Kalkulator
                </td>
            </tr>
            <tr>
                <td bgcolor="#ff7979">Angka pertama</td>
                <td><input type="text" size="25" name="angka1"></td>
            </tr>
            <tr>
                <td bgcolor="#ff7979">Angka kedua</td>
                <td><input type="text" size="25" name="angka2"></td>
            </tr>
            <tr>
                <td bgcolor="#ff7979">Operator</td>
                <td><input type="text" size="25" name="operator"></td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor=#eb4d4b><input type="submit" name="btnSubmit"
                        id="idSubmit">&nbsp;&nbsp;<input type="reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>
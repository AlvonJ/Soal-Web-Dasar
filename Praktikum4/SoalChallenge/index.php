
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p align="left">
        Create A Chess Board

        <form action="" method="POST">
            Ukuran Board  :
            <input type="text" name="ukuran" id="">
            <input type="submit" value="Buat Board">
        </form>
    

 
</p>

<?php
        if ( isset($_POST["ukuran"])){
            $ukuran = $_POST["ukuran"];
            echo ("<table border=1 width=400 height=400>");
            
            for($i=0;$i<$ukuran;$i++) {
                echo ("<tr>");
                for ($j=0;$j<$ukuran;$j++) {
                    $total = $i +$j;
                    if ( $total%2 == 0  ) {
                        echo ("<td style='background-color:black;'></td>");
                    }
                    else {
                         echo ("<td> </td>");
                   }
                }
                echo("</tr>");
            }

            echo("</table>");
        }

    ?>
</body>
</html>

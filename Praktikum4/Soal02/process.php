<?php
    $submitted = filter_input(INPUT_GET, 'btnSubmit');

    if(isset($submitted)){
        $angka1 = filter_input(INPUT_GET, 'angka1');
        $angka2 = filter_input(INPUT_GET, 'angka2');
        $operator = filter_input(INPUT_GET, 'operator');
    }

    if($operator == "+"){
        $hasil = $angka1 + $angka2;
    } elseif($operator == "-"){
        $hasil = $angka1 - $angka2;
    } elseif($operator == "*"){
        $hasil = $angka1 * $angka2;
    } elseif($operator == "/"){
        $hasil = $angka1 / $angka2;
    }

    echo 
        "
        <table border=\"1px solid black\" align=\"center\" cellpadding=0 cellspacing=0>
            <tr bgcolor=#badc58>
                <td colspan=2 align=\"center\">
                    Kalkulator
                </td>
            </tr>
            <tr>
                <td bgcolor=\"#6ab04c\">Angka pertama</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$angka1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor=\"#6ab04c\">Angka kedua</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$angka2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor=\"#6ab04c\">Operator</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$operator&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor=\"#badc58\" align=\"center\" colspan=2>Hasil = $hasil</td>
            </tr>
        </table>
        
        "



?>
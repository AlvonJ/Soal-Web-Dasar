<?php
    $submitted = filter_input(INPUT_POST, "btnSubmit");

    if (isset($submitted)) {
        $nama = filter_input(INPUT_POST, "nama");
        $email = filter_input(INPUT_POST, "email");
        $number = filter_input(INPUT_POST, "number");
        $hobby =  filter_input(INPUT_POST, "hobby");
        $textarea= filter_input(INPUT_POST, "textArea");
    };


    echo 
    "
    <center>
        <hr>
        <h1>Form input berhasil diterima</h1>
        Nama saya adalah $nama.<br>
        Email saya yaitu $email. <br>
        No hp saya adalah $number. <br>
        Hobby saya yaitu $hobby. <br>
        Deskripsi diri saya adalah $textarea. <br> 
        <hr>     
    </center>    
    ";
?>
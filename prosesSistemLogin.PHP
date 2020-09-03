<html>
    <head>
        <style type="text/css">
            p{
                text-align:center;
                margin-top:250px;
                font-weight:300;
                font-size:18px;
            }
        </style>
    <body>

<?php
    
    $a = $_POST ["button"];
    $b = $_POST ["NIS"];
    $c = $_POST ["nam_depan"];
    $d = $_POST ["nam_belakang"];
    $e = $_POST ["kelas"];


    if ($b == true && $c == true && $d == true && $e == true){
        echo "<p>Terima kasih $c $d sudah mendafar. <br> NIS yang anda daftarkan adalah $b dengan kelas $e</p> " ;
    }
    else if ($b == false) {
        echo "harap masukan nis anda";
    }
    else if ($c == false){
        echo "harap masukan nama depan";
    }
    else if ($d == false){
        echo "harap masukan nama belakang";
    }
    else if ($e == false){
        echo "harap masukan kelas anda";
    }
    else {
        echo "eror";
    }

?>
         </body>
    </head>
</html>

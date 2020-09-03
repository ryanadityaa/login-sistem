<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style type= "text/css">
        input{
            padding : 5px 10px 5px 10px;
            width : 100%;
        }
        
        .button{
            width:108%;
            cursor : pointer;
            margin-top:7px;
            padding : 5px 10px 5px 10px;
        }
    </style>
</head>
<body>
    <form action="prosesSistemLogin.php" method="POST">
        <h2 align="center">
            FORM PENDAFTARAN
        </h2>
        <table border="0" align="center">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <input type="text" name="NIS">
                </td>
            </tr>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td>
                    <input type="text" name="nam_depan">
                </td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td>
                    <input type="text" name="nam_belakang">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kelas">
                </td>
            </tr>
            <tr>
               
                <td colspan= "3"> 
                    <input type="submit" value="Daftar" name="button" class="button">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<html>
    <head>
        <title> Pengolahan Form 1</title>
    </head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="input" value="Input">
        </FORM>
    </body>
</html>
<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>
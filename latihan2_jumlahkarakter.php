<html>
<body>
    <form method="GET" action="">
    <label for="Nama">name</label>
    <input type="text"  name="nama"><br>
    <label for="color">colour</label>

    <select name="color">
    <option value="Yellow">kuning</option>
    <option value="Pink">pink</option>
    <option value="Blue">biru</option>
    <option value="Green">hijau</option>
    <option value="purple">ungu</option>
    </select> <br>
    <input type="submit" name="submit" value="simpan">
    </form>    

    <?php
    if (isset($_GET['simpan']))
    {
        $a=$_GET['nama'];
        $b=$_GET['color'];

        function karakter ($nama){
            if(strlen($nama>20)){
                return ((strlen($nama))*700);
            }elseif (strlen($nama>11)){
                return ((strlen($nama))*500);
            }else{
                return ((strlen($nama))*300);
            }
        }
        echo "<font color ='$b'>Nama= $a <br>";
        echo "<font color ='$b'>Harga bet untuk nama $a adalah = " .karakter($a);
    }
    ?>
</body>
</html>
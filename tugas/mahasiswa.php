<HTML>
    <HEAD>
        <title>Daftar Mahasiswa</title>
    </HEAD>
    <BODY>
        <h3><b>TAMBAH DATA</b></h3>
        <form action="tambahdata.php" method="POST">
            <b>NRP : </b><input type="text" name="NRP" size="15" maxlength="40"> <br>
            <b>Nama : </b><input type="text" name="nama" size="15"maxlength="40"> <br>
            <b>Foto : </b><input type="text" size="15" disabled="disabled">
            <input type="file" name="file_foto" accept="image/*"> <br>
            <b>Jurusan : </b>
            <select name="ID_jur">
                <option value="TL">Teknik Lingkungan</option>
                <option value="EL">Teknik Elektro</option>
                <option value="IF">Teknik Informatika</option>
                <option value="TI">Teknik Industri</option>
                <option value="SI">Teknik Sipil</option>
                <option value="ME">Teknik Mesin</option>
            </select><br>
            <input type="submit" value="Tambah">
        </form>
		
		<h3>===============================<br>
        SEARCH DATA</h3>
        <form  action="search.php" method="GET">
        <b>Nama : </b><input type="text" name="nama" size="15" maxlength="40">
        <input type="submit" value="Cari Data">
        </form>
		
		<h3>===============================<br>
        HAPUS DATA</h3>
        <form action="hapus.php" method="POST">
        <b>NRP : </b><input type="text" name="NRP" size="15" maxlength="40">
        <input type="submit" value="Hapus Data">        
        </form>
		
    </BODY>    
</HTML>
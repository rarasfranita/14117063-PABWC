<HTML>
    <HEAD>
        <title>Tambah Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Tambah Data Mahasiswa</h1>
        <?php
            $NRP = isset ($_POST["NRP"]);
            $nama = isset ($_POST["nama"]);
            $alamat = isset ($_POST["file_foto"]);
            $ID_jur = isset ($_POST["ID_jur"]);
            
			$conn=mysqli_connect ("localhost","root","") 
			or die ("koneksi gagal");
            mysqli_select_db($conn,"pabwb");
			
			mysqli_select_db($conn,"pabwb");
            $hasil=mysqli_query($conn,"select nama from jurusan where ID='$ID_jur'");
            $row=mysqli_fetch_array($hasil);
            $jurusan=$row[0];
            echo "NRP : $NRP <br>";
            echo "nama : $nama <br>";
            echo "alamat : $alamat <br>";
            echo "Jurusan : $ID_jur <br>";
			
            $sqlstr="insert into mahasiswa (NRP,nama,alamat,ID_jur)
            values ('$NRP','$nama','$alamat','$ID_jur')";
            $hasil = mysqli_query($conn,$sqlstr);
            echo "Simpan data mahasiswa berhasil dilakukan<br>";
			  
        ?>
    </BODY>
</HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Dosen -->
	<div class="container">
		<div class="alert alert-info">Update Data Mahasiswa</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_GET['url-nim'])) {

            $input_nim =$_GET['url-nim'] ;
            $query = "SELECT * FROM mahasiswa WHERE nim='$input_nim'";
            $result = mysqli_query($link, $query);
            $isi = mysqli_fetch_object($result);
        
        }

        if (isset($_POST['simpan'])) {
            $input_nim = $_POST['txtnim'];
            $input_nama_mahasiswa = $_POST['txtnamamhs'];
            $input_prodi = $_POST['txtprodi'];
           

            $query = "UPDATE mahasiswa SET nama_mahasiswa ='$input_nama_mahasiswa', prodi='$input_prodi'
                    WHERE nim='$input_nim'";
            

            $result = mysqli_query($link, $query);
            if ($result){
                header('location: index2.php');
            }else{
                echo 'Gagal Disimpan : ', mysqli_error($link);
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">Nim</label>
                <input type="text" class="form-control" 
                name="txtnim" value="<?= $isi->nim; ?>" readonly>

            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="txtnamamhs" value="<?= $isi->nama_mahasiswa; ?>">
            </div>
            <div class="form-group">
                <label for="">Prodi</label>
                <input type="text" class="form-control" name="txtprodi" value="<?= $isi->prodi; ?>">
            </div>
           
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index2.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>
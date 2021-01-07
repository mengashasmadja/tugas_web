<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>


	<div class="container">
		<div class="alert alert-info">Tambah Data Mahasiswa</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_POST['simpan'])) {
            $input_nim = $_POST['txtnim'];
            $input_nama_mahasiswa = $_POST['txtnamamhs'];
            $input_prodi = $_POST['txtprodi'];
           

            $query = "INSERT INTO mahasiswa VALUES
            ('$input_nim', '$input_nama_mahasiswa', '$input_prodi')";

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
                <label for="">NIM</label>
                <input type="text" class="form-control" name="txtnim">
            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="txtnamamhs">
            </div>
            <div class="form-group">
                <label for="">Prodi</label>
                <input type="text" class="form-control" name="txtprodi">
            </div>
           
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index2.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>
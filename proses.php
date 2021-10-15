<?php
	//proses.php
	include "connection.php";

	if ($_POST["tambah"]){

        $query	= "INSERT INTO siswa (
                        nis, 
                        nama, 
                        jenis_kelamin,
                        agama, alamat, 
                        jurusan
                    ) VALUES (
                        '$_POST[nis]', 
                        '$_POST[nama]', 
                        '$_POST[jenis_kelamin]', 
                        '$_POST[agama]', 
                        '$_POST[alamat]', 
                        '$_POST[jurusan]'
                    )";

		$result = mysqli_query($conn, $query);

		if ($result) {
			header('location:index.php');
		}else{
            echo mysqli_error($conn);
        }

	}else if ($_POST["edit"]){

        $query	= "UPDATE siswa SET 
                        nis='$_POST[nis]', 
                        nama='$_POST[nama]', 
                        jenis_kelamin='$_POST[jenis_kelamin]', 
                        agama='$_POST[agama]', 
                        alamat='$_POST[alamat]', 
                        jurusan='$_POST[jurusan]' 
                    WHERE id='$_POST[id]'";

		$result = mysqli_query($conn, $query);

		if ($result) {
			header('location:index.php');
		}else{
            echo mysqli_error($conn);
        } 

	}else if ($_GET["hapus"]) {

		$query = "DELETE FROM siswa WHERE nis='$_GET[hapus]'";
		$result = mysqli_query($conn, $query);
        
		if ($result) {
			header('location:index.php');
		}else{
            echo mysqli_error($conn);
        } 

	}
?>
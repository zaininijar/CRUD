<?php 
    $title = 'dashboard/<span class="text-gray-400">edite data siswa</span>';
    $menu_active = 'semua_siswa';
    include 'layouts/header.php';

    $query	= "SELECT * FROM siswa WHERE nis = '$_GET[id_siswa]'";
    $result 	= mysqli_query($conn, $query);
    $ambil  = mysqli_fetch_array($result);
?>
        <!-- component -->
        <div class="leading-loose w-full">
            <form class="w-full mt-6 p-10 bg-white rounded shadow-xl" action="proses.php" method="POST">
                <div class="">
                    <input type="hidden" name="id" value="<?php echo $ambil['id'];?>">
                    <label class="block text-sm text-gray-00" for="cus_name">NIS</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" value="<?php echo $ambil['nis'];?>" name="nis" type="text" required="" placeholder="NIS Kamu" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Nama</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" value="<?php echo $ambil['nama'];?>" name="nama" type="text" required="" placeholder="Nama Kamu" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Alamat</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" value="<?php echo $ambil['alamat'];?>" name="alamat" type="text" required="" placeholder="Alamat" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="cus_email">Jenis Kelamin</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" value="<?php echo $ambil['jenis_kelamin'];?>" name="jenis_kelamin" type="text" required="" placeholder="Jenis Kelamin" aria-label="Email">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-600" for="cus_email">Agama</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" value="<?php echo $ambil['agama'];?>" name="agama" type="text" required="" placeholder="Agama" aria-label="Email">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-600" for="cus_email">Jurusan</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" value="<?php echo $ambil['jurusan'];?>"  name="jurusan" type="text" required="" placeholder="Jurusan" aria-label="Email">
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" value="edit" name="edit" type="submit">Simpan</button>
                </div>
            </form>
        </div>
<?php 
    include 'layouts/footer.php'
?>


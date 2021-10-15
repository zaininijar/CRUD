<?php 
    $title = 'dashboard/<span class="text-gray-400">tambah data siswa</span>';
    $menu_active = 'tambah_siswa';
    include 'layouts/header.php';
?>
        <!-- component -->
        <div class="leading-loose w-full">
            <form class="w-full mt-6 p-10 bg-white rounded shadow-xl" action="proses.php" method="POST">
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">NIS</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="nis" type="text" required="" placeholder="NIS Kamu" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">Nama</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="nama" type="text" required="" placeholder="Nama Kamu" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Alamat</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Alamat" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="text-sm block text-gray-600" for="cus_email">Jenis Kelamin</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="jenis_kelamin" type="text" required="" placeholder="Jenis Kelamin" aria-label="Email">
                </div>
                <div class="inline-block mt-2 w-1/2 pr-1">
                    <label class="block text-sm text-gray-600" for="cus_email">Agama</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="agama" type="text" required="" placeholder="Agama" aria-label="Email">
                </div>
                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                    <label class="block text-sm text-gray-600" for="cus_email">Jurusan</label>
                    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="jurusan" type="text" required="" placeholder="Jurusan" aria-label="Email">
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" value="tambah" name="tambah" type="submit">Simpan</button>
                </div>
            </form>
        </div>
<?php 
    include 'layouts/footer.php'
?>

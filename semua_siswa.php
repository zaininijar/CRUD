<?php 
    $title = 'dashboard/<span class="text-gray-400">semua data siswa</span>';
    $menu_active = 'semua_siswa';
    include 'layouts/header.php';
    $query = "SELECT * FROM siswa";
    $results = mysqli_query($conn, $query);
?>
        <div class="flex flex-col mt-6">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="pl-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    No
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Alamat
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Jenis Kelamin
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Agama
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Jurusan
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php 

                                $no = 1;
                                while ($siswa = mysqli_fetch_assoc($results)) : 
                            ?>
                            
                            <tr>
                                <td class="pl-6 py-4 whitespace-no-wrap border-b border-gray-200 capitalize">
                                    <div class="text-sm leading-5 text-gray-900">
                                        <?= $no; ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <!-- <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                alt="">
                                        </div> -->
                                        <div class="">
                                            <div class="text-sm leading-5 font-medium text-gray-900 capitalize">
                                                <?= $siswa['nama']; ?>
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">
                                                <?= $siswa['nis']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 capitalize">
                                    <div class="text-sm leading-5 text-gray-900"><?= $siswa['alamat']; ?>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 capitalize">
                                    <?php if($siswa['jenis_kelamin'] == 'laki-laki') : ?>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= $siswa['jenis_kelamin']; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">
                                            <?= $siswa['jenis_kelamin']; ?>
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <td class="px-6 py-4 capitalize whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        <?= $siswa['agama']; ?>
                                </td>
                                <td class="px-6 uppercase py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        <?= $siswa['jurusan']; ?>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        <?= $siswa['created_at']; ?>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="update.php?id_siswa=<?= $siswa['nis']; ?>" class="text-indigo-600 hover:text-indigo-900">Edit </a>|
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                            <?php 
                            
                                $no++; 
                                endwhile;
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php 
    include 'layouts/footer.php'
?>

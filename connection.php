<?php 

    $base_url = 'php_native/CRUD';
    $menu_class = 'flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100';
    $menu_class_active = 'flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100';
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'praktikum_crud_dasar';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Error connecting to database");
    }

?>

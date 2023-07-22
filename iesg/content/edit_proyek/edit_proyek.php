<?php

require '../../php/koneksi.php';

if (!isset($_GET['id'])) {
    die("Error: 'id' parameter is missing in the URL.");
}

$query = "SELECT * FROM tb_projek WHERE id = {$_GET['id']}";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    // Handle database query error (if any)
    die("Error: Database query failed.");
} elseif($row = mysqli_fetch_assoc($result)){

}

?>
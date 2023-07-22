<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    // $uploadedFile = $_FILES['profileimg'];


    $sql = "UPDATE tb_user SET username = '$username' WHERE id = '$_SESSION[user_id]'";

        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil diperbarui";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
}
?>
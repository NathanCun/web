<?php
    

    function proyek($status){
        require 'php/koneksi.php';
        $sql = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_projek WHERE status = '$status'");
        if(mysqli_num_rows($sql) > 0){
            $result = mysqli_fetch_assoc($sql);
            return $result["total"];
        }
        else{
            return 0;
        }
    
    }
     function getProjects($status,$limit) {
        require 'php/koneksi.php';
        if($limit > 0 ){
            $query = "LIMIT $limit";
        }
        else{
            $query = "";
        }
        $sql = mysqli_query($koneksi, "SELECT * FROM tb_projek WHERE status = '$status' $query");
        $projects = [];
        while ($row = mysqli_fetch_assoc($sql)) {
            $projects[] = $row;
        }
        return $projects;
    }

    function detailProject($id){
        require 'php/koneksi.php';
        $sql_project = mysqli_query($koneksi,"SELECT * FROM tb_projek WHERE id = '$id'");
        $project    = mysqli_fetch_assoc($sql_project);

        return $project;
    }

    function dana_terkumpulkan(){
        require 'php/koneksi.php';
        $month = date("m");
        $year  = date("Y");
        $sql = mysqli_query($koneksi,"SELECT SUM(jumlah_donasi) AS total FROM tb_donasi WHERE MONTH(tanggal) = $month AND YEAR(tanggal) = $year");
        $result = mysqli_fetch_assoc($sql);

        return $result["total"];

    }

    function jumlah_user(){
        require 'php/koneksi.php';
        $month = date("m");
        $sql = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_user WHERE level ='0'");
        $result = mysqli_fetch_assoc($sql);

        return $result["total"];

    }

    function proyek_berjalan(){
        require 'php/koneksi.php';
        $sql = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_projek WHERE status = 'disetujui'");
        if(mysqli_num_rows($sql) > 0){
            $result = mysqli_fetch_assoc($sql);
            return $result["total"];
        }
        else{
            return 0;
        }

    }
    function proyek_selesai(){
        require 'php/koneksi.php';
        $sql = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_projek WHERE status = 'tutup'");
        if(mysqli_num_rows($sql) > 0){
            $result = mysqli_fetch_assoc($sql);
            return $result["total"];
        }
        else{
            return 0;
        }

    }
    function proyek_baru(){
        require 'php/koneksi.php';
        $sql = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_projek WHERE status = ''");
        if(mysqli_num_rows($sql) > 0){
            $result = mysqli_fetch_assoc($sql);
            return $result["total"];
        }
        else{
            return 0;
        }

    }

    function progres() {
        require 'php/koneksi.php';
        $jumlah_proyek = proyek_berjalan() + proyek_selesai();
        $persentase = 0;

        if ($jumlah_proyek > 0) {
            $persentase = (proyek_selesai() / $jumlah_proyek) * 100;
            $persentase = round($persentase, 2); 
        }

        return $persentase;
    }

?>

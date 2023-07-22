<?php
     function getProjects($status,$limit) {
        include '../../php/koneksi.php';
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
        include '../../php/koneksi.php';
        $sql_project = mysqli_query($koneksi,"SELECT * FROM tb_projek WHERE id = '$id'");
        $project    = mysqli_fetch_assoc($sql_project);

        return $project;
    }
?>
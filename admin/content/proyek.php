<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
</div>

                    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href='?page=proyek&status=disetujui'>
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               Proyek berjalan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo proyek("disetujui"); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-calendar " style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href='?page=proyek&status='>
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Proyek Belum Disetujui</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo proyek(""); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-check" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href='?page=proyek&status=pengajuan_tutup'>
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                               Pengajuan Tutup</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo proyek("pengajuan_tutup"); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-window-close" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href='?page=proyek&status=tutup'>
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Proyek Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo proyek("tutup"); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-loader" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</a>
    </div>
    <br>


    <!-- 

        status proyek ada 5
        ''                  -> pendaftaran baru 
        'disetujui'         -> telah disetujui sedang berjalan
        'close'             -> donasi sudah penuh/ proyek sudah selesai
        'pengajuan_tutup'   -> diajukan untuk tutup
     -->
                        
    <div class="row">
        <div class="col-md-12">
            <table class="table ">
                <thead class="text-uppercase fw-bold">
                    <th>Project</th>
                    <th>Title</th>
                    <th>Target Donasi</th>
                    <th>Terkumpulkan</th>
                    <th>Bidang industri</th>
                    <th>Manfaat</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php

                    if(isset($_GET["status"])){
                        $status = $_GET["status"];
                        $query = "WHERE status = '$status'";
                    }
                    else{
                        $query = "";
                    }
                        $sql = mysqli_query($koneksi,"SELECT * FROM tb_projek $query ORDER by id DESC");
                        while($row = mysqli_fetch_assoc($sql)){
                            echo "<tr ><td><img src='../assets/images/proyek/$row[gambar]' alt='' width='270' height='163' /></td>";
                            echo "<td>$row[nama_proyek]</td>";
                            echo "<td>";
                            echo rupiah($row["target_donasi"]);
                            echo"</td>";
                            echo "<td>";
                            echo rupiah($row["target_donasi"]);
                            echo"</td>";
                            echo "<td></td><td>$row[manfaat]</td><td>$row[bidang_industri]</td>";
                            if($row["status"] == ""){
                                echo "<td><a class='btn btn-sm btn-success' href='action.php?approve=$row[id]'><i class='bx bx-check-square'></i></a>
                                <a class='btn btn-sm btn-danger' href='action.php?close=$row[id]'><i class='bx bx-window-close'></i></a></td>";
                            }
                            elseif($row["status"] == "disetujui"){
                                echo "<td><a class='btn btn-sm btn-danger' href='action.php?close=$row[id]'><i class='bx bx-window-close'></i></a></td>
                                </td>";
                            }
                            elseif($row["status"] == "pengajuan_tutup"){
                                echo "<td><a class='btn btn-sm btn-danger' href='index.php?close=$row[id]'><i class='bx bx-window-close'></i></a></td>
                                </td>";
                            }
                            else{
                                echo "<td><button  style='width:200px' class='btn btn-success text-light'>TUTUP</button></td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
</div>

                    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Dana Terkumpulkan (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo rupiah(dana_terkumpulkan()); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-calendar " style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo jumlah_user(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-user" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Proyek selesai
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo progres(); ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?php echo progres(); ?>%" aria-valuenow="<?php echo progres(); ?>" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-calendar-check" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Projek</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo proyek_baru(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="bx bx-loader" style="font-size: 2em;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

                        
    <div class="row">
        <div class="col-md-12">
            <table class="table ">
                <thead class="text-uppercase fw-bold">
                    <th>Project</th>
                    <th>Title</th>
                    <th>Target Donasi</th>
                    <th>Terkumpulkan</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($koneksi,"SELECT * FROM tb_projek ORDER by status ASC");
                        while($row = mysqli_fetch_assoc($sql)){
                            echo "<tr ><td><img src='../iesg/assets/images/proyek/$row[gambar]' alt='' width='270' height='163' /></td>";
                            echo "<td>$row[nama_proyek]</td>";
                            echo "<td>";
                            echo rupiah($row["target_donasi"]);
                            echo"</td>";
                            echo "<td>";
                            echo rupiah($row["target_donasi"]);
                            echo"</td>";
                            if($row["status"] == ""){
                                echo "<td><button style='width:200px' class='btn btn-danger text-light'>BELUM DISETUJUI</button></td>";
                                // <td><a class='btn btn-sm btn-success' href='action.php?approve=$row[id]'><i class='bx bx-check-square'></i></a>
                                // <a class='btn btn-sm btn-danger' href='action.php?close=$row[id]'><i class='bx bx-window-close'></i></a></td>";
                            }
                            elseif($row["status"] == "disetujui"){
                                echo "<td><button  style='width:200px' class='btn btn-warning text-light'>DISETUJUI</button>";
                                // <td><a class='btn btn-sm btn-danger' href='action.php?close=$row[id]'><i class='bx bx-window-close'></i></a></td>
                                // </td>";
                            }
                            else{
                                echo "<td><button  style='width:200px' class='btn btn-success text-light'>SELESAI</button></td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
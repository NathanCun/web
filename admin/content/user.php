<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-light">
                Add New User <i style='font-size:1.3em;float:right;' class='bx bx-user-plus'></i>
            </div>
            <form action="action.php" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" >
                    </div>
                    <div class="col-md-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="col-md-2">
                        <label for="">-</label>
                        <button class="btn btn-success form-control" name="add_admin" type="submit">Add <i class='bx bx-user-plus'></i></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<hr>

<table class="table table-bordered">
    <thead>
        <th>Email</th>
        <th>Username</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php
            $sql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE level ='1'  ");
            while($row = mysqli_fetch_assoc($sql)){
                echo "<tr>
                    <td>$row[email]</td>
                    <td>$row[username]</td>
                    <td>";
                    
                    if($row["verifikasi"] == "N" ){
                        echo "<button class = 'btn btn-danger'  style='width:150px'><i class='bx bx-user-x'></i>Belum Aktif</button>";
                    }
                    else{
                        echo "<button class = 'btn btn-success' style='width:150px'><i class='bx bx-user-check'></i> Aktif</button>";
                    }
                    echo "</td>
                </tr>";
            }


        ?>
       
    </tbody>
</table>
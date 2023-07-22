<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">FAQ</h1>
    
</div>

<a href='action.php?tambah_faq' class="btn btn-primary">
        + Add
</a>             
                        
<div class="row">
    <div class="col-md-12">
        <table class="table text-center">
            <thead>
                <th>Question</th>
                <th>Answer</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($koneksi,"SELECT * FROM tb_faq ");
                    while($row = mysqli_fetch_assoc($sql)){
                        echo "<form method='POST' action='action.php'>";
                        echo "<tr class='text-center'><td>
                            <input type='hidden' name= 'id' class='form-control' value ='$row[id]'> 
                            <input type='text' name= 'pertanyaan' class='form-control' value ='$row[pertanyaan]'> 
                        </td>";
                        echo "<td>
                            <textarea cols='100' rows='5' class='form-control' name='jawaban'>$row[jawaban]</textarea>
                        </td>
                        <td><button type='submit' name='edit_faq' class='btn btn-circle btn-warning btn-sm text-light'><i class='bx bx-edit-alt'></i></button> 
                        <a href='action.php?hapus_faq=$row[id]' class='btn btn-circle btn-danger btn-sm'><i class='bx bx-trash'></i></a>
                        </td>
                        </form>
                        ";

                        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

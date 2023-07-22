<div class="greennature-form-fields">

<?php
                $sqluser = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id = '$_SESSION[user_id]' ");
                while($row = mysqli_fetch_assoc($sqluser)){
                    if($row['profileimg']){ ?>
                        <img src="../../assets/images/profile/<?php echo $row['profileimg']; ?>" style="width: 50px; height: 50px; border-radius: 100%;">
                <?php } else { ?>
                    <img src="../" alt="abc">
                <?php } ?> 
                <div class="twelve columns">
                    <div class="columns-wrap">
                        <input style="margin-left:30%" type="file" class="greennature-require" name="email" placeholder ="username" >
                    </div>
                </div>
                
                    <div class="twelve columns">
                    <p style="font-size: 2em;">Nama</p>
                        <div class="columns-wrap  ">
                            
                            <?php if($row['username']){ ?>
                                <input type="text" style="margin-top: -30px;" class="greennature-require" name="username" placeholder ="username" value=" <?php echo $row['username'];?>" >
                            <?php } else { ?>
                                <input type="text" class="greennature-require" name="username" placeholder ="username" >
                                <?php } ?>
                        </div>
                    </div>
                    

                        <div class="twelve columns">
                        <div class="columns-wrap  ">
                            
                        </div>
                    </div>
                    
                <?php } ?>
</div>
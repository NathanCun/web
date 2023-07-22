<?php
$url = $_SERVER['PHP_SELF'];
$string = explode("/", $url);
$file = $string[count($string)- 2];
?>

<ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home <?php if($file == "homepage"){echo 'current-menu-item';}  ?>  greennature-normal-menu"><a href="../homepage"><i class="fa fa-home"></i>Beranda</a></li>
                                <li class="menu-item menu-item-has-children <?php if($file == "proyek"){echo 'current-menu-item';}  ?> greennature-normal-menu"><a href="../proyek" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Proyek</a>
                                </li>
                                <li class="menu-item menu-item-has-children <?php if($file == "faq"){echo 'current-menu-item';}  ?> greennature-mega-menu"><a href="../faq" class="sf-with-ul-pre"><i class="fa fa-globe"></i>FAQ</a>
                                   
                                </li>

                                <?php
                                   
                                if (isset($_SESSION['user_id'])) {
                                    echo '<li class="menu-item menu-item-has-children greennature-normal-menu"><a class="sf-with-ul-pre" style="font-size:2em; margin-top:-14px;">|</a></li>';
                                    echo '<li class="menu-item menu-item-has-children '; if($file == "proyek-ku"){echo 'current-menu-item';} echo ' greennature-normal-menu"><a href="../proyek-ku" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Proyek ku</a>';
                                    echo '<li class="menu-item menu-item-has-children '; if($file == "riwayat"){echo 'current-menu-item';} echo ' greennature-normal-menu"><a href="../riwayat" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Riwayat</a>';
                                    $sqluser = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id = '$_SESSION[user_id]' ");
                                    while($row = mysqli_fetch_assoc($sqluser)){
                                        if($row['profileimg']){
                                            echo
                                                '<li class="menu-item menu-item-has-children ';if($file == "profile" || $file == "edit-profile"){echo 'current-menu-item';} echo' menu-item-has-children greennature-normal-menu">
                                                    <a href="../edit-profile" class="sf-with-ul-pre">
                                                        <img src="../../assets/images/profile/'. $row['profileimg'].'" style="width: 20px; height: 20px; border-radius: 100%;">'.$row['username'].'
                                                    </a>

                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="../edit-profile">Ubah Profil</a></li>
                                                        <li class="menu-item"><a href="../logout">Keluar</a></li>
                                                    </ul>
                                                </li>';
                                        } else {
                                            echo
                                            '<li class="menu-item menu-item-has-childrenmenu-item ';if($file == "profile" || $file == "edit-profile"){echo 'current-menu-item';} echo' menu-item-has-children greennature-normal-menu">
                                                <a href="../edit-profile" class="sf-with-ul-pre">
                                                    <img src="../../assets/images/profile/user.png" style="width: 20px; height: 20px; border-radius: 100%; margin-right: 5px">'.$row['namaPerusahaan'].'
                                                </a>

                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="../edit-profile">Ubah Profil</a></li>
                                                    <li class="menu-item"><a href="../logout">Keluar</a></li>
                                                </ul>
                                            </li>';
                                        }
                                        
                                    }
                                } else {
                                    echo '<li class="menu-item menu-item-has-childrenmenu-item '; if($file == "login"){echo 'current-menu-item';} echo ' menu-item-has-children greennature-normal-menu"><a href="../login" target="_blank" class="sf-with-ul-pre">Perusahaan</a>';
                                }
                                ?>
                            </ul>
                            <a class="greennature-donate-button greennature-lb-payment"><span class="greennature-button-overlay"></span><span class="greennature-button-donate-text">Donasi</span></a>
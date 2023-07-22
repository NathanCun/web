<ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home current-menu-item greennature-normal-menu"><a href="../homepage"><i class="fa fa-home"></i>Beranda</a></li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="../proyek" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Proyek</a>
                
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-mega-menu"><a href="../faq" class="sf-with-ul-pre"><i class="fa fa-globe"></i>FAQ</a>
                                   
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-normal-menu"><a href="../login" class="sf-with-ul-pre">Perusahaan</a>
                                    <ul class="sub-menu">
                                        <?php
                                            if(!empty($_SESSION["email"])){
                                                echo '<li class="menu-item"><a href="../logout">Logout</a></li>';
                                            }
                                            else{
                                                echo '<li class="menu-item"><a href="../login">Login</a></li>';
                                            }
                                        ?>
                                        <li class="menu-item"><a href="../register">Register</a></li>
                                        <li class="menu-item menu-item-has-children menu-item-7"><a href="" class="sf-with-ul-pre">Faq</a></li>
                                    </ul>
                                </li>
                            </ul>
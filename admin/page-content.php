<?php
    if(isset($_GET["page"])){
        $page = $_GET["page"];

        if($page == "faq"){
            include 'content/faq.php';
        }
        elseif($page == "user"){
            include 'content/user.php';
        }
        elseif($page == "proyek"){
            include 'content/proyek.php';
        }
        elseif($page == "profil"){
            include 'content/profil.php';
        }
    }
    else{
        include 'content/home.php';
    }
?>
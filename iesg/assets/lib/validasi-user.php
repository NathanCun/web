<?php
function isLogin(){
    return !empty($_SESSION["username"]);
}

function isAdmin(){
    return $_SESSION["level"] == 1;
}
?>
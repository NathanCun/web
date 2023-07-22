<?php
function isLogin(){
    return !empty($_SESSION["username"]);
}

function isAdmin(){
    return !empty($_SESSION["level"]);
}
?>
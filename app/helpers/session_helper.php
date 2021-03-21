<?php 
session_start();
function isLoggedIn(){
    if(isset($_SESSION['sh_id'])){
        return true;
    }else {
        return false;
    }
}

<?php

if(!isset($_SESSION)){
    session_start();
}
/**
 * ログインしているかチェックする
 * @return bool
 */
function isLogin() {
    if (isset($_SESSION['user'])) {
        return true;
    }

    return false;
}
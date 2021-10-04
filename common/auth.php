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
/**
 * ログインしているユーザーIDを取得する
 * @return |null
 */
function getLoginUserId() {
    if (isset($_SESSION['user'])) {
        return $_SESSION['user']['id'];
    }

    return null;
}
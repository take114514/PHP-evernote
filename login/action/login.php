<?php
    session_start();
    require '../../common/validation.php';
    require '../../common/database.php';
    
    // パラメータ取得
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
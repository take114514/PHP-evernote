<?php

/**
 * 空チェック
 * @param $errors
 * @param $check_value
 * @param $message
 */
function emptyCheck(&$errors, $check_value, $message){
    if (empty(trim($check_value))) {
        array_push($errors, $message);
    }
}

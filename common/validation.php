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
/** 
 * 最小文字数チェック
 * @param $errors
 * @param $check_value
 * @param $message
 * @param int $min_size
 */ 
function stringMinSizeCheck(&$errors, $check_value, $message, $min_size = 8){
    if (mb_strlen($check_value) < $min_size) {
        array_push($errors, $message);
    }
}   
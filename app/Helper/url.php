<?php


if(!function_exists('print_img_url')){
    function print_img_url($fullUrl) {
        return $fullUrl;
    }
}

if(!function_exists('save_img_url')){
    function save_img_url($folderName='material', $removePath='admin') {
        return str_replace($removePath, '', base_path() . 'new_fs/alphatest/fs_folders/images/uploads/' . $folderName);
    }
}


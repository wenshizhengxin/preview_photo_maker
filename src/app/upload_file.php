<?php


namespace wenshizhengxin\preview_photo_maker\app;


use epii\app\controller;
use wslibs\storage_php_sdk\StorageManager;

class upload_file extends controller
{
    public function creat_task()
    {
        echo StorageManager::storage_task_creat();
        exit;
    }

    public static function getStorageRootDir()
    {
        return StorageManager::get_cloud_root_dir();
    }
}
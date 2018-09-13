<?php

/*
 * Ajax Multiple Image Uploader
 * https://github.com/tharindulucky/ajax-multi-image-uploader
 *
 * Copyright 2018, Tharindu Lakshitha
 * https://coderaweso.me
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */


require 'autoload.php';

\Cloudinary::config(array(
    "cloud_name" => "dajkablj5",
    "api_key" => "963277874729395",
    "api_secret" => "A9TVBKOy3TKdRgsWgXx13WMFgg8"
));




$ds = DIRECTORY_SEPARATOR;  //1
$storeFolder = 'uploads';   //2
if (!empty($_FILES)) {
    $tempFile = $_FILES['files']['tmp_name'];
    $file_name = $_FILES['files']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if(filesize($tempFile) > 5000000){
        echo 'FAILED';
        die();
    }

    if($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG'){
        $new_file_name = time().'.'.$ext;
        $targetPath = 'uploads/';  //4
        $targetFile =  $targetPath. $new_file_name;  //5

        echo 'error';

//        if ($img = @imagecreatefromstring(file_get_contents($tempFile))) {
//            //$upload_result = move_uploaded_file($tempFile,$targetFile); //6
//            $server_res = \Cloudinary\Uploader::upload($tempFile, array("crop"=>"limit", "tags"=>"samples", "width"=>100, "height"=>100));
//            echo $server_res['url'];
//        }else{
//            echo 'FAILED';
//        }
    }else{
        echo 'FAILED';
    }
}
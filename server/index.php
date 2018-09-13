<?php
require 'autoload.php';

\Cloudinary::config(array( 
  "cloud_name" => "dajkablj5", 
  "api_key" => "963277874729395", 
  "api_secret" => "A9TVBKOy3TKdRgsWgXx13WMFgg8" 
));

\Cloudinary\Uploader::upload("D:\Workplace\Programer\PHP\www\sandbox_new\dddd-upload/ddd.jpg", array("crop"=>"limit", "tags"=>"samples", "width"=>100, "height"=>100));
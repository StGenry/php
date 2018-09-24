<?php
header("Content-type: text/html; charset=utf-8");

// Task 1-3. Галерея картинок с уменьшенными копиями

include_once __DIR__ . "/../config/main.php";
include LIB_DIR . "filemanage.php";
include LIB_DIR . "render.php";

render(buildGallery());

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uploadFile = $_FILES['file'];
    if(isset($uploadFile)){
        $uploadFileName = setUniqImgName(IMG_DIR, $uploadFile['name']);
        $fullFileName = IMG_DIR . $uploadFileName;
        $thumbFileName = THUMB_DIR . $uploadFileName;
        if(!file_exists(IMG_DIR)){
            mkdir(IMG_DIR);
        }
        if(!file_exists(THUMB_DIR)){
            mkdir(THUMB_DIR);
        }
        move_uploaded_file($uploadFile['tmp_name'], $fullFileName);
        img_resize($fullFileName, $thumbFileName, 100, 100);
        //render(buildGallery());    
        header("Location: index.php");
    }
}
?>

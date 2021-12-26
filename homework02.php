<?php

    // homework01.php post 過來的 element 放至變數
    if(isset($_FILES['upload']) != null){
        $upload = $_FILES['upload'];
        // 上傳的檔案移至 dir1 目錄下
        move_uploaded_file($upload['tmp_name'], './dir1/' . $upload['name']);
    }

    // 重設圖片尺寸並設為 $img_p
    $img_p = imagecreatetruecolor(400, 300);
    $img = imagecreatefromjpeg('./dir1/' . $upload['name']);
    list($width, $height) = getimagesize('./dir1/' . $upload['name']);
    imagecopyresampled($img_p, $img, 0, 0, 0, 0, 400, 300, $width, $height );
    
    if(isset($_REQUEST['wmText']) != null){
        $wmText = $_REQUEST['wmText'];
        $wmHexColor = $_REQUEST['wmColor'];
        list($r, $g, $b) = sscanf($wmHexColor, "#%02x%02x%02x");
        $wmColor = imagecolorallocate($img_p, $r, $g, $b);
        $wmSize = $_REQUEST['wmSize'];
        $wmAngle = $_REQUEST['wmAngle'];
        $wmPosX = $_REQUEST['wmPosX'];
        $wmPosY = $_REQUEST['wmPosY'];
        
        // 圖片貼上浮水印
        imagettftext($img_p, $wmSize, $wmAngle, $wmPosX, $wmPosY, $wmColor, './dir1/NotoSansTC-Black.otf', $wmText);
    }

    // 改 header 的內容
    header('Content-type: image/jpeg');
    imagejpeg($img_p);
    
    // 將修改後的圖片存進 dir1 目錄
    imagejpeg($img_p, './dir1/watermark_' . $upload['name']);

    imagedestroy($img);
    imagedestroy($img_p);


?>
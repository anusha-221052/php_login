<?php
if(isset($_GET['file'])){
    $filename=$_GET['file'];
    $filepath="uploads".$filename;
    if(file_exists($filepath)){
        header("Cotent-Description:File Transfer");
        header("Content-Type:application/octet-stream");
        header("Content-Disposition:attachment; filename".basename($filepath));
        header("Content-Length:".filesize($filepath));
        readfile($filepath);
        exit();
    }
    else{
        echo "file not found";
    }
}
else{
        echo "Invalid request";
    }

?>
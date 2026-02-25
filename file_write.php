<form method="post">
    <input type="text " name="filename" placeholder="enter file name">
    <br><br>
    <textarea name="content"></textarea>
    <br><br>
    <button >create file</button>
</form>

<?php
if(isset($_POST['filename'])){
    $fileNmae="ff/".$_POST['filename'];
    $content=$_POST['content'];
    $file=fopen($fileName,"w") or die("unable to create file");
    fwrite($file,$content);
    fclose($file);
    echo "file created";
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><br>
    <button>read file</button>
</form>

<?php
if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myfile=fopen($file,"r") or die("unable to read file");
    echo fread($myfile,filesize($file));
    fclose($myfile);
}
?>
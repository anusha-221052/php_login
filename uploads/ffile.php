<?php
$message="";
if(isset($_POST['upload'])){
    if(isset($_FILES['file'])&& $_FILES['file']['error']==0){
        $filename=$_FILES['file']['name'];
        $tempname=$_FILES['file']['tmp_name'];
        $folder="uploads".$filename;
        if(move_uploaded_file($tempname,$folder)){
            $message="file uploaded successfully";
        }
        else{
            $message="file upload failed";
        }
    }
    else{
        $message="please select a file.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>file upload</title>
</head>
<body>
    <h2>Upload File</h2>
    <form method='POST'enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="upload">upload</button>
</form>
<p style="color:blue;"><?php echo $message;?></p>
<?php
if(isset($folder)&& file_exists($folder)){
    echo "<a href ='download.php?file=$filename'>Download</a>";
    echo "<br><a href ='delete.php?file=$filename'>Delete</a>";
}
?>
</body>
</html>
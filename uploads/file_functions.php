<?php
//FILE READ/WRITE
echo "<h3>1.FILE READ/WRITE</h3>";
$filename="whoareu.txt";
//fopen()
$file=fopen($filename,"w");
//fwrite
fwrite($file,"HOW ARE YOU");
//fclose
fclose($file);
$file=fopen($filename,"r");
//fread
$f=fread($file,filesize($filename));
fclose($file);
echo "<br><br> content using fread():";
echo $f;
//file_get_cotents
$d=file_get_contents($filename);
echo "<br>content using file_get_contents()\n";
echo $d;
//file_put_cotents
file_put_contents($filename,"this line added using file_put_contents()\n",FILE_APPEND);
echo "<br>new line added using file_put_cotents";
//file()
$lines=file($filename);
echo"<br><br><br>file line by line using file():<br><br>";
foreach($lines as $line){
    echo $line."<br>";
}


//2.FILE INFORMATION FUNCTIONS
echo "<h3>2. File Information</h3>";
echo "File exists: " . (file_exists("whoareu.txt") ? "Yes" : "No") . "<br>";
echo "File size: " . filesize("whoareu.txt") . " bytes<br>";
echo "File type: " . filetype("whoareu.txt") . "<br>";
echo "Last accessed: " . date("Y-m-d H:i:s", fileatime("whoareu.txt")) . "<br>";
echo "Last modified: " . date("Y-m-d H:i:s", filemtime("whoareu.txt")) . "<br>";
echo "Created time: " . date("Y-m-d H:i:s", filectime("whoareu.txt")) . "<br>";
echo "Permissions: " . fileperms("whoareu.txt") . "<br>";
echo "Owner: " . fileowner("whoareu.txt") . "<br>";
echo "Group: " . filegroup("whoareu.txt") . "<br>";
echo "Inode: " . fileinode("whoareu.txt") . "<br><br>";



//3.FILE & FOLDER MANAGEMENT
echo "<h3>3. File & Folder Management</h3>";

// copy()
copy("whoareu.txt", "hello.txt");
echo "File copied to copy_demo.txt<br>";

// rename()
rename("hello.txt", "hi.txt");
echo "File renamed to hi.txt<br>";

// is_file() & is_dir()
echo "Is demo.txt a file? " . (is_file("whoareu.txt") ? "Yes" : "No") . "<br>";
echo "Is uploads a directory? " . (is_dir("uploads") ? "Yes" : "No") . "<br>";

// mkdir()
if (!is_dir("testfolder")) {
    mkdir("testfolder");
    echo "Folder testfolder created<br>";
}

// rmdir()
rmdir("testfolder");
echo "Folder testfolder removed<br>";

// unlink()
unlink("hi.txt");
echo "hi.txt deleted<br><br>";



//4.DIRECTORY HANDLING
echo "<h3>4. Directory Handling</h3>";

// scandir()
echo "Files using scandir():<br>";
print_r(scandir("."));
echo "<br><br>";

// opendir() + readdir()
echo "Files using opendir() and readdir():<br>";
$dir = opendir(".");
while ($file = readdir($dir)) {
    echo $file . "<br>";
}
closedir($dir);

echo "<br>Current Working Directory: " . getcwd() . "<br>";

// chdir()
chdir(".");
echo "Directory changed successfully<br><br>";




//5.FILE LOCKING
echo "<h3>5. File Locking</h3>";

$log = fopen("log.txt", "a");
flock($log, LOCK_EX);
fwrite($log, "User accessed at " . date("Y-m-d H:i:s") . "\n");
flock($log, LOCK_UN);
fclose($log);

echo "Data written to log.txt using file locking<br>";

?>
?>
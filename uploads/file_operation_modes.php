<?php
echo "<h2>Task 3: File Operation Modes in PHP</h2>";

//r  → Read only
echo "<h3>Mode: r (Read Only)</h3>";
$file = fopen("mode_r.txt", "w");
fwrite($file, "This is read-only mode file.");
fclose($file);

$file = fopen("mode_r.txt", "r");
echo fread($file, filesize("mode_r.txt"));
fclose($file);



// w  → Write only (erase old data)
echo "<h3>Mode: w </h3>";
$file = fopen("mode_r.txt", "w");
fwrite($file, "Old data erased. New data written.");
fclose($file);
echo "Data written using w mode";



//   a  → Append only

echo "<h3>Mode: a (Append)</h3>";
$file = fopen("mode_r.txt", "a");
fwrite($file, "\nAppended data.");
fclose($file);
echo "Data appended successfully";



//   x  → Create new file
echo "<h3>Mode: x (Create New)</h3>";
if (!file_exists("mode_x.txt")) {
    $file = fopen("mode_x.txt", "x");
    fwrite($file, "File created using x mode.");
    fclose($file);
    echo "File created successfully";
} else {
    echo "File already exists (x mode fails)";
}



//   r+ → Read & Write
echo "<h3>Mode: r+ (Read & Write)</h3>";
$file = fopen("mode_r.txt", "w");
fwrite($file, "Initial content");
fclose($file);

$file = fopen("mode_r.txt", "r+");
fwrite($file, "Updated ");
rewind($file);
echo fread($file, filesize("mode_r.txt"));
fclose($file);



//   w+ → Read & Write (erase old)
echo "<h3>Mode: w+ (Read & Write, Erase)</h3>";
$file = fopen("mode_r.txt", "w+");
fwrite($file, "New data only");
rewind($file);
echo fread($file, filesize("mode_r.txt"));
fclose($file);



//a+ → Read & Append
echo "<h3>Mode: a+ (Read & Append)</h3>";
$file = fopen("mode_r.txt", "a+");
fwrite($file, "\nMore data");
rewind($file);
echo fread($file, filesize("mode_r.txt"));
fclose($file);



//x+ → Create new Read & Write
echo "<h3>Mode: x+ (Create New Read & Write)</h3>";
if (!file_exists("mode_xp.txt")) {
    $file = fopen("mode_xp.txt", "x+");
    fwrite($file, "Created using x+ mode");
    rewind($file);
    echo fread($file, filesize("mode_xp.txt"));
    fclose($file);
} else {
    echo "File already exists (x+ mode fails)";
}

?>
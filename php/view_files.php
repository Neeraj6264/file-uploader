<?php
$dir = __DIR__ . "/files/";

if (!is_dir($dir)) {
    echo "No files found.";
    exit;
}

$files = scandir($dir);

echo "<h2>Available Files</h2>";

foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        echo "<a href='files/$file' target='_blank'>$file</a><br>";
    }
}
?>

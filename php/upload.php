<?php
if (isset($_FILES['file'])) {

    $file_name = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];

    $upload_dir = __DIR__ . "/files/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_up_name = time() . "_" . $file_name;

    move_uploaded_file($tmp_name, $upload_dir . $file_up_name);
}
?>

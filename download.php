<!DOCTYPE html>
<html lang="en">


    <?php

    $file_url = 'apk/gta_app.apk';
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
    readfile($file_url);

    ?>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 22.02.2017
 * Time: 23:53
 */

        $file ='file'. DIRECTORY_SEPARATOR. 'form.html';
        $ft = fopen($file,'r');
        $file_content = fread($ft,filesize($file));
        fclose($ft);

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>File <?=$file?> contents:</h1>
    <pre>
    <?php
            echo htmlentities($file_content);
    ?>
    </pre>

</form>
</body>
</html>

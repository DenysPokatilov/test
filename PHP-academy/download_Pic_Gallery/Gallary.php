<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 23.02.2017
 * Time: 1:34
 */
//$forMaxUpload=1024*1024*2;

//$galleryDir='file'.DIRECTORY_SEPARATOR.'gallery';
//if (!empty($_POST)) {
//    echo 'POST data' . var_export($_POST, 1) .
//        'FILES:' . '<pre>' . var_export($_FILES, 1) . '<pre>';
//
//    if (function_exists('mime_content_type')) {
//        $type = mime_content_type($_FILES['file']['tmp_name']);
//        echo 'Upload mime type:' . var_export($type, 1) . "<br>";
//        exit;
//    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
//    $finfo = new finfo(FILEINFO_MIME_TYPE);
//    if (false === $ext = array_search(
//            $finfo->file($_FILES['file1']['tmp_name']),
//            array(
//                'jpg' => 'image/jpeg',
//                'png' => 'image/png',
//                'gif' => 'image/gif',
//            ),
//            true
//        )
//    ) {
//        throw new RuntimeException('Invalid file format.');
//    }
//    if ($_FILES['file']['size'] > $forMaxUpload) {
//        echo 'Upload file size:' . $_FILES['file1']['size'] . 'is graetter maximum possible size';
//    }
//
//
//}
//
//
//function displayGalleryImg(){
//    global $galleryDir;
//    $imgs= glob($galleryDir. DIRECTORY_SEPARATOR. "*.(jpg,png,gif)",GLOB_BRACE);
//    if (!empty($img)){
//        echo var_export($img,1),"<br>";
//    }
//    foreach ($imgs as $item){
//        echo '<img width=200px scr="'.$item.'" alt="'.htmlentities($item).'">';
//    }
//}

//присвоение переменной директории
$dir_list=['gallery','gallery2'];


//поверка на отправку файла
if (isset($_FILES['file']['name'])) {
    $dir = $_POST['save_dir'];
    $file = $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $_FILES['file']['name'])) {
        echo "file is uploaded!";
    } else {
        echo "error" . $file . "is not uploaded";
    }

    foreach ($dir_list as $dir) {
        $img1 = glob($dir . DIRECTORY_SEPARATOR . '*');
        // var_dump($img1);

        foreach ($img1 as $img) {
            $filelist = glob($img . DIRECTORY_SEPARATOR . '*');
            echo "<img width=10% src='" . $img . "'>";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
</head>
<body>
<form action="Gallary.php" method="post" enctype="multipart/form-data">
   <div>
       <label for="field">Choose image file (jpeg,png,gif)*:</label>
       <input type="file" name="file">
   </div>
    <select name="save_dir">
        <option value="gallery/">gallery 1</option>
        <option value="gallery2/">gallery 2</option>
    </select>

    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="submit" value="Submit from data">
</form>

<hr>
    <div>

<!--       --><?php
//               foreach ($filelist as $img){
//                      $filelist = glob($img.DIRECTORY_SEPARATOR .'*');
//                 echo "<img width=25% src='".$img."'>";
//
//                  }
//        ?>


    </div>
</body>
</html>


//
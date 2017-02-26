<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 23.02.2017
 * Time: 1:09
 */
$fileName='file'.DIRECTORY_SEPARATOR.'newTXT.txt';
$arr=[1,2,3,4,-54,467];
if (file_put_contents($fileName,serialize($arr))){
    echo 'Wrote data to file'.$fileName;
}else{
    echo 'Error writing data to file'.$fileName;
}
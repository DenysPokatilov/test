<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 23.02.2017
 * Time: 0:26
 */
$fileName= 'file'.DIRECTORY_SEPARATOR."tx.txt";
if (is_writable($fileName)){
    $fh=fopen($fileName,'a');
    if ($fh!==false){
       if( fwrite($fh,'tets file content5'."\n" )){
           echo "written data to file".$fileName;
       }
    }else{
        echo 'Error can not open file'. $fileName;
    }
    fclose($fh);
}else{
    echo "Error file". $fileName. "is not writable";
}

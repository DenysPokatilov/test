<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 24.02.2017
 * Time: 15:09
 */
$connect = mysqli_connect("localhost","root","","testsite");
mysqli_connect($connect,"utf8");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL". mysqli_connect_error();
}
$query= "INSERT INTO new_caregory VALUES (null, 'новая категорияэ', 'bdvbdr',1,1);";
$info= mysqli_query($connect,$query);
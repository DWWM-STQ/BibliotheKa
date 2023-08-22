<?php
function load($path){
    

    $sql = "SELECT img_blob FROM images WHERE img_nom = '$path'";
    require_once '../CRUD/config.php';
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) == 0){
            while ($row = mysqli_fetch_array($result)){
                if ($path == $row["img_nom"]){
                    header ("Content-type: " . $result[0]);
                    return $result[0];
                }
            }
        }
    }
}
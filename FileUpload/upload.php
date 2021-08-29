<?php

    $target_dir = "uploads/";
    error_reporting(0);
    mkdir("uploads");
    $target_file = $target_dir . $_FILES["filetoupload"]["name"];

    if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
    {
        echo "The File has been uploaded.";
    }
    else
    {
        echo "Sorry, There was an error uploading your file.";
    }

?>
<?php

    $text = $_GET['massageText']; # ?massageText=hello

//Set a default text if none is specified
    if(strlen($text)<=0)
        $text = "No Massage Specified.";

//Create an image with the specified dimentions
    $image = imagecreate(800,400); # image width and height

//Set background color
    $color = imagecolorallocate($image,128,41,222);

//Text color
    $colorBlue = imagecolorallocate($image,46,247,17);

//Draw the string (image,font_size,space_side,space_top,text,color)
    imagestring($image,10,10,10,$text,$colorBlue);

//Set type of image and send the output
    header("Content-type: image/jpeg");
    imagejpeg($image);

//Release Memory
    imagedestroy($image);

?>
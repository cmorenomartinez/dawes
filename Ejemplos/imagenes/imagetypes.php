<?php
if (imagetypes() & IMG_GIF) {
    echo "El tipo GIF es soportado<br>";
                   }else{
    echo "El tipo GIF NO ES SOPORTADO<BR>";
}
if (imagetypes() & IMG_PNG) {
    echo "El tipo PNG es soportado<br>";
                   }else{
    echo "El tipo PNG NO ES SOPORTADO<BR>";
}
if (imagetypes() & IMG_JPG) {
    echo "El tipo JPG es soportado<br>";
                   }else{
    echo "El tipo JPG NO ES SOPORTADO<BR>";
}
if (imagetypes() & IMG_WBMP) {
    echo "El tipo WBMP es soportado<br>";
                   }else{
    echo "El tipo WBMP NO ES SOPORTADO<BR>";
}
?>
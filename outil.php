<?php
// Tri l'extension d'un fichier
function getFileExtension($file){
    return substr(strrchr($file,'.'),1);
}
?>
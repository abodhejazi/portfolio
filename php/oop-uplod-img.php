<?php
require ('../php/oo_upload.php');
$fileUpload = new file();
if(isset($_FILES['file'])){
$fileUpload->uploadfile($_FILES['file']);

}
else{
    die('not submeted');
}
?>
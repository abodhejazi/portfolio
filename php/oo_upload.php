<?php session_start();
class file{
    private $_suporttedformats =['image/png','image/jpeg','image/jpg','image/gif'];
    public function uploadfile ($file){
        
        if(is_array($file)){
            if(in_array($file['type'],$this->_suporttedformats)){
                move_uploaded_file($file['tmp_name'],'../assets/img/'.$file['name']);
                $_SESSION['message']="file uploaded successfully";
                header("location:graphics.php");
            }
            
            else{
                die('file format no suppoted');
            }
            
            }
        }
        
    } 



?>

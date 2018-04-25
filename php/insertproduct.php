<?php session_start();?>
<?php require ('../config/config.php');
class insert{
    function insert_product($name,$brand,$color,$modle,$userpic){
        global $conn;
        $sql="INSERT INTO products (name,brand,color,modle,img) VALUES ('$name','$brand','$color','$modle','$userpic')";
        $result=mysqli_query($conn,$sql);
        unset($_POST);
        return $result;
        $_SESSION['mesage']='1 product inserted';
        
    }
}
?>
<?php
  
     $product= new insert();
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $color=$_POST['color'];
    $modle=$_POST['modle'];
    //imge process
     $imgFile = $_FILES['pro_image']['name'];
     $tmp_dir = $_FILES['pro_image']['tmp_name'];
     $imgSize = $_FILES['pro_image']['size'];
    
    if(empty($name)){
   $_SESSION['err_message'] = "Please Enter product name.";
  }
  else if(empty($brand)){
   $_SESSION['err_message']= "Please Enter Your brand.";
  }
  else if(empty($color)){
   $_SESSION['err_message'] = "Please Select color File.";
  }elseif(empty($modle)){
      $_SESSION['err_message']= "Please Select color File.";
  }elseif(empty($imgFile)){
      $_SESSION['err_message']= "Please Select image File.";
  }
  else
  {
   $upload_dir = '../assets/img/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions that we need :) 
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size 'max below 5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $_SESSION['err_message']= "Sorry, your file is too large.";
    }
   }
   else{
    $_SESSION['err_message']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  }
  if(!isset($_SESSION['err_message'])){
      
   $product->insert_product($name,$brand,$color,$modle,$userpic);
      
  }
  
  
   
    
   $_SESSION['err_message']="product inserted successfully";
                  header("location:insert.php");

     }else{
        echo 'try again';
          }
         
     ?>
<?php
class insert{
    function insert_product($name,$brand,$color,$modle){
        $result=mysqli_query("insert into products(name,brand,color,modle) values ('$name','$brand','$color','$modle')");
        return $result;
    }
}
?>
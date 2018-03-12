<?php
require "../config/config.php";
session_start();
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 2;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($conn,"SELECT * FROM products
            WHERE (`name` LIKE '%".$query."%') OR (`brand` LIKE '%".$query."%')OR (`color` LIKE '%".$query."%')") or die(mysql_error());
             
         $Q=mysqli_num_rows($raw_results);
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
              
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                $_SESSION['search']= $Q."<em><h4>".$results['name']."</h4>".$results['color']."  Avalible </em>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
                header("location:index.php");//redirect to index
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
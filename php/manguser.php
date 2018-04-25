<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
<?php require "../config/config.php";
	$query = "SELECT * FROM users ORDER BY userid DESC";
	$result = mysqli_query( $conn,$query) or die('Could not look up user information; ' . mysqli_error($conn));
	  ?><div class="col-sm-8 text-left ">
	      <?php
        while($row=mysqli_fetch_assoc($result)){
   ?>
 
   

      
    <p class="page-header"></p>
    <p><?php echo "Name:  ". $row['username'] ?></p>
    <p><?php echo "Password:  ". $row['password'] ;?></p>
    <p><?php echo "Email:  ". $row['email'] ;?></p>
 
     
<span>
    <a class="btn btn-info" href="registerupdate.php?userid=<?php echo $row['userid']?>" title="click for edit"
    onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
    </span>
<?php
}
?>
    
    </p>
   </div>
   
   
<div class="col-sm-2 text-left ">
    <div class="well">
<h1>live search</h1>    
<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div class="well" id="livesearch">
    
</div>
</form>
</div>
</div>
   
   
   <script>
 
   
    function showResult(str) {
    if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","ajaxsearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>

        <div class="row">
            <div class="col-sm-8 center">
                <form action="#">
                    <p><input type="text" id="search" placeholder="Type something..." autocomplete="off" class="form-control" /></p>
                    <p><input type="submit" value="Search" class="form-control btn btn-primary w100"></p>
                </form>
                <div id="results"></div>
            </div>
        </div>
        
     <!-- scripts -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="../assets/js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
    
    
        <?php require ('../includes/footer.php');?>
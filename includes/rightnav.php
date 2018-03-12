 <div class="col-sm-2 sidenav">
      <div class="well">
        <form action="search.php" method="GET">
    <input type="text" name="query"/>
    <input type="submit" value="Search" />
      </form>
      </div>
      <div class="well">
        <?php
      echo "<h3><font color=black>".$_SESSION['search']."</font></h3>";
       unset($_SESSION['search']);
        ?>
      </div>
    </div>
  </div>
</div>

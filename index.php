<? 
include "func.php"; 
include "head.php"; 
?>
<body>
<div class="container"> 
  
  <!-- Static navbar -->
  <? include "navbar.php"; ?>
  <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <? include "main.php";?>
        </div><!--/span-->

        <div class="col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <? include "sidebar.php";?>
        </div><!--/span-->
      </div><!--/row-->

      <? include "footer.php"; ?>

    </div><!--/.container-->

</div>
<!-- /container --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>

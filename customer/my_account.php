<?php
    
    include("includes/header.php")

?>
   
   
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acceuil</a>
                   </li>
                   <li>
                       Mon profil
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
               <div class="col-md-9">
                   <div class="box">
                       <?php
                       if (isset($_GET['my_orders']))
                           include("my_orders.php");
                       ?>
                       
                       <?php
                       if (isset($_GET['pay_offline']))
                           include("pay_offline.php");
                       ?>
                       
                       <?php
                       if (isset($_GET['edit_account']))
                           include("edit_account.php");
                       ?>
                       
                       <?php
                       if (isset($_GET['change_pass']))
                           include("change_pass.php");
                       ?>
                       
                       <?php
                       if (isset($_GET['delete_account']))
                           include("delete_account.php");
                       ?>
                   </div>
               </div>
                </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
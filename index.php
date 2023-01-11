<?php 
    include "inc/header.php";
    include "inc/database.php";
    include "inc/mysqul.php"
?>
<?php
//       function __autoload($calss_name){
//           include "inc/".$calss_name.".php";
//       }
?>

    <div class="para">
        <?php
            $db = database;
            $db ->setDatabase("mysul");
            $db ->connect("host", "db", "user", "pass", "contante");
          
       
            
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>
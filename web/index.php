<!DOCTYPE html>
<html lang="en">
    <!--Head-->
    <?php
        include_once '../view/partials/head.html';
        include_once '../lib/helpers.php';
    ?>

    <body>
        <?php
            include_once '../view/partials/menu.html';
            
            //include_once '../view/partials/header.html';
        ?>

    <div class="container">
        <?php include_once '../view/partials/filtro.html'; ?>        
        
            
                    <?php            
                        resolve();
                        
                    ?>
    </div>
        
        <!--Footer-->
        <?php
            include_once '../view/partials/footer.html';
        ?>
    </body>
</html>
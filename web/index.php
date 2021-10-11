<!DOCTYPE html>
<html lang="en">
    <!--Head-->
    <?php
        include_once '../view/partials/head.html';
        include_once '../lib/helpers.php';
    ?>

    <body>
        <!--Menu-->
        <?php
            include_once '../view/partials/menu.html';
        ?>
        <!--header-->
        <?php
            include_once '../view/partials/header.html';
        ?>
        <!--Dashboard-->
        <?php
            //include_once '../view/partials/dashboard.html';
            resolve();            
        ?>
        <!--Footer-->
        <?php
            include_once '../view/partials/footer.html';
        ?>
    </body>
</html>
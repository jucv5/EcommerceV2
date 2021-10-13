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

    <!-- Modal Login -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalLogin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmLogin" method="POST" action="<?=getUrl("login", "Login", "accessSystem")?>" >
                <div class="modal-body">
                
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Usuario</label>
                            <input type="text" class="form-control" id="userName" name="userName">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Contraseña</label>
                            <input type="text" class="form-control" id="userPass" name="userPass">
                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
  </div>
    </div>
        
        <!--Footer-->
        <?php
            include_once '../view/partials/footer.html';
        ?>
    </body>
</html>
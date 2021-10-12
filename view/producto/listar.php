                
    <?php 
    
    if($listProduct->num_rows > 0){
        foreach($listProduct as $prod){
    ?>
        <div class="col-md-3 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
                <img src="assets/img/dummyimg.png" alt="" />
                <div class="caption">
                    <h3><a href="#"><?= $prod['nombre_producto']?></a></h3>
                    <p>Precio : <strong><?= $prod['precio']?></strong>  </p>
                    <p><a href="#">Ptional dismiss button </a></p>
                    <p>Ptional dismiss button in tional dismiss button in   </p>
                    <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                </div>
            </div>
        </div>
    <?php
        }
    } else{
        echo'<div class="col-md-12 text-center col-sm-6 col-xs-6">No hay registros asociados a la consulta !!!</div>';
    }
    ?>

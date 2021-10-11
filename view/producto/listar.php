<?php
foreach($listProduct as $row){
        ?>
            <tr>
                <td><?=$row['codigo_producto '] ?></td>
                <td><?=$row['nombre_producto'] ?></td>
                <td><?=$row['precio'] ?></td>
               
            </tr>
        <?php
}

?>
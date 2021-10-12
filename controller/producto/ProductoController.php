<?php
    include_once '../model/MasterModel.php';

    class ProductoController extends MasterModel{

        public function index(){
            $sql = "SELECT * FROM producto WHERE estado='Disponible' ORDER BY nombre_producto ASC";
            $listProducto=$this->execute($sql);
            include_once('../view/producto/listar.php');
        }

        public function filter(){
                        
            $descProd = $_POST['descProd'];
            $sql = "SELECT * FROM producto WHERE estado='Disponible' AND nombre_producto LIKE '".$descProd."%' ORDER BY nombre_producto ASC";
            $listProduct=$this->execute($sql);
           
            include_once('../view/producto/listar.php');
        }

        public function filterCategory(){
            
            $descProd = $_POST['descProd'];            
            $sql = "SELECT * FROM producto INNER JOIN categoria ON producto.categoria_idcategoria=categoria.idcategoria  
            WHERE  nombre_categoria LIKE '".$descProd."%' ORDER BY nombre_producto ASC";
            $listProduct=$this->execute($sql);
           
            include_once('../view/producto/listar.php');
        }

    }
?>
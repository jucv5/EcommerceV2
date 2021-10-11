<?php
    include_once '../lib/conf/Connection.php';

    class MasterModel extends Connection{
        public function execute($sql){
            $ejecutar = mysqli_query($this->getConnect(),$sql);
            if ($ejecutar) {
                return $ejecutar;
            } else {
                die(mysqli_error($this->getConnect()));
            }
        }
    }
?>
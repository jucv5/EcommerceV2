<?php
include_once '../model/MasterModel.php';
class LoginController extends MasterModel {
	    

    public function getLogin(){                            
        include_once ('../view/login/login.php');			
    }

    public function accessSystem(){  
        $username=$_POST['userName']; 
        $userpass=$_POST['userPass']; 
        $sql="SELECT * FROM usuario 
            WHERE estado='Activo' AND user='".$username."' AND password='".$userpass."' ";	        
        $listUsuario=$this->execute($sql);   

        if($listUsuario->num_rows > 0){
            foreach($listUsuario as $user){}
            //Falta llenar las variables tipo $_SESSION
            $_SESSION['user']=$user['user'];
            $_SESSION['name']=$user['nombre'].' '.$user['apellido'];
            $_SESSION['mail']=$user['email_usuario'];
            
            alertas("Usuario Valido  ;) !!!!");
            redirect("index.php");
        }
        else{
            session_destroy();
            alertas("Usuario no valido !!!!");
            redirect(getUrl("login", "Login", "getLogin"));
        }
                       			
    }
  
}

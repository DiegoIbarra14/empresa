<?php
class Admin extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
       
    }
    public function index()
    {
        $data['title'] = 'Login';
        $this->views->getView('admin', "login", $data);
    }
    public function validar(){
        if (isset($_POST["correo"])&& isset($_POST["clave"])) {
            if(empty($_POST["correo"]) || empty($_POST["clave"])){
                $respuesta=array('msg'=>'TODOS LOS CAMPOS SON REQUERIDO','icono'=>'warning');
            }else{
                $data=$this->model->getUsuario($_POST["correo"]);
                if(empty($data)){
                    $respuesta=array('msg'=>'EL CORREO NO EXISTE','icono'=>'warning');
                }else{
                    if(password_verify($_POST["clave"],$data["clave"])){
                        $_SESSION["correoUsuario"]=$data["correo"];
                        $_SESSION["nombreUsuario"]=$data["nombres"].$data["apellidos"];
                        $respuesta=array('msg'=>'DATOS CORRECTOS','icono'=>'success');
                    }else{
                        $respuesta=array('msg'=>'CONTRASEÑA INCORRECTA','icono'=>'warning');
                    }
                }
                
        }
        }else{
            $respuesta=array('msg'=>'ERROR DESCONOCIDO','icono'=>'error');
        }
        echo json_encode($respuesta);
        die();
        
        
    }
    public function home()
    {   
        if(!empty( $_SESSION["correoUsuario"])){
            $data['title'] = 'Pagina Administrador';
            $data['emailUser']=$_SESSION["correoUsuario"];
            $data['nameUser']=$_SESSION["nombreUsuario"];
            $this->views->getView('admin', "home", $data);

        }else{
            header('Location:'.BASE_URL.'admin/');
        }
        

    }
    public function cerrar(){
        unset($data['emailUser']);
        unset($data['nameUser']);
        header('Location:'.BASE_URL.'admin/');



    }
}

?>
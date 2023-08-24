<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once './assets/phpmailer/Exception.php';
require_once './assets/phpmailer/PHPMailer.php';
require_once './assets/phpmailer/SMTP.php';
class Clientes extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
       
    }
    public function index()
    {
        
        if(empty($_SESSION['correoCliente'])){
            header('Location:'.BASE_URL); 
        }

        $data["title"]='Tu perfil';
        $data['verificar']=$this->model->getVerificar($_SESSION['correoCliente']);
        $this->views->getView('principal','perfil',$data);
    }
    public function registroDirecto()
     {
        if(isset($_POST["nombre"])&&isset($_POST["apellido"])&& isset($_POST["correo"])&&isset($_POST["clave"])){
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $correo=$_POST["correo"];
            $clave=$_POST["clave"];
            $verificar=$this->model->getVerificar($correo);
            if (empty($verificar)) {
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $token = md5($correo);
                $data = $this->model->registroDirecto($nombre, $apellido, $correo, $hash, $token);

                if ($data > 0) {
                    $mensaje = array('msg' => 'Registrado con exito', 'icono' => 'success', "token" => $token);
                    $_SESSION['correoCliente'] = $correo;
                    $_SESSION['nombreCliente'] = $nombre . " " . $apellido;

                } else {
                    $mensaje = array('msg' => 'Error al registrarse', 'icono' => 'error');


                }
                
                
            } else {
                $mensaje = array('msg' => 'YA TIENES UNA CUENTA', 'icono' => 'warning');
            }
            echo json_encode($mensaje);
            
            

        }
        
        
    }
    public function enviarCorreo(){
        if(isset($_POST['correo'])&& isset($_POST['token']) ){
            $mail = new PHPMailer(true);
    
            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = HOST_SMTP;                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = USER_SMTP;                     //SMTP username
                $mail->Password   = PASS_SMTP;                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = PUERTO_SMTP;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTT
                //Recipients
                $mail->setFrom('di74310048@gmail.com', TITLE);
                $mail->addAddress($_POST['correo']);     //Add a recipie
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Mensaje desde la:'.TITLE;
                $mail->Body    = 'Para verificar su correo en nuestra tienda '.'<a href="'.BASE_URL.'clientes/verificarCorreo/'.$_POST['token'].'">CLICK AQUI</a>';
                $mail->AltBody = 'Gracias por la preferenci';
                $mail->send();
                $mensaje=array('msg'=>'CORREO ENVIADO,REVISA TU BANDEJA DE ENTRADA','icono'=>'success');
            }catch (Exception $e){ 
                $mensaje=array('msg'=>'ERROR AL ENVIAR CORREO','icono'=>'error');
            
            }
        
        }else{
            $mensaje=array('msg'=>'ERROR FATAl','icono'=>'error');

        }
        echo json_encode($mensaje);
        die();
        }
    public function verificarCorreo($token){
        $verificar=$this->model->getToken($token);
        if(!empty($verificar)) {
            $this->model->actualizarVerify($verificar['cliente_id']);
            header('Location:'.BASE_URL.'clientes');
        }else{
            header('Location:'.BASE_URL);
        }

    }
    public function loginDirecto()
    {
       if(isset($_POST["correo"])&&isset($_POST["clave"])){
           
           $correo=$_POST["correo"];
           $clave=$_POST["clave"];
           $verificar=$this->model->getVerificar($correo);
           if (!empty($verificar)) {
               

               if (password_verify($clave,$verificar['cliente_clave'])) {
                   
                   $_SESSION['correoCliente'] = $verificar['cliente_correo'];
                   $_SESSION['nombreCliente'] = $verificar['cliente_nombre']." ".$verificar['cliente_apellido'];
                   $mensaje = array('msg' => 'Registrado con exito', 'icono' => 'success');
                   

               } else {
                   $mensaje = array('msg' => 'CONTRASEÑA INCORRECTO', 'icono' => 'error');


               }
               
               
           } else {
               $mensaje = array('msg' => 'EL CORREO NO EXISTE', 'icono' => 'warning');
           }
           echo json_encode($mensaje);
           
           

       }
       
       
   }
   public function salir()
   {    
        unset($_SESSION['correoCliente']);
        unset($_SESSION['nombreCliente']);
        header('Location:'. BASE_URL);
      

   }
   public function registrarPedido(){
    $datos =file_get_contents('php://input');
    $json=json_decode($datos,true);
    if(is_array($json)){
        $id_trannsaccion = $json['id'];
        $monto=$json['purchase_units'][0]['amount']['value'];
        $status=$json['status'];
        $fecha=date('Y-m-d H:i:s');
        $email=$json['payer']['email_address'];
        $nombre=$json['payer']['name']['given_name'];
        $apellido=$json['payer']['name']['surname'];
        $direccion=$json['purchase_units'][0]['shipping']['address']['address_line_1'];
        $ciudad=$json['purchase_units'][0]['shipping']['address']['admin_area_2'];
        $email_user=$_SESSION["correoCliente"];
        $data=$this->model->registrarPedido($id_trannsaccion,$monto,$status,$fecha,$email,$nombre,$apellido,$direccion,$ciudad,$email_user);
        print_r($data);


    }
   

   }



}
?>


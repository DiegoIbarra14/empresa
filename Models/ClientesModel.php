<?php 
class ClientesModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function registroDirecto($nombre,$apellido,$correo,$clave,$token){
        $sql="INSERT INTO clientes(cliente_nombre,cliente_apellido,cliente_correo,cliente_clave,token)values(?,?,?,?,?)";
        $dato=array($nombre,$apellido,$correo,$clave,$token);
        $data= $this->insertar($sql,$dato);
        if($data> 0){
            $res =$data;
        }else{
            $res=0;
        }
        return $res;
        

    }
    public function getToken($token){
        $sql="SELECT * FROM clientes WHERE token='$token'";
        return $this->select($sql);
        
        

    }
    public function actualizarVerify($id){
        $sql="UPDATE clientes SET token=?,verify=? WHERE cliente_id = ? ";
        $datos=array(null,1,$id);
        $data=$this->insertar($sql,$datos);
        if($data==1){
            $res=$data;

        }else{
            $res=0;

        }
        return $res;
    }
    public function getVerificar($correo){
        $sql="SELECT * FROM clientes WHERE cliente_correo ='$correo'";
        return $this->select($sql);

    }
    public function LoginDirecto($nombre,$apellido,$correo,$clave,$token){
        $sql="INSERT INTO clientes(cliente_nombre,cliente_apellido,cliente_correo,cliente_clave,token)values(?,?,?,?,?)";
        $dato=array($nombre,$apellido,$correo,$clave,$token);
        $data= $this->insertar($sql,$dato);
        if($data> 0){
            $res =$data;
        }else{
            $res=0;
        }
        return $res;
        

    }
    public function registrarPedido($id_trannsaccion,$monto,$status,$fecha,$email,$nombre,$apellido,$direccion,$ciudad,$email_user){
        $sql="INSERT INTO pedidos(id_transaccion,monto,estado,fecha,email,nombre,apellido,direccion,ciudad,email_user)values(?,?,?,?,?,?,?,?,?,?)";
        $dato=array($id_trannsaccion,$monto,$status,$fecha,$email,$nombre,$apellido,$direccion,$ciudad,$email_user);
        $data= $this->insertar($sql,$dato);
        if($data> 0){
            $res =$data;
        }else{
            $res=0;
        }
        return $res;
        
    }
}

?>
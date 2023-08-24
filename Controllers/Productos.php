<?php
class  Productos extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {  
        $data['title'] = 'Productos';
        $data['productos']=$this->model->getProductos();
        $this->views->getView('principal','shop',$data);
       
    }
    public function detail($parametro){
        $data['title'] = 'Productos';
        $data['producto']=$this->model->getProducto($parametro);
        $categoria=$data['producto']['cat_id'];
        $data['relacionados']=$this->model->getAleatorios($categoria,$parametro);
        $this->views->getView('principal','shop-single',$data);
    }
    public function listaProductos(){
        $datos = file_get_contents('php://input');
        $json=json_decode($datos,true);
        $array=array();
        $total=0.00; 
        foreach($json as $producto){
            
            $result = $this->model->getListaProducto($producto['idProducto']);
            $date['id']= $result['pro_id'];
            $date['nombre']=$result['TELA'];
            $date['precio']=$result['precio'];
            $date['cantidad']=$producto['cantidad'];
            $date['imagen']=BASE_URL.'assets/img/telas/'.$producto['idProducto'].'/principal.jpg';
            $date['subtotal']=$result['precio']*$producto['cantidad'];
            $total+=$date['subtotal'];
            $array['productos'][]=$date;
            
        }
        $array['moneda']="PEN";
        $array['total']=$total;
        $array['totalPay']=$total;
        
        echo json_encode($array,JSON_UNESCAPED_UNICODE);
        die();

        
       
    }
    
       
}
?>
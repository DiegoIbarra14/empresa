<?php
class ProductosModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getProductos(){
        $sql='SELECT * FROM vista_product';
        return $this->selectAll($sql);
    }
    public function getProducto($id){
        $sql="SELECT CONCAT(telas.tela_nombre,' ',modelo_telas.modelo_titulo,' ',modelo_telas.modelo_hilado,' ',color.color_nombre) AS TELA,products.precio,categoria_telas.cat_nombre, products.pro_id, modelo_telas.modelo_descripcion,categoria_telas.cat_id FROM products

        INNER JOIN modelo_telas
        ON products.modelo_id=modelo_telas.modelo_id
        INNER JOIN telas
        ON modelo_telas.tela_id=telas.tela_id
        INNER join color
        on products.color_id= color.color_id
        INNER join categoria_telas
        on telas.cat_id=categoria_telas.cat_id
        WHERE pro_id=".$id;
        return $this->select($sql);

    }
    public function getAleatorios($categoria,$id){
        $sql='SELECT *  FROM  vista_product WHERE cat_id = '.$categoria .' and cat_id !='.$id.' ORDER BY RAND() LIMIT 20';
        return $this->selectAll($sql);

    }
    public function getListaProducto($id){
        $sql='SELECT *  FROM  vista_product WHERE pro_id='.$id;
        return $this->select($sql);

    }



}
 
?>
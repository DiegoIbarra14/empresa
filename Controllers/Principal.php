<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
        
    }
    public function index()
    {
        
       
    }
    public function nosotros()
    {
        $data['title'] = 'Nosotros';
        $this->views->getView('principal', "nosotros", $data);
    }
    public function contacto()
    {
        $data['title'] = 'Nosotros';
        $this->views->getView('principal', "contacto", $data);
    }
    
}

?>
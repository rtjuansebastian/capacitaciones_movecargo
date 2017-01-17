<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("proveedores_model");
    }
    
    public function index()
    {
        $datos['proveedores']= $this->proveedores_model->traer_proveedores();
        $this->load->view("proveedores_view",$datos);
    }
    
    public function crear_proveedor()
    {
        $nombre=$this->input->post("nombre");
        $email=$this->input->post("email");
        $telefono=$this->input->post("telefono");
        
        $this->proveedores_model->crear_proveedor($nombre,$email,$telefono);
        
        $this->index();
    }
}

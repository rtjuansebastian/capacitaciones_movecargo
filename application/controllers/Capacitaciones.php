<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capacitaciones extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('capacitaciones_model');
        $this->load->model('proveedores_model');
        $this->load->model('asistencias_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $datos['capacitaciones']= $this->capacitaciones_model->traer_capacitaciones();
        $datos['proveedores']= $this->proveedores_model->traer_proveedores();
        $this->load->view('capacitaciones_view',$datos);
    }
    
    public function crear_capacitacion()
    {
        $data=$this->input->post();
        $this->capacitaciones_model->crear_capacitacion($data);
        
        $this->index();
    }
    
    public function traer_inscritos()
    {
        $capacitacion=$this->input->post("capacitacion");
        $inscritos=$this->asistencias_model->traer_reporte_capacitacion($capacitacion);
        
        echo json_encode($inscritos);
    }
        
}
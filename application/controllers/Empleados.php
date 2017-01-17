<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("empleados_model");
        $this->load->model("capacitaciones_model");
    }
    
    public function index()
    {
        $datos['capacitaciones']= $this->capacitaciones_model->traer_capacitaciones();
        $datos["cargos"]=$this->empleados_model->traer_cargos();
        $datos["sedes"]=$this->empleados_model->traer_sedes();
        $datos["empleados"]=$this->empleados_model->traer_empleados();
        $this->load->view("empleados_view",$datos);
    }
    
    public function crear_empleado()
    {
        $data=$this->input->post();
        
        $this->empleados_model->crear_empleado($data);
        
        $this->index();
    }
    
    public function inscribir_empleados()
    {
        $capacitacion=  $this->input->post("capacitacion");
        $empleados=  $this->input->post("empleados");
        $this->empleados_model->inscribir_empleados($capacitacion,$empleados);
        
        $this->index();
    }
}

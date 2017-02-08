<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencias extends CI_Controller {
    
    public function __construct()
    {        
        parent::__construct();
        $this->load->model("capacitaciones_model");
        $this->load->model("empleados_model");
        $this->load->model("asistencias_model");
    }
    
    public function index()
    {
        $datos['capacitaciones']= $this->capacitaciones_model->traer_capacitaciones();
        $this->load->view("asistencias_view",$datos);
    }
    
    public function traer_asistencia_capacitacion()
    {
        $capacitacion=$this->input->post("capacitacion");
        $empleados=$this->asistencias_model->traer_asistencia_capacitacion($capacitacion);
        
        echo json_encode($empleados);
    }
    
    public function guardar_asistencia()
    {
        $capacitacion=$this->input->post("capacitacion");
        $asistentes=$this->input->post("asistentes");
        
        $this->asistencias_model->guardar_asistencia($capacitacion,$asistentes);
        
        $this->index();
    }
    
    public function traer_reporte_capacitacion()
    {
        $capacitacion=$this->input->post("capacitacion");
        $empleados=$this->asistencias_model->traer_reporte_capacitacion($capacitacion);   
        
        echo json_encode($empleados);
    }
    
}
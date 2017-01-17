<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function crear_empleado($data)
    {        
        $this->db->insert('empleados', $data); 
    }
    
    public function traer_empleados()
    {
        $empleados=array();
        $this->db->select("empleados.id, empleados.nombre, cargos.nombre as cargo, sedes.nombre as ciudad");
        $this->db->from("empleados");
        $this->db->join("cargos","cargos.id=empleados.cargo","left");
        $this->db->join("sedes","sedes.id=empleados.ciudad","left");
        $this->db->group_by("empleados.id");
        $this->db->order_by("empleados.nombre");
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $empleados[$row->id]["id"]=$row->id;
            $empleados[$row->id]["nombre"]=$row->nombre;
            $empleados[$row->id]["cargo"]=$row->cargo;
            $empleados[$row->id]["ciudad"]=$row->ciudad;
        }
        
        return $empleados;
    }
    
    public function inscribir_empleados($capacitacion,$empleados)
    {
        foreach ($empleados as $empleado)
        {
            $data = array(
                'capacitacion' => $capacitacion ,
                'empleado' => $empleado,
                'asistencia' => 'N'
            );

           $this->db->insert('asistencias', $data);             
        }
    }
    
    public function traer_cargos()
    {
        $cargos=array();
        $query=$this->db->get("cargos");
        
        foreach ($query->result() as $row)
        {
            $cargos[$row->id]["id"]=$row->id;
            $cargos[$row->id]["nombre"]=$row->nombre;
        }
        
        return $cargos;
    }
    
    public function traer_sedes()
    {
        $sedes=array();
        $query=$this->db->get("sedes");
        
        foreach ($query->result() as $row)
        {
            $sedes[$row->id]["id"]=$row->id;
            $sedes[$row->id]["nombre"]=$row->nombre;
        }
        
        return $sedes;
    }    
    
}
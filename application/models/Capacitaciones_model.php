<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capacitaciones_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function traer_capacitaciones()
    {
        $capacitaciones=array();
        $this->db->select("capacitaciones.id, capacitaciones.titulo, proveedores.nombre as proveedor, capacitaciones.fecha, capacitaciones.duracion");
        $this->db->from("capacitaciones");
        $this->db->join('proveedores',"proveedores.id=capacitaciones.proveedor","left");
        $this->db->group_by("capacitaciones.id");
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $capacitaciones[$row->id]['id']=$row->id;
            $capacitaciones[$row->id]['titulo']=$row->titulo;
            $capacitaciones[$row->id]['proveedor']=$row->proveedor;
            $capacitaciones[$row->id]['fecha']=$row->fecha;
            $capacitaciones[$row->id]['duracion']=$row->duracion;
        }
        
        return $capacitaciones;
    }
    
    public function crear_capacitacion($data)
    {        
        $this->db->insert('capacitaciones', $data); 
    }
    
}
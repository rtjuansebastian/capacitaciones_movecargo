<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asistencias_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function traer_asistencia_capacitacion($capacitacion)
    {
        $empleados=array();
        $this->db->select("asistencias.empleado, empleados.nombre");
        $this->db->from('asistencias');
        $this->db->join('empleados','empleados.id=asistencias.empleado','left');
        $this->db->where('capacitacion',$capacitacion);
        $this->db->group_by('asistencias.empleado');
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $empleados[$row->empleado]["id"]=$row->empleado;
            $empleados[$row->empleado]["nombre"]=$row->nombre;
        }
        
        return $empleados;
    }

    public function guardar_asistencia($capacitacion,$asistentes)
    {
        foreach ($asistentes as $asistente)
        {
            $data = array(
                'asistencia' => 'S',
            );

            $this->db->where('empleado', $asistente);
            $this->db->where('capacitacion', $capacitacion);
            $this->db->update('asistencias', $data);                     
        }
    }
    
    public function traer_reporte_capacitacion($capacitacion)
    {
        $empleados=array();
        $this->db->select("asistencias.empleado, empleados.nombre, asistencias.asistencia");
        $this->db->from('asistencias');
        $this->db->join('empleados','empleados.id=asistencias.empleado','left');
        $this->db->where('capacitacion',$capacitacion);
        $this->db->group_by('asistencias.empleado');
        $this->db->order_by('empleados.nombre');
        $query=$this->db->get();
        
        foreach ($query->result() as $row)
        {
            $empleados[$row->empleado]["id"]=$row->empleado;
            $empleados[$row->empleado]["nombre"]=$row->nombre;
            $empleados[$row->empleado]["asistencia"]=$row->asistencia;
        }
        
        return $empleados;        
    }
    
}
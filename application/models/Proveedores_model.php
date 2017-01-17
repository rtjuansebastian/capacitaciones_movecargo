<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proveedores_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function traer_proveedores()
    {
        $proveedores=array();
        $query=$this->db->get("proveedores");
        
        foreach ($query->result() as $row)
        {
            $proveedores[$row->id]["id"]=$row->id;
            $proveedores[$row->id]["nombre"]=$row->nombre;
            $proveedores[$row->id]["email"]=$row->email;
            $proveedores[$row->id]["telefono"]=$row->telefono;
        }
        
        return $proveedores;
    }
    
    public function crear_proveedor($nombre,$email,$telefono)
    {
        $data = array(
            'nombre' => $nombre ,
            'email' => $email ,
            'telefono' => $telefono
         );

       $this->db->insert('proveedores', $data);        
    }
        
}
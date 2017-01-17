<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function traer_calendario_capacitaciones()
    {
        $events=array();
        $query=$this->db->get('capacitaciones');
        foreach ($query->result() as $row)
        {
            $eventsArray['id'] =  $row->id;
            $eventsArray['title'] = 'Capacitacion: '.$row->titulo;
            $eventsArray['start'] = $row->fecha;
            $nuevafecha = strtotime ( '+'.$row->duracion.' hour' , strtotime ( $row->fecha ) ) ;
            $eventsArray['end'] = $nuevafecha;
            $eventsArray['url'] = base_url().'capacitaciones/ver_capacitacion?capacitacion='.$row->id;
            $eventsArray['urlrendering']= 'background';
            $eventsArray['allDay'] = "";
            $events[] = $eventsArray;
        }
        
        return json_encode($events);
    }
}
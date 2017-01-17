<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {
    
    public function __construct()
    {        
        parent::__construct();
        $this->load->model("calendario_model");
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
        $this->load->view('calendario_view');
    }
    
    public function traer_calendario_capacitaciones()
    {
        echo $this->calendario_model->traer_calendario_capacitaciones();
    }
}
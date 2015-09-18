<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formulario
 *
 * @author 5-09
 */
class formulario extends CI_Controller {

    private $sql;
    public $link;

    public function __construct(){
    	parent::__construct();
    	$this->load->helper(array("form", "url"));
    	$this->load->library('form_validation');
    }

    public function index(){

        $this->form_validation->set_rules (
            'txtId',
            'Usuario',
            'trim|required|max_length[30]'
        );

        $this->form_validation->set_rules(
            'txtPass',
            'Contraseña',
            'trim|required|max_length[30]'
        );

        $this->form_validation->set_message(
            'required',
            'El campo %s no puede estar vacio'
        );


    	if ($this->form_validation->run()==FALSE) {
            $this->load->view("vFormulario");
    	}
    	else{
            $datos=array('nombre'=> $this->input->post('txtNombre'),
                         'edad'=> $this->input->post('txtEdad'),
                         'correo'=> $this->input->post('txtCorreo'));
            $this->load->view("vResultado", $datos);
    	}
    }
    
    public function agenda(){
        $this->form_validation->set_rules('txtNombre', 'Nombre', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('dteFecha', 'Fecha', 'required');
    	$this->form_validation->set_rules('txaDescripcion', 'Descripcion', 'trim|required|min_length[3]');
        
        if($this->form_validation->run()==FALSE){
            $this->load->view("vAgenda");
        }
        else{
            //$datos['nombre']= $this->input->post('txtNombre');
            $datos = array(
                'nombre' => $this->input->post('txtNombre'),
                'fecha' => $this->input->post('dteFecha'),
                'descripcion' => $this->input->post('txaDescripcion')
            );
            $this->load->view("vAgenda", $datos);
        }
    }

    public function asignarConsulta($consulta)
    {
        $this->sql=mysqli_query($this->link, $consulta) or die(mysqli_error());
    }

    public function devolverConsulta()
    {
        return $this->sql;
    }

    public function devolverTotalRegistros()
    {
        return mysqli_num_rows($this->sql);
    }

    public function liberarConsulta()
    {
        mysqli_free_result($this->sql);
    }

    public function mostrarDatos($campos)
    {
        $tabla="<table border='1'><tr>";
        for($i=0;$i<count($campos);$i++)
        {
            $tabla.="<th>".ucwords($campos[$i])."</th>";
        }
        $tabla.="</tr>";
        
        
        while($f=  mysqli_fetch_array($this->devolverConsulta()))
        {
            $tabla.= "<tr>";
            for($i=0;$i<count($campos);$i++)
            {
                $tabla.= "<td>".$f[$campos[$i]]."</td>";
            }    
            $usr=$f[$campos[0]];
            $nom=$f[$campos[1]];
            $tabla.="</tr>";
        }
       
        $tabla.="</table>";
        return $tabla;
    }
}

?>

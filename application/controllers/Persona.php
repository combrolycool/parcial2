<?php

require_once("application/creacion_db/php/conexion.php");
$db = new DB();
$db = $db->mysql;

class Persona extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Persona_model');
    }

    //vista principal
    public function index(){
        $data['contenido'] = 'usuario/index';
        $data['AllPerson'] = $this->Persona_model->AllPersons();
        $this->load->view('Persona_view', $data);

    }

    //metodo insert
    public function insert(){

        $this->form_validation->set_rules('txtCedula', 'Texto Cedula','min_length[10]|max_length[20]|required|numeric',array(
            'min_length' => 'El campo Cedula debe de tener mas de 10 caracteres',
            'max_length' => 'El campo Cedula debe tener menos de 20 caracteres',
            'required' => 'El campo Cedula es obligatorio',
            'numeric' => 'El campo Cedula solo puede tener valores numericos'
        ));
        $this->form_validation->set_rules('txtNombre', 'Texto nombre','required',array(
            'required' => 'El campo Nombre es obligatorio'
        ));
        $this->form_validation->set_rules('txtApellido', 'Texto apellido','required',array(
            'required' => 'El campo Apellido es obligatorio'
        ));
        $this->form_validation->set_rules('txtEmail', 'Texto email','required',array(
            'required' => 'El campo Email es obligatorio'
        ));

        if($this->form_validation->run() == false){
            $this->index();
            return;
        }

        $datos = $this->input->post();
        $txtCedula = $datos['txtCedula'];
        $txtNombre = $datos['txtNombre'];
        $txtApellido = $datos['txtApellido'];
        $txtEmail = $datos['txtEmail'];
        $this->Persona_model->InsertPerson($txtCedula, $txtNombre, $txtApellido, $txtEmail);
        redirect('');
        
    }

    public function update($id = null){

        if($id != null){
            $data['contenido'] = 'usuario/edit';
            $data['AllPerson'] = $this->Persona_model->AllPersons();
            $data['datosUsuario'] = $this->Persona_model->UpdatePerson($id);
            $this->load->view('Persona_view', $data);

        }else{
            redirect('');
        }

    }

    public function update2(){
        $datos = $this->input->post();
        $txtCedulaVieja = $datos['txtCedulaVieja'];
        $txtCedulaNueva = $datos['txtCedulaNueva'];
        $txtNombre = $datos['txtNombre'];
        $txtApellido = $datos['txtApellido'];
        $txtEmail = $datos['txtEmail'];
        $this->Persona_model->UpdatePerson2($txtCedulaVieja, $txtCedulaNueva, $txtNombre, $txtApellido, $txtEmail);
        redirect('');
    }

    public function delete($id = null){
        if($id != null){
            $this->Persona_model->DeletePerson($id);
        }
        redirect('Persona');
    }

}




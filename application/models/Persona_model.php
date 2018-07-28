<?php

class Persona_model extends CI_Model{

    // Obtener todas las personas
    function AllPersons(){
        $query = $this->db->get('personas')->result_array();
        return $query;
    }

    // Crear personas
    function InsertPerson($cedula, $nombre, $apellido, $email){
        $array = array(
            'cedula' => $cedula,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email
        );
        $this->db->insert('personas', $array);
    }

    // Actualizar personas
    function UpdatePerson($idPersona){
        $consulta = $this->db->query("select * from personas where cedula = $idPersona");
        return $consulta->result();
    }

    function UpdatePerson2($txtCedulaVieja, $txtCedulaNueva, $txtNombre, $txtApellido, $txtEmail){
        
        // $array = array(
        //     'cedula' => $txtCedula,
        //     'nombre' => $txtNombre,
        //     'apellido' => $txtApellido,
        //     'email' => $txtEmail
        // );
        // $this->db->where('cedula', $txtCedula);
        // $result = $this->db->update('personas', $array);
        // return $result;
        
        $sql = "update personas set cedula=?, nombre=?, apellido=?, email=? where cedula = $txtCedulaVieja";
        $input = array(
            'cedula' => $txtCedulaNueva,
            'nombre' => $txtNombre,
            'apellido' => $txtApellido,
            'email' => $txtEmail
        );
        $query = $this->db->query($sql, $input);
        return $query;
    }

    // Borrar personas
    function DeletePerson($idPersona){
        $this->db->where('cedula', $idPersona);
        $result = $this->db->delete('personas');
        return $result;
    }


}






?>
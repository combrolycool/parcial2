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
    function UpdatePerson($idPersona, $datos){
        $this->db->where('cedula', $idPersona);
        $result = $this->db->update('personas', $datos);
        return $result;
    }

    // Borrar personas
    function DeletePerson($idPersona){
        $this->db->where('cedula', $idPersona);
        $result = $this->db->delete('personas');
        return $result;
    }


}






?>
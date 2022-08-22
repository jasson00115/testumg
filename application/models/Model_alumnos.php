<?php
class Model_alumnos extends CI_Model
{
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Obtiene los registros de alumnos
     * @return [type] [arreglo de datos]
     */
    function getAlmnos()
    {
        $sql = "SELECT * FROM alumnos";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function create($datos) 
	{
		return $this->db->insert('alumnos', $datos);               
	}

    public function update($datos,$alumno){
        $this->db->where("alumno",$alumno);
        $this->db->update("alumnos",$datos);
    }

    public function delete($alumno){
        $this->db->where("alumno",$alumno);
        $this->db->delete("alumnos");
    }
    
}

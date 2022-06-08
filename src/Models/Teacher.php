<?php
namespace App\Models;   

class Teacher
{
    public int $id;
    public $name;
    public $email;
    public $nameCentro;
    public $numberPhone;


    public function __construct($data = null)
    {
        if ($data) {
            $this->id = isset($data['id']) ? $data['id'] : null;

            $this->name = $data['nombre'];
            $this->email = $data['email'];
            $this->nameCentro = $data['nombreCentro'];
            $this->numberPhone = $data['telefono'];
        }

        // $this->db = new SQLQueryRepository();
    }
}

?>
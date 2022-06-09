<?php
namespace App\Models;   

use App\Core\SQLQueryRepository;

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
            $this->nameCentro = $data['centro_id'];
            $this->numberPhone = $data['telefono'];
        }

        $this->db = new SQLQueryRepository();
    }

    public function all()
    {
        $teachersList = [];

        foreach($this->db->getAll() as $teacher) 
        {
            array_push($teachersList, new self ($teacher));
        } return $teachersList;
    }
}
?>
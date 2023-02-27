<?php
class FormController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }

    public function getMatelas(): array
    {
        $query = $this->model->db->query("SELECT * FROM matelas LIMIT  0,4");
        $matelas = $query->fetchALL(PDO::FETCH_ASSOC);
        return $matelas;
    }   
}
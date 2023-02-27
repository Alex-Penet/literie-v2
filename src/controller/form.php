<?php
class FormController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }


}
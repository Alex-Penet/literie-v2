<?php
class FormView
{
    private $controller;
    private $template;

    public function __construct(HomeController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "home.php";
    }

    public function render()
    {
        $data = $this->controller->getMatelas();
        require($this->template);
    }
}

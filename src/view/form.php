<?php
class FormView
{
    private $controller;
    private $template;

    public function __construct(HomeController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "form.php";
    }

    public function render()
    {
        require($this->template);
    }
}

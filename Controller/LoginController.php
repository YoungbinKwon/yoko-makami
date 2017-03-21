<?php

class LoginController
{
    private $request;
    private $model;
    private $view;
    private $url;

    public function __construct($url)
    {
        $this->model = new LoginModel();
        $this->view = new Template();
        $this->url = $url;
    }

    public function indexAction()
    {
        $customer = new Customer();
        $this->view->customer = $customer->selectAll();
        $this->view->display("Login/index.tpl");
    }
}

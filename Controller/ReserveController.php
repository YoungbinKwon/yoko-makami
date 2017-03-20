<?php

class ReserveController
{
    private $request;
    private $model;
    private $view;
    private $url;

    public function __construct($url)
    {
        $this->model = new ReserveModel();
        $this->view = new Template();
        $this->url = $url;
    }

    public function confirmAction()
    {
        $this->view->display("Reserve/confirm.tpl");
    }

    public function completeAction(){
        $this->view->display("Reserve/complete.tpl");
    }
}

?>


<?php

class VoiceSearchController
{
    private $request;
    private $model;
    private $view;
    private $url;

    public function __construct($url)
    {
        $this->model = new VoiceSearchModel();
        $this->view = new Template();
        $this->url = $url;
    }

    public function searchAction()
    {
        if (isset($_GET["value"])) {
            $nlc = new NaturalLanguageClassifier();
            $result = $nlc->classify($_GET["value"]);
            $this->view->text = $result['text'];
            $this->view->top_class = $result['classes'][0]['class_name'];
        }
        $this->view->display("VoiceSearch/search.tpl");
    }

    public function resultAction(){
        $this->view->display("VoiceSearch/result.tpl");
    }
}

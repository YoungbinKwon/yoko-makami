<?php
class VoiceSearchController
{
    private $request;
    private $model;
    private $view;
    private $url;
    public function __construct($url)
    {
        var_dump('uouououo');
        $this->model = new VoiceSearchModel();
        $this->view = new Template();
        $igo = new Igo('./Lib/ipadic', 'UTF-8');
        var_dump($igo->parse('aaaa'));
        $this->url = $url;
    }

    public function searchAction()
    {
        if (isset($_POST["audio"])) {
            $stt = new SpeechToText();
            $voice_result = $stt->getText($_POST["audio"]);
            $results = $voice_result->results;

            $nlc = new NaturalLanguageClassifier();
            $i = 0;
            /*foreach ($results as $result) {
                $phrase_info = $result->alternatives;
                $phrase = $phrase_info[0]->transcript;
                $class = $nlc->classify($phrase);
                $class_results[$i]['text'] = $class['text'];
                $class_results[$i]['class'] = $class['classes'][0]['class_name'];
                $i++;
            }*/
            //$this->view->text = $result['text'];
            //$this->view->top_class = $result['classes'][0]['class_name'];
        }
        $this->view->display("VoiceSearch/search.tpl");
    }

    public function resultAction(){
        $this->view->display("VoiceSearch/result.tpl");
    }
}

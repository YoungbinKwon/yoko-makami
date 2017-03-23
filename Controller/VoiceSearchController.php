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

            $param = explode('-', $result['classes'][0]['class_name']);
            
            $search_param['areaCode'] = 13;
            $search_param['playDate'] = '2017-04-05';

            // $search_param[$param[0]] = $param[1];
            
            $gora = new GoraPlanSearch();
            $result = $gora->getPlan($search_param);
            $tradeoff_data = [];
            $i = 0;

            foreach ($result['Items'] as $item) {
                if (!empty($item['Item']['planInfo'])) {
                    foreach ($item['Item']['planInfo'] as $plan) {
                        if ($plan['plan']['callInfo']['stockCount']) {
                            $tradeoff_data[$i]['golfCourseId'] = $item['Item']['golfCourseId'];
                            $tradeoff_data[$i]['golfCourseName'] = $item['Item']['golfCourseName'];
                            $tradeoff_data[$i]['golfCourseImageUrl'] = $item['Item']['golfCourseImageUrl'];
                            $tradeoff_data[$i]['planId'] = $plan['plan']['planId'];
                            $tradeoff_data[$i]['planName'] = $plan['plan']['planName'];
                            $tradeoff_data[$i]['price'] = $plan['plan']['price'];
                        }
                    }
                }
            }
        }
        $this->view->display("VoiceSearch/search.tpl");
    }

    public function resultAction(){
        $this->view->display("VoiceSearch/result.tpl");
    }
}

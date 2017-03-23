<?php

class GoraPlanSearch {

    private $url;
    private $appl_id;

    public function __construct()
    {
        $this->url_base = 'https://app.rakuten.co.jp/services/api/Gora/GoraPlanSearch/20150706?format=json';
        $this->appl_id = GORAAPPID;
    }

    public function getPlan($data)
    {
        $ch = curl_init();
        $url = $this->url_base . "&applicationId=" . $this->appl_id;

        foreach ($data as $key => $value) {
            $url .= "&" . $key . "=" . $value;
        }

        $params = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );

        curl_setopt_array($ch, $params);
        $result = curl_exec($ch);
        curl_close($ch);
        $decoded = json_decode($result, true);
        
        return $decoded;
    }
}

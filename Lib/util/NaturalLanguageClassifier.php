<?php

class NaturalLanguageClassifier {

    private $url;
    private $username;
    private $password;

    public function __construct()
    {
        $this->url_base = 'https://gateway.watsonplatform.net/natural-language-classifier/api/v1/classifiers/90e7b7x198-nlc-3698/classify/';
        $this->username = NLCUSERNAME;
        $this->password = NLCPASSWORD;
    }

    public function classify($data)
    {
        $ch = curl_init();
        $url = $this->url_base . "?text=" . urlencode($data);
        $params = array(
            CURLOPT_URL => $url,
            CURLOPT_USERPWD => $this->username . ":" . $this->password,
            CURLOPT_RETURNTRANSFER => true
        );

        curl_setopt_array($ch, $params);
        $result = curl_exec($ch);
        curl_close($ch);
        $decoded = json_decode($result, true);
        
        return $decoded;
    }
}

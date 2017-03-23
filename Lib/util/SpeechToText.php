<?php

class SpeechToText {
    public function __construct()
    {
        $this->url_base = 'https://stream.watsonplatform.net/speech-to-text/api/v1/recognize?continuous=true&model=ja-JP_BroadbandModel';
        $this->key = STTKEY;
    }

    public function getText($data)
    {
        try {
            $postData = str_replace('data:audio/wav;base64,', '', $data);

            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $this->url_base,
                CURLOPT_POST => true,
                CURLOPT_BINARYTRANSFER => true,
                CURLOPT_POSTFIELDS => base64_decode($postData),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                    "Content-Type: audio/wav",
                    "Authorization: Basic " . base64_encode($this->key),
                ],
            ]);

            $result = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($result);
            return $result;

        } catch(Exception $e) {
            return false;
        }
    }
}

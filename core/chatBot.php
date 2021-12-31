<?php

class chatBot {

 private $api_url;
 
    public  function __construct($url_endpoint) 
    {
        $this->api_url=$url_endpoint;
    }

    public function sendMessage($method, $data)
    {
        $url = $this->api_url.'/'.$method;
    
        if(!$curld = curl_init())
        {
            exit;
        }
        curl_setopt($curld, CURLOPT_POST, true);
        curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curld, CURLOPT_URL, $url);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curld);
        curl_close($curld);
        return $output;
    }
    
}
?>
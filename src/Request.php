<?php

namespace Pykam\RandomClient;

class Request {

    private $url = ''; 

    public function __construct($url, array $query=[]) 
    {
        $this->url = $url;

        if (!empty($query)) {
            $this->url .= '?' . http_build_query($query);
        }
    }

    public function get()
    {
        $request = curl_init($this->url);
        curl_setopt($request, CURLOPT_HEADER, false);
        $response = curl_exec($request);
        curl_close($request);
        return $response;
    }

}
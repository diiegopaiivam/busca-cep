<?php

namespace BuscaCep;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAddressZipCode($zipcode){
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $get = file_get_contents($this->url . $zipcode . "/json");

        return $get;
    }
}
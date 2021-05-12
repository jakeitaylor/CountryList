<?php

    function getListOfCountries() 
    {
        $url = file_get_contents("https://restcountries.eu/rest/v2/all");
        $decoded_url = json_decode($url);
        return $decoded_url;
    }

?>
<?php

namespace AppBundle\Services;

class Http
{
    
    const API_URL = 'http://api.brewerydb.com/v2/';
    const API_KEY = 'db15d39e89233ce2a8512af60a45692f';
    
    /**
     *
     * Perform the CURL Request
     * @param int $returnQuantity
     * @param string $type = beer/brewery
     * return array
     * 
     */
    public function doRequest($returnQuantity, $type, $additionalParams)
    {
        
        // Convert Additional Params Array to HTTP URL
        $additionalParams = http_build_query($additionalParams);
        $buildRequestUrl  = self::API_URL . $type . "?key=" . self::API_KEY . "&" . $additionalParams;
        
        // Make CURL Request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $buildRequestUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // Execute
        $response = curl_exec($ch);
        
        // Return Response
        return $response;
    }
}
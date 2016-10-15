<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Http;

/**
 * Controller used to manage API Calls to the Brewery
 *
 * @author Sudhamsha Reddy <sudhamshareddy@gmail.com>
 */
class BreweryController extends Controller
{
    /**
     * @Route("/")
     * Function called when homepage is loaded
     * @Method("GET")
     * @Cache(maxage="10")
     */
    public function indexAction()
    {
        return $this->render('default/homepage.html.twig');
    }
    
    /**
     * Get the beers from the API Call
     * @param Request $request
     * @return Response
     */
    public function getBeersAction(Request $request){
        
        // What you need to get
        $type = "beers";
        $returnQuantity = 1;
        
        // Pass Additional Params
        $additionalParams = [
            "order"         => "random",
            "randomCount"   => 1,
            "withBreweries" => "Y",
            "abv"           => "0,20",
            "hasLabels"     => "Y"
        ];
        
        try {
            $response = $this->get("http")->doRequest($returnQuantity, $type, $additionalParams);
        } catch (\Exception $e){
            $this->handleError($e->getMessage());
        }
        
        $checkForAdditionalErrors = json_decode($response);
        
        if( isset($checkForAdditionalErrors->errorMessage)) {
            return $this->handleError($checkForAdditionalErrors->errorMessage);
        }
        
        return new Response($response);
    }
    
    /**
     * Search the beers/breweries from the API Call
     * @param Request $request
     * @return Response
     */
    public function searchAction(Request $request){

        // Get Posted Content
        $postedContent = json_decode($request->getContent());

        // Handle Error if type/text are not set
        if( !isset($postedContent->type) || !isset($postedContent->text)){
            return $this->handleError("Search Type or Search Text are not set");
        }

        // What you need to get
        $searchType = $postedContent->type;
        $searchText = $postedContent->text;
        $type       = "search";

        // Perform Regex Validation on Search Text
        if( !preg_match('/^[a-zA-Z0-9_\d\_\s-]+$/', $searchText) ){
            return $this->handleError("Search Text should only contain alpha-numeric values, spaces or hyphen");
        }

        $returnQuantity = 1;
        
        // Pass Additional Params
        $additionalParams = [
            "p"             => 1,
            "type"          => $searchType,
            "q"             => $searchText,
            "withBreweries" => "Y",
            "hasLabels"     => "Y"
        ];
        
        try {
            
            // Perform Request and get response array
            $response = $this->get("http")->doRequest($returnQuantity, $type, $additionalParams);
        } catch (\Exception $e){
            
            // handle any exceptions
            $this->handleError($e->getMessage());
        }
        
        // Check for any additional API Errors
        $checkForAdditionalErrors = json_decode($response);
        
        if( isset($checkForAdditionalErrors->errorMessage)) {
            
            // If any, throw exception
            return $this->handleError($checkForAdditionalErrors->errorMessage);
        }
        
        return new Response($response);
    }
    
    /**
     * Handle Errors
     * @param $errMessage
     * @param $e
     * @param $type
     * @return JsonResponse
     * @todo Implement Database Logging
     *
     */
    public function handleError($errMessage, $e = NULL, $type = "JSON"){

        if( $type == "JSON"){
            // Returning JSON Response to Angular App to handle the rest
            return new JsonResponse($errMessage, 400);
        } else {
            throw new Exception("REGEX Failed");
        }

    }
}

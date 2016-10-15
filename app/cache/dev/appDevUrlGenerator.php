<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => '_locale',    1 => 'code',    2 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',    '_locale' => 'en',  ),  2 =>   array (    'code' => '\\d+',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_brewery_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweryController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login_form' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'en',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login_check' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweryController::indexAction',    'template' => 'default/homepage.html.twig',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_beers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweryController::getBeersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get-beers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BreweryController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

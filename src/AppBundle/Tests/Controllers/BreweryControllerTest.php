<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\Post;

/**
 * Functional test for the controllers defined inside BreweryController.
 *
 * Execute the application tests using this command (requires PHPUnit to be installed):
 *
 *  $ phpunit -c app
 *
 */
class BreweryControllerTest extends WebTestCase
{

    /**
     * Test passing no type or text
     * Test should fail
     */
    public function testSearchVariables()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/search', []);

        $this->assertNotEquals(400, $client->getResponse()->getStatusCode());
    }

    /**
     * Test passing special characters in text
     * Test should fail
     */
    public function testSearchRegex()
    {

        $client = static::createClient();
        $postData = ['type' => 'beer', 'text' => 'sud!'];
        $crawler = $client->request('POST', '/search', [], [], ['CONTENT_TYPE' => 'application/json'], json_encode($postData));

        $this->assertNotEquals(400, $client->getResponse()->getStatusCode());

    }
}

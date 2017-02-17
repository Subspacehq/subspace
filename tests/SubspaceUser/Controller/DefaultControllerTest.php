<?php

namespace Tests\Subspace\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Get Started Today', $crawler->filter('.register-form h1')->text());
    }

    public function testLocationsPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/locations');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Get Started Today', $crawler->filter('.register-form h1')->text());
    }

    public function testTourPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tour');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Get Started Today', $crawler->filter('.register-form h1')->text());
    }

    public function testPricingPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pricing');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Get Started Today', $crawler->filter('.register-form h1')->text());
    }
}

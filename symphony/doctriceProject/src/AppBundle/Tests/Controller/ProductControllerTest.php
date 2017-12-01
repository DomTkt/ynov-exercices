<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testCreateproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createProduct');
    }

    public function testDisplayproducts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/displayProducts');
    }

    public function testDisplaydetailproducts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/displayDetailProducts');
    }

    public function testUpdateproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateProduct');
    }

    public function testDeleteproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteProduct');
    }

}

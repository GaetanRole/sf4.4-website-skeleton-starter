<?php

declare(strict_types = 1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\Client;

/**
     * @author  Gaëtan Rolé-Dubruille <gaetan.role@gmail.com>
 */
abstract class AbstractWebTestCase extends WebTestCase
{
    /** @var Client A Client instance */
    protected $webClient;

    /**
     * Setting up $client var
     */
    protected function setUp(): void
    {
        $this->webClient = static::createClient();
        $this->webClient->followRedirects();
    }
}
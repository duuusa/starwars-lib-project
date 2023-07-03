<?php

use Libraries\starwarslib\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetName()
    {
        $api = new Api();
        $this->assertIsString($api->getName());
    }
}
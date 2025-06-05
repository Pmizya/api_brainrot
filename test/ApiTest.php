<?php
//vendor\bin\phpunit ApiTest.php

use PHPUnit\Framework\TestCase;


class ApiTest extends TestCase
{

    private function getUrl($filter, $value, $apiKey)
    {
        return "http://localhost/Brainrot/api/public_html?$filter=$value&apiKey=$apiKey";
    }

    public function testIsReachable()
    {
        $response = json_decode(file_get_contents($this->getUrl("name", "", "abcd")),true);
        $this->assertArrayHasKey("success", $response, "API Reachable => FAILED");
    }

    public function testKeyInvalid()
    {
        $response = json_decode(file_get_contents($this->getUrl("name", "", "abcd")),true);
        $this->assertFalse($response["success"], "Auth System (Missing Authentication) => FAILED");
    }


    public function testIsEmptySearch()
    {
        $response = json_decode(file_get_contents($this->getUrl("name", "XXX", "kQM9J4VvmkOqiI65gNKf2d4Lb5JDqz5J")),true);
        $this->assertCount(0, $response["brainrots"], "!Empty => FAILED");
    }



    public function testFilterInvalid()
    {
        $response = json_decode(file_get_contents($this->getUrl("<script>alert()</script>", "", "kQM9J4VvmkOqiI65gNKf2d4Lb5JDqz5J")),true);
        $this->assertFalse($response["success"], "FILTER VALIDATION  => FAILED ");
    }

    public function testNotPassingParams()
    {
        $response = json_decode(file_get_contents("http://localhost/Brainrot/api/public_html"),true);   
        $this->assertFalse($response["success"], "PARAMETERS VALIDATION  => FAILED ");
    }
}


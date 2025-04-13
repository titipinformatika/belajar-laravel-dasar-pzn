<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testGetConfigurationFromFileConfigContoh()
    {
        $firstname = config("contoh.author.first");
        $lastname = config("contoh.author.last");
        $channels = config("contoh.youtube");
        $web=config("contoh.web");
        $city = config("contoh.city");

        self::assertEquals("Asep", $firstname);
        self::assertEquals("Riki", $lastname);
        self::assertEquals("Titip Informatika",$channels);
        self::assertEquals("asepriki.com",$web);
        self::assertEquals("Bogor",$city);
    }

}

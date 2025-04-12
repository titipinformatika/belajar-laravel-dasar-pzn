<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env("YOUTUBE",);
        $youtube2 = Env::get("YOUTUBE",);

        self::assertEquals("Titip Informatika",$youtube);
        self::assertEquals("Titip Informatika",$youtube2);

    }

    public function testGetEnvFromDotEnvFile()
    {
        $author = Env::get("AUTHOR");
        self::assertEquals("Asep Riki",$author);

    }

    public function testDefaultValueEnv()
    {
        $firstname = env("firstname","Asep");
        self::assertEquals("Asep",$firstname);
    }

}

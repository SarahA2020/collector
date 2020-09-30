<?php

require '../includes/functions.php';

use PHPUnit\Framework\TestCase;

class Index extends TestCase
{

    public function testSuccessDisplayCard()
    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '<div class="card dog"><div class="card_top"><h2 class="player_name">cat bird</h2><h3 class="club">dog </h3></div><img src="deer"><div class="stats"><p class="position">Position: rabbit </p><p class="DOB">DOB: turtle </p><p class="height">Height: wolf m </p><p class="weight">Weight: gorilla kg </p></div></div>';

        $result = display_card($input);

        $this->assertEquals($expectedOutput, $result);
    }
}

//    public function testSuccessdoMaths2()
//    {
//        $input = 10;
//        $expectedOutput = 4.0;
//
//        $result = doMaths($input);
//
//        $this->assertEquals($expectedOutput, $result);
//    }
//
//    public function testMalformeddoMaths()
//    {
//        $input = [];
//        $this->expectException(TypeError::class);
//
//        $result = doMaths($input);
//
//    }
//
//}

<?php

require '../includes/functions.php';

use PHPUnit\Framework\TestCase;

class Index extends TestCase

{
    public function testSuccessDisplayCard()
        // my input is an array and my expected output is a string
    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '<div class="card dog"><div class="card_top"><h2 class="player_name">cat bird</h2><h3 class="club">dog </h3></div><img src="deer"><div class="stats"><p class="position">Position: rabbit </p><p class="DOB">DOB: turtle </p><p class="height">Height: wolf m </p><p class="weight">Weight: gorilla kg </p></div></div>';

        $result = display_card($input);

        $this->assertEquals($expectedOutput, $result);
    }

    public function testFailureDisplayCard()

    {
        $input = ['klub' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard2()

    {
        $input = ['club' => 'dog', 'playa_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard3()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'playa_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard4()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'img' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard5()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'positon' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard6()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DAB' => 'turtle', 'height' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard7()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'hight' => 'wolf', 'weight' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

    public function testFailureDisplayCard8()

    {
        $input = ['club' => 'dog', 'player_first_name' => 'cat', 'player_last_name' => 'bird', 'image' => 'deer', 'position' => 'rabbit', 'DOB' => 'turtle', 'height' => 'wolf', 'weght' => 'gorilla'];
        $expectedOutput = '';

        $result = display_card($input);

        $this->assertEmpty($expectedOutput, $result);
    }

   public function testMalformedDisplayCard()
       // my datatype is an array but I have deliberately passed the wrong datatype, an integer
   {
       $input = 10;
       $this->expectException(TypeError::class);

       $result = display_card($input);

   }

}

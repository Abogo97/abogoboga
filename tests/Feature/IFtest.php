<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IFtest extends TestCase
{
    public function test_if()
    {
        $this->view('if',['hobbies' =>[]])
        ->assertSeeText('I dont have hobbies');
        $this->view('if',['hobbies' =>['Reading']])
        ->assertSeeText('I have one hobby');
        $this->view('if',['hobbies' =>['Eating','Sleeping']])
        ->assertSeeText('I have multiple hobbies');

    }
}

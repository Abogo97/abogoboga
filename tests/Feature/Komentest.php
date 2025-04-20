<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Komentest extends TestCase
{
    public function test_Komentest()
    {
        $this->view('Komen', [])
        ->assertSeeText('Komen')
        ->assertDontSeeText('Ikhwan');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Disabledtest extends TestCase
{
    public function test_disabled()
    {
        $this->view('disabled', ['name'=> 'John'])
        ->assertDontSeeText('John')
        ->assertSeeText('hai {{ $name }}');
    }
}

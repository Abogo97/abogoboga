<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class halotest extends TestCase
{
    public function test_halotest()
    {
    $this->get('/halo')
    ->assertSeeText("Abogo");
    }
    public function test_hitest()
    {
    $this->get('/hi')
    ->assertSeeText("Ikhwan");
    }

    public function test_halotestView()
    {
    $this->view('halo', ['name' => 'Abogo'])
    ->assertSeeText("Abogo");
    }
    public function test_hitestView()
    {
    $this->view('admin.hi', ['name' => 'Ikhwan'])
    ->assertSeeText("Ikhwan");
    }
}

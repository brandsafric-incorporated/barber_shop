<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceTest extends TestCase
{
  public function testServicesCreation()
      {
          $title = 'Full Hair Cut';
          $description = "Great hair cut with latest fashion";
          print "\n[ServiceTest] :: adding new service - '" . $title . "'.";
          factory('App\Service')->create([
              'title' => $title,
              'description' => $description,
              'image_path' => '',
              'price' => 20
          ]);

          print "\n[ServiceTest] :: asserting that service - '" . $title . "' exists.";
          $this->assertDatabaseHas('services', [
              'title' => $title,
              'description' => $description
          ]);
      }
}

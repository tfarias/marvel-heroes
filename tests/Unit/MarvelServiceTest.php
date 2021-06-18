<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Models Test
 * @package Tests\Feature\Cart
 */
class MarvelServiceTest extends TestCase
{
    /**
     *
     * service api marvel
     *
     * @test
     */
    public function status_api_marvel()
    {
        $marvelService = app(\App\Services\MarvelService::class);
        $result = $marvelService->execute(['limit'=> 1],'characters');

        $this->assertEquals(1,$result->data->count,"characters");
    }

    /**
     *
     * service api marvel
     *
     * @test
     */
    public function status_api_marvel_character()
    {
        $marvelService = app(\App\Services\MarvelService::class);
        $result = $marvelService->execute(['limit'=> 1],'characters');
        $data = $result->data->results[0];
        $find = $marvelService->execute([],'characters',$data->id);

        $this->assertEquals(1,$find->data->total,"find characters");

        $this->assertEquals($data->id,$find->data->results[0]->id,"find characters");
    }


    public function status_api_marvel_stories()
    {
        $marvelService = app(\App\Services\MarvelService::class);
        $result = $marvelService->execute(['limit'=> 1],'characters');
        $data = $result->data->results[0];
        $find = $marvelService->execute(['characters'=> $data->id,'limit'=> 5],'stories');

        $this->assertEquals(5,$find->data->total,"list stories");

    }


}

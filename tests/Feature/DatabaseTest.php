<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $tableName = 'posts';

        $article = null;
        //array of collection
        $recentArticles = DB::table($tableName)
            ->orderBy('id', 'desc')
            ->limit(0 + 1)
            ->get();

        if ($recentArticles->isNotEmpty()) {
            if ($recentArticles->has(0)) {
                $article = $recentArticles[0];

            }
        }

        if ($article->id === 1){
            $this->assertTrue(true);
        }
    }
}

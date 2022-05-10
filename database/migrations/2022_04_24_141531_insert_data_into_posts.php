<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDataIntoPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        for($i =1 ;$i <= 50;$i++){
            \App\Models\Post::query()->create([
                'title'=>'post-'.$i,
                'content'=>\Illuminate\Support\Str::random(60),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\Models\Post::query()->delete();
    }
}

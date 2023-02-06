<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId("state_id")->constrained()->onDelete("cascade");
            $table->string("city", 50);
            $table->string("county", 50);
            $table->string("shape", 50);
            $table->string("coords");
            $table->double("latitude", 15, 2);
            $table->double("longitude", 15, 2);
            $table->string("slug");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};

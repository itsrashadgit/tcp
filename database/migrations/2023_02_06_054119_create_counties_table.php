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
        Schema::create('counties', function (Blueprint $table) {
            $table->id();
            $table->foreignId("state_id")->constrained()->onDelete("cascade");
            // $table->string("city", 50);
            $table->string("name", 50);
            $table->string("shape", 50)->nullable();
            $table->string("coords")->nullable();
            $table->double("latitude", 15, 2)->nullable();
            $table->double("longitude", 15, 2)->nullable();
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
        Schema::dropIfExists('counties');
    }
};

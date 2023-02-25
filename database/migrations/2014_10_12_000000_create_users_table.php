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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("username");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text("address")->nullable();
            $table->foreignId("state_id");
            $table->foreignId("county_id");
            $table->string("zip_code")->nullable();
            $table->string("user_type");
            // $table->string("phone");
            $table->text("business_description")->nullable();
            $table->text("company_mission")->nullable();
            $table->text("company_vision")->nullable();
            $table->text("products")->nullable();
            $table->text("services")->nullable();
            $table->string("trade")->nullable();
            $table->string("profession_title")->nullable();
            $table->integer("years_of_experience")->nullable();
            $table->string("education")->nullable();
            $table->string("institution")->nullable();
            $table->text("work_history")->nullable();
            $table->string("license")->nullable();
            $table->text("certificates")->nullable();
            $table->text("achievements")->nullable();
            $table->string("ability_skills")->nullable();
            $table->text("about_you")->nullable();
            $table->string("cover_photo")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

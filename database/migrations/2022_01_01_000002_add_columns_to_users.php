<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text("address");
            $table->foreignId("state_id");
            $table->string("zip_code");
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            // $table->dropColumn('avatar');
        });
    }
}

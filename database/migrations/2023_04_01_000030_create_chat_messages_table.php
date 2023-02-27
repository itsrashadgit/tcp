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
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sender_id")->nullable();
            $table->unsignedBigInteger("receiver_id")->nullable();
            $table->tinyInteger("conversation_type")->default(0)->comment("0 - Single Chat, 1 - Group Chat");
            $table->text("message");
            $table->boolean("is_seen")->default(false);
            $table->tinyInteger("message_type")->default(0)->comment("0- text message, 1- image, 2- pdf, 3- doc, 4- voice");
            $table->string("file_name")->nullable();
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
        Schema::dropIfExists('chat_messages');
    }
};

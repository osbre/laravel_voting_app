<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->index()
                ->constrained()
                ->onDelete('cascade');
            $table->unsignedTinyInteger('item_id')->index();
            $table->ipAddress('ip_address')->index();
            $table->string('country')->index()->nullable();
            $table->string('city')->index()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
};

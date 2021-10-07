<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('fb_id')->nullable();
            $table->string('twit_id')->nullable();
            $table->string('ig_id')->nullable();
            $table->string('in_id')->nullable();
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
}

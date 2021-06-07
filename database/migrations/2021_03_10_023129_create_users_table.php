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
            $table->string("username")->unique();
            $table->string('password');
            $table->text("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("avatar")->nullable();
            $table->enum("status", ["ACTIVE", "INACTIVE"]);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            // $table->integer("role_id")->unsigned();

            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('users');
    }
}

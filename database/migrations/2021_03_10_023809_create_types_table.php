<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('role_id');
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('intranet_admin')->nullable();
            $table->string('layanan_fasilitas')->nullable();
            $table->string('internship')->nullable();
            $table->string('keuangan')->nullable();
            $table->string('kepegawaian')->nullable();
            $table->string('aset_bmn')->nullable();
            $table->string('surat_arsip')->nullable();
            $table->string('kms')->nullable();
            $table->timestamps();
        });

        // Schema::table('types', function (Blueprint $table) {
        //     $table->foreign('role_id')->references('id')->on('roles');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('types');
    }
}
